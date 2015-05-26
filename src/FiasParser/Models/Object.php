<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 27/01/15
 * Time: 17:39
 */

namespace FiasParser\Models;


/**
 * Class Object
 * @package FiasParser\Models
 */
class Object {
    public function __toArray()
    {
        $arr = [];
        foreach ($this as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }
}