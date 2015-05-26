<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 27/01/15
 * Time: 17:21
 */

namespace FiasParser\Events;


/**
 * Class BulkEvent
 * @package FiasParser\Events
 */
class BulkEvent extends Event {
    protected $event;

    function __construct($event)
    {
        $this->event = $event;
        call_user_func_array('parent::__construct', func_get_args());
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }
}