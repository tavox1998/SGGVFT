<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sasnnotif
 *
 * @ORM\Table(name="SASNNOTIF")
 * @ORM\Entity
 */
class Sasnnotif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NotifyId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $notifyid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UserId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=false)
     */
    private $codusua;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoVerif", type="integer", nullable=false)
     */
    private $tipoverif = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';



    /**
     * Set notifyid
     *
     * @param integer $notifyid
     * @return Sasnnotif
     */
    public function setNotifyid($notifyid)
    {
        $this->notifyid = $notifyid;

        return $this;
    }

    /**
     * Get notifyid
     *
     * @return integer 
     */
    public function getNotifyid()
    {
        return $this->notifyid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Sasnnotif
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Sasnnotif
     */
    public function setCodusua($codusua)
    {
        $this->codusua = $codusua;

        return $this;
    }

    /**
     * Get codusua
     *
     * @return string 
     */
    public function getCodusua()
    {
        return $this->codusua;
    }

    /**
     * Set tipoverif
     *
     * @param integer $tipoverif
     * @return Sasnnotif
     */
    public function setTipoverif($tipoverif)
    {
        $this->tipoverif = $tipoverif;

        return $this;
    }

    /**
     * Get tipoverif
     *
     * @return integer 
     */
    public function getTipoverif()
    {
        return $this->tipoverif;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sasnnotif
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }
}
