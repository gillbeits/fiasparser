<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 26/01/15
 * Time: 15:21
 */

namespace FiasParser\Models;


/**
 * Class AddrObj
 * @package FiasParser\Models
 */
class AddrObj extends Object {
    protected $aoguid;
    protected $formalname;
    protected $regioncode;
    protected $autocode;
    protected $areacode;
    protected $citycode;
    protected $ctarcode;
    protected $placecode;
    protected $streetcode;
    protected $extrcode;
    protected $sextcode;
    protected $offname;
    protected $postalcode;
    protected $ifnsfl;
    protected $terrifnsfl;
    protected $ifnsul;
    protected $terrifnsul;
    protected $okato;
    protected $oktmo;
    protected $updatedate;
    protected $shortname;
    protected $aolevel;
    protected $parentguid;
    protected $aoid;
    protected $previd;
    protected $nextid;
    protected $code;
    protected $plaincode;
    protected $actstatus;
    protected $centstatus;
    protected $operstatus;
    protected $currstatus;
    protected $startdate;
    protected $enddate;
    protected $normdoc;

    /**
     * @return mixed
     */
    public function getAoguid()
    {
        return $this->aoguid;
    }

    /**
     * @param mixed $aoguid
     */
    public function setAoguid($aoguid)
    {
        $this->aoguid = $aoguid;
    }

    /**
     * @return mixed
     */
    public function getFormalname()
    {
        return $this->formalname;
    }

    /**
     * @param mixed $formalname
     */
    public function setFormalname($formalname)
    {
        $this->formalname = $formalname;
    }

    /**
     * @return mixed
     */
    public function getRegioncode()
    {
        return $this->regioncode;
    }

    /**
     * @param mixed $regioncode
     */
    public function setRegioncode($regioncode)
    {
        $this->regioncode = $regioncode;
    }

    /**
     * @return mixed
     */
    public function getAutocode()
    {
        return $this->autocode;
    }

    /**
     * @param mixed $autocode
     */
    public function setAutocode($autocode)
    {
        $this->autocode = $autocode;
    }

    /**
     * @return mixed
     */
    public function getAreacode()
    {
        return $this->areacode;
    }

    /**
     * @param mixed $areacode
     */
    public function setAreacode($areacode)
    {
        $this->areacode = $areacode;
    }

    /**
     * @return mixed
     */
    public function getCitycode()
    {
        return $this->citycode;
    }

    /**
     * @param mixed $citycode
     */
    public function setCitycode($citycode)
    {
        $this->citycode = $citycode;
    }

    /**
     * @return mixed
     */
    public function getCtarcode()
    {
        return $this->ctarcode;
    }

    /**
     * @param mixed $ctarcode
     */
    public function setCtarcode($ctarcode)
    {
        $this->ctarcode = $ctarcode;
    }

    /**
     * @return mixed
     */
    public function getPlacecode()
    {
        return $this->placecode;
    }

    /**
     * @param mixed $placecode
     */
    public function setPlacecode($placecode)
    {
        $this->placecode = $placecode;
    }

    /**
     * @return mixed
     */
    public function getStreetcode()
    {
        return $this->streetcode;
    }

    /**
     * @param mixed $streetcode
     */
    public function setStreetcode($streetcode)
    {
        $this->streetcode = $streetcode;
    }

    /**
     * @return mixed
     */
    public function getExtrcode()
    {
        return $this->extrcode;
    }

    /**
     * @param mixed $extrcode
     */
    public function setExtrcode($extrcode)
    {
        $this->extrcode = $extrcode;
    }

    /**
     * @return mixed
     */
    public function getSextcode()
    {
        return $this->sextcode;
    }

    /**
     * @param mixed $sextcode
     */
    public function setSextcode($sextcode)
    {
        $this->sextcode = $sextcode;
    }

    /**
     * @return mixed
     */
    public function getOffname()
    {
        return $this->offname;
    }

    /**
     * @param mixed $offname
     */
    public function setOffname($offname)
    {
        $this->offname = $offname;
    }

    /**
     * @return mixed
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * @param mixed $postalcode
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

    /**
     * @return mixed
     */
    public function getIfnsfl()
    {
        return $this->ifnsfl;
    }

    /**
     * @param mixed $ifnsfl
     */
    public function setIfnsfl($ifnsfl)
    {
        $this->ifnsfl = $ifnsfl;
    }

    /**
     * @return mixed
     */
    public function getTerrifnsfl()
    {
        return $this->terrifnsfl;
    }

    /**
     * @param mixed $terrifnsfl
     */
    public function setTerrifnsfl($terrifnsfl)
    {
        $this->terrifnsfl = $terrifnsfl;
    }

    /**
     * @return mixed
     */
    public function getIfnsul()
    {
        return $this->ifnsul;
    }

    /**
     * @param mixed $ifnsul
     */
    public function setIfnsul($ifnsul)
    {
        $this->ifnsul = $ifnsul;
    }

    /**
     * @return mixed
     */
    public function getTerrifnsul()
    {
        return $this->terrifnsul;
    }

    /**
     * @param mixed $terrifnsul
     */
    public function setTerrifnsul($terrifnsul)
    {
        $this->terrifnsul = $terrifnsul;
    }

    /**
     * @return mixed
     */
    public function getOkato()
    {
        return $this->okato;
    }

    /**
     * @param mixed $okato
     */
    public function setOkato($okato)
    {
        $this->okato = $okato;
    }

    /**
     * @return mixed
     */
    public function getOktmo()
    {
        return $this->oktmo;
    }

    /**
     * @param mixed $oktmo
     */
    public function setOktmo($oktmo)
    {
        $this->oktmo = $oktmo;
    }

    /**
     * @return mixed
     */
    public function getUpdatedate()
    {
        return $this->updatedate;
    }

    /**
     * @param mixed $updatedate
     */
    public function setUpdatedate($updatedate)
    {
        $this->updatedate = $updatedate;
    }

    /**
     * @return mixed
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * @param mixed $shortname
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;
    }

    /**
     * @return mixed
     */
    public function getAolevel()
    {
        return $this->aolevel;
    }

    /**
     * @param mixed $aolevel
     */
    public function setAolevel($aolevel)
    {
        $this->aolevel = $aolevel;
    }

    /**
     * @return mixed
     */
    public function getParentguid()
    {
        return $this->parentguid;
    }

    /**
     * @param mixed $parentguid
     */
    public function setParentguid($parentguid)
    {
        $this->parentguid = $parentguid;
    }

    /**
     * @return mixed
     */
    public function getAoid()
    {
        return $this->aoid;
    }

    /**
     * @param mixed $aoid
     */
    public function setAoid($aoid)
    {
        $this->aoid = $aoid;
    }

    /**
     * @return mixed
     */
    public function getPrevid()
    {
        return $this->previd;
    }

    /**
     * @param mixed $previd
     */
    public function setPrevid($previd)
    {
        $this->previd = $previd;
    }

    /**
     * @return mixed
     */
    public function getNextid()
    {
        return $this->nextid;
    }

    /**
     * @param mixed $nextid
     */
    public function setNextid($nextid)
    {
        $this->nextid = $nextid;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getPlaincode()
    {
        return $this->plaincode;
    }

    /**
     * @param mixed $plaincode
     */
    public function setPlaincode($plaincode)
    {
        $this->plaincode = $plaincode;
    }

    /**
     * @return mixed
     */
    public function getActstatus()
    {
        return $this->actstatus;
    }

    /**
     * @param mixed $actstatus
     */
    public function setActstatus($actstatus)
    {
        $this->actstatus = $actstatus;
    }

    /**
     * @return mixed
     */
    public function getCentstatus()
    {
        return $this->centstatus;
    }

    /**
     * @param mixed $centstatus
     */
    public function setCentstatus($centstatus)
    {
        $this->centstatus = $centstatus;
    }

    /**
     * @return mixed
     */
    public function getOperstatus()
    {
        return $this->operstatus;
    }

    /**
     * @param mixed $operstatus
     */
    public function setOperstatus($operstatus)
    {
        $this->operstatus = $operstatus;
    }

    /**
     * @return mixed
     */
    public function getCurrstatus()
    {
        return $this->currstatus;
    }

    /**
     * @param mixed $currstatus
     */
    public function setCurrstatus($currstatus)
    {
        $this->currstatus = $currstatus;
    }

    /**
     * @return mixed
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param mixed $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * @return mixed
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param mixed $enddate
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    }

    /**
     * @return mixed
     */
    public function getNormdoc()
    {
        return $this->normdoc;
    }

    /**
     * @param mixed $normdoc
     */
    public function setNormdoc($normdoc)
    {
        $this->normdoc = $normdoc;
    }
}