<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sasnusers
 *
 * @ORM\Table(name="SASNUSERS", indexes={@ORM\Index(name="SASNUSERS_IX1", columns={"UserId"})})
 * @ORM\Entity
 */
class Sasnusers
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codusua;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserId", type="integer", nullable=false)
     */
    private $userid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Clave", type="string", length=15, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoNot", type="string", length=5, nullable=false)
     */
    private $tiponot;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Movil", type="string", length=40, nullable=true)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="UProfile", type="string", length=100, nullable=true)
     */
    private $uprofile;



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
     * Set userid
     *
     * @param integer $userid
     * @return Sasnusers
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
     * Set descrip
     *
     * @param string $descrip
     * @return Sasnusers
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Sasnusers
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set tiponot
     *
     * @param string $tiponot
     * @return Sasnusers
     */
    public function setTiponot($tiponot)
    {
        $this->tiponot = $tiponot;

        return $this;
    }

    /**
     * Get tiponot
     *
     * @return string 
     */
    public function getTiponot()
    {
        return $this->tiponot;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Sasnusers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return Sasnusers
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set uprofile
     *
     * @param string $uprofile
     * @return Sasnusers
     */
    public function setUprofile($uprofile)
    {
        $this->uprofile = $uprofile;

        return $this;
    }

    /**
     * Get uprofile
     *
     * @return string 
     */
    public function getUprofile()
    {
        return $this->uprofile;
    }
}
