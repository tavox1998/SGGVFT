<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saextservices
 *
 * @ORM\Table(name="SAEXTSERVICES")
 * @ORM\Entity
 */
class Saextservices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ServiceType", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $servicetype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NroSerial", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroserial;

    /**
     * @var string
     *
     * @ORM\Column(name="KeySerial", type="string", length=10, nullable=true)
     */
    private $keyserial;

    /**
     * @var string
     *
     * @ORM\Column(name="SMSLogin", type="string", length=30, nullable=true)
     */
    private $smslogin;

    /**
     * @var string
     *
     * @ORM\Column(name="SMSPassword", type="string", length=30, nullable=true)
     */
    private $smspassword;

    /**
     * @var string
     *
     * @ORM\Column(name="HostService", type="string", length=60, nullable=true)
     */
    private $hostservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="PortService", type="integer", nullable=false)
     */
    private $portservice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ServiceId", type="integer", nullable=false)
     */
    private $serviceid = '0';



    /**
     * Set servicetype
     *
     * @param integer $servicetype
     * @return Saextservices
     */
    public function setServicetype($servicetype)
    {
        $this->servicetype = $servicetype;

        return $this;
    }

    /**
     * Get servicetype
     *
     * @return integer 
     */
    public function getServicetype()
    {
        return $this->servicetype;
    }

    /**
     * Set nroserial
     *
     * @param string $nroserial
     * @return Saextservices
     */
    public function setNroserial($nroserial)
    {
        $this->nroserial = $nroserial;

        return $this;
    }

    /**
     * Get nroserial
     *
     * @return string 
     */
    public function getNroserial()
    {
        return $this->nroserial;
    }

    /**
     * Set keyserial
     *
     * @param string $keyserial
     * @return Saextservices
     */
    public function setKeyserial($keyserial)
    {
        $this->keyserial = $keyserial;

        return $this;
    }

    /**
     * Get keyserial
     *
     * @return string 
     */
    public function getKeyserial()
    {
        return $this->keyserial;
    }

    /**
     * Set smslogin
     *
     * @param string $smslogin
     * @return Saextservices
     */
    public function setSmslogin($smslogin)
    {
        $this->smslogin = $smslogin;

        return $this;
    }

    /**
     * Get smslogin
     *
     * @return string 
     */
    public function getSmslogin()
    {
        return $this->smslogin;
    }

    /**
     * Set smspassword
     *
     * @param string $smspassword
     * @return Saextservices
     */
    public function setSmspassword($smspassword)
    {
        $this->smspassword = $smspassword;

        return $this;
    }

    /**
     * Get smspassword
     *
     * @return string 
     */
    public function getSmspassword()
    {
        return $this->smspassword;
    }

    /**
     * Set hostservice
     *
     * @param string $hostservice
     * @return Saextservices
     */
    public function setHostservice($hostservice)
    {
        $this->hostservice = $hostservice;

        return $this;
    }

    /**
     * Get hostservice
     *
     * @return string 
     */
    public function getHostservice()
    {
        return $this->hostservice;
    }

    /**
     * Set portservice
     *
     * @param integer $portservice
     * @return Saextservices
     */
    public function setPortservice($portservice)
    {
        $this->portservice = $portservice;

        return $this;
    }

    /**
     * Get portservice
     *
     * @return integer 
     */
    public function getPortservice()
    {
        return $this->portservice;
    }

    /**
     * Set serviceid
     *
     * @param integer $serviceid
     * @return Saextservices
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return integer 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}
