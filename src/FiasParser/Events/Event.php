<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 27/01/15
 * Time: 16:56
 */

namespace FiasParser\Events;

use Symfony\Component\EventDispatcher\Event as BaseClass;
use FiasParser\Parser;

/**
 * Class Event
 * @package FiasParser\Events
 */
class Event extends BaseClass {
    protected $parser;

    function __construct()
    {
        $args = func_get_args();
        $this->parser = end($args);
    }

    /**
     * @return Parser
     */
    public function getParser()
    {
        return $this->parser;
    }
}