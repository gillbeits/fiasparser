<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 26/05/15
 * Time: 10:49
 */

namespace FiasParser;


use FiasParser\Events\AddrObjEvent;
use FiasParser\Events\BulkEvent;
use FiasParser\Events\HouseEvent;
use FiasParser\Models\Object;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Parser extends EventDispatcher {
    protected $xmlReader;
    protected $factory;

    private $bulk_count = 0;

    private $path = [];
    private $bulk_rows = [];
    private $bulk_rows_counter = [];


    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory = null)
    {
        if (null == $factory) {
            $factory = new Factory();
        }

        $this->xmlReader = new \XMLReader();
        $this->factory = $factory;
    }

    /**
     * @param $event
     * @return mixed
     */
    public function getBulkRowsCounter($event)
    {
        return $this->bulk_rows_counter[$event];
    }

    /**
     * @param $file
     */
    public function parse($file)
    {
        $this->path = [];

        $this->xmlReader->open($file);
        $this->read();
        $this->xmlReader->close();
    }

    protected function read()
    {
        $shop = null;
        $xml = $this->xmlReader;
        while ($xml->read()) {
            if ($xml->nodeType == \XMLReader::END_ELEMENT) {
                array_pop($this->path);
                continue;
            }


            if ($xml->nodeType == \XMLReader::ELEMENT) {
                array_push($this->path, $xml->name);
                $path = implode('/', $this->path);

                if ($xml->isEmptyElement) {
                    array_pop($this->path);
                }


                switch ($path) {
                    case 'AddressObjects/Object':
                        $addrObj = $this->factory->createAddrObject();
                        $this->dispatch('AddressObject', new AddrObjEvent($this->parseObj($addrObj), $this));
                        break;

                    case 'Houses/House':
                        $house = $this->factory->createHouse();
                        $this->dispatch('House', new HouseEvent($this->parseObj($house), $this));
                        break;
                    default:
                }
            }
        }

        foreach ($this->bulk_rows as $event => $rows) {
            if (!empty($rows)) {
                $this->dispatch('BulkUpload', new BulkEvent($event, $this));
            }
        }
    }

    /**
     * @param $event
     * @param $obj
     */
    public function addRow($event, $obj)
    {
        $this->bulk_rows[$event][] = $obj;
        $this->bulk_rows_counter[$event]++;
        if (count($this->bulk_rows[$event]) >= $this->bulk_count) {
            $this->dispatch('BulkUpload', new BulkEvent($event, $this));
            $this->bulk_rows[$event] = [];
        }
    }

    /**
     * @param null $event
     * @return array
     */
    public function getRows($event = null)
    {
        return null!== $event ? $this->bulk_rows[$event] : $this->bulk_rows;
    }

    /**
     * @return \SimpleXMLElement
     */
    protected function loadElementXml()
    {
        $xml = $this->xmlReader->readOuterXml();

        return simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>' . $xml);
    }

    /**
     * @param $field
     * @return string
     */
    private function camelize($field)
    {
        return strtr(ucwords(strtr($field, array('_' => ' ', '.' => '_ '))), array(' ' => ''));
    }

    /**
     * @param Object $obj
     * @return mixed
     */
    protected function parseObj($obj)
    {
        $xml = $this->loadElementXml();
        foreach ($xml->attributes() as $attribute => $value) {
            $method = 'set' . $this->camelize($attribute);
            if (method_exists($obj, $method)) {
                call_user_func([$obj, $method], (string)$value);
            }
        }
        return $obj;
    }

    /**
     * @return int
     */
    public function getBulkCount()
    {
        return $this->bulk_count;
    }

    /**
     * @param int $bulk_count
     * @return $this
     */
    public function setBulkCount($bulk_count)
    {
        $this->bulk_count = $bulk_count;
        return $this;
    }
}