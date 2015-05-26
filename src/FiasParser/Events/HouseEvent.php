<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 27/01/15
 * Time: 16:44
 */

namespace FiasParser\Events;
use FiasParser\Models\House;


/**
 * Class HouseEvent
 * @package FiasParser\Events
 */
class HouseEvent extends Event {
    private $house;

    function __construct(House $house)
    {
        $this->house = $house;
        call_user_func_array('parent::__construct', func_get_args());
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->house;
    }
}