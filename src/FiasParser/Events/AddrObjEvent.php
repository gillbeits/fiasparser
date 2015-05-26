<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 26/01/15
 * Time: 15:13
 */

namespace FiasParser\Events;
use FiasParser\Models\AddrObj;


/**
 * Class AddrObjEvent
 * @package FiasParser\Events
 */
class AddrObjEvent extends Event {
    private $addrObj;

    public function __construct(AddrObj $addrObj)
    {
        $this->addrObj = $addrObj;
        call_user_func_array('parent::__construct', func_get_args());
    }

    /**
     * @return null|AddrObj
     */
    public function getAddrObj()
    {
        return $this->addrObj;
    }
}