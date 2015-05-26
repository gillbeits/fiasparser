<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 26/05/15
 * Time: 10:51
 */

namespace FiasParser;


use FiasParser\Models\AddrObj;
use FiasParser\Models\House;

class Factory {
    public function createAddrObject()
    {
        return new AddrObj();
    }

    public function createHouse()
    {
        return new House();
    }
}