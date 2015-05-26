<?php
/**
 * Project: biglion
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 27/01/15
 * Time: 16:47
 */

namespace FiasParser\Models;


/**
 * Class House
 * @package FiasParser\Models
 */
class House extends Object {
    protected $postalcode;
    protected $ifnsfl;
    protected $terrifnsfl;
    protected $ifnsul;
    protected $terrifnsul;
    protected $okato;
    protected $oktmo;
    protected $updatedate;
    protected $housenum;
    protected $eststatus;
    protected $buildnum;
    protected $strucnum;
    protected $strstatus;
    protected $houseid;
    protected $houseguid;
    protected $aoguid;
    protected $startdate;
    protected $enddate;
    protected $statstatus;
    protected $normdoc;
    protected $counter;

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
    public function getHousenum()
    {
        return $this->housenum;
    }

    /**
     * @param mixed $housenum
     */
    public function setHousenum($housenum)
    {
        $this->housenum = $housenum;
    }

    /**
     * @return mixed
     */
    public function getEststatus()
    {
        return $this->eststatus;
    }

    /**
     * @param mixed $eststatus
     */
    public function setEststatus($eststatus)
    {
        $this->eststatus = $eststatus;
    }

    /**
     * @return mixed
     */
    public function getBuildnum()
    {
        return $this->buildnum;
    }

    /**
     * @param mixed $buildnum
     */
    public function setBuildnum($buildnum)
    {
        $this->buildnum = $buildnum;
    }

    /**
     * @return mixed
     */
    public function getStrucnum()
    {
        return $this->strucnum;
    }

    /**
     * @param mixed $strucnum
     */
    public function setStrucnum($strucnum)
    {
        $this->strucnum = $strucnum;
    }

    /**
     * @return mixed
     */
    public function getStrstatus()
    {
        return $this->strstatus;
    }

    /**
     * @param mixed $strstatus
     */
    public function setStrstatus($strstatus)
    {
        $this->strstatus = $strstatus;
    }

    /**
     * @return mixed
     */
    public function getHouseid()
    {
        return $this->houseid;
    }

    /**
     * @param mixed $houseid
     */
    public function setHouseid($houseid)
    {
        $this->houseid = $houseid;
    }

    /**
     * @return mixed
     */
    public function getHouseguid()
    {
        return $this->houseguid;
    }

    /**
     * @param mixed $houseguid
     */
    public function setHouseguid($houseguid)
    {
        $this->houseguid = $houseguid;
    }

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
    public function getStatstatus()
    {
        return $this->statstatus;
    }

    /**
     * @param mixed $statstatus
     */
    public function setStatstatus($statstatus)
    {
        $this->statstatus = $statstatus;
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

    /**
     * @return mixed
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * @param mixed $counter
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;
    }
}