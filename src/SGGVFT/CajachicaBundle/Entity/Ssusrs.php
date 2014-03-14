<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ssusrs
 *
 * @ORM\Table(name="SSUSRS", indexes={@ORM\Index(name="SSUSRS_IX1", columns={"Descrip"})})
 * @ORM\Entity
 */
class Ssusrs
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
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=50, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Movil", type="string", length=15, nullable=true)
     */
    private $movil;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdUserNot", type="integer", nullable=false)
     */
    private $idusernot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Profile", type="string", length=50, nullable=true)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=15, nullable=true)
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrDta1", type="string", length=50, nullable=true)
     */
    private $usrdta1;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrDta2", type="string", length=50, nullable=true)
     */
    private $usrdta2;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrDta3", type="string", length=50, nullable=true)
     */
    private $usrdta3;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrDta4", type="string", length=50, nullable=true)
     */
    private $usrdta4;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrDta5", type="string", length=50, nullable=true)
     */
    private $usrdta5;

    /**
     * @var string
     *
     * @ORM\Column(name="SData1", type="string", length=250, nullable=false)
     */
    private $sdata1;

    /**
     * @var string
     *
     * @ORM\Column(name="SData2", type="string", length=250, nullable=false)
     */
    private $sdata2;

    /**
     * @var string
     *
     * @ORM\Column(name="SData3", type="string", length=250, nullable=false)
     */
    private $sdata3;

    /**
     * @var string
     *
     * @ORM\Column(name="SData6", type="string", length=250, nullable=true)
     */
    private $sdata6;



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
     * Set descrip
     *
     * @param string $descrip
     * @return Ssusrs
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
     * Set email
     *
     * @param string $email
     * @return Ssusrs
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
     * @return Ssusrs
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
     * Set idusernot
     *
     * @param integer $idusernot
     * @return Ssusrs
     */
    public function setIdusernot($idusernot)
    {
        $this->idusernot = $idusernot;

        return $this;
    }

    /**
     * Get idusernot
     *
     * @return integer 
     */
    public function getIdusernot()
    {
        return $this->idusernot;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return Ssusrs
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set codvend
     *
     * @param string $codvend
     * @return Ssusrs
     */
    public function setCodvend($codvend)
    {
        $this->codvend = $codvend;

        return $this;
    }

    /**
     * Get codvend
     *
     * @return string 
     */
    public function getCodvend()
    {
        return $this->codvend;
    }

    /**
     * Set usrdta1
     *
     * @param string $usrdta1
     * @return Ssusrs
     */
    public function setUsrdta1($usrdta1)
    {
        $this->usrdta1 = $usrdta1;

        return $this;
    }

    /**
     * Get usrdta1
     *
     * @return string 
     */
    public function getUsrdta1()
    {
        return $this->usrdta1;
    }

    /**
     * Set usrdta2
     *
     * @param string $usrdta2
     * @return Ssusrs
     */
    public function setUsrdta2($usrdta2)
    {
        $this->usrdta2 = $usrdta2;

        return $this;
    }

    /**
     * Get usrdta2
     *
     * @return string 
     */
    public function getUsrdta2()
    {
        return $this->usrdta2;
    }

    /**
     * Set usrdta3
     *
     * @param string $usrdta3
     * @return Ssusrs
     */
    public function setUsrdta3($usrdta3)
    {
        $this->usrdta3 = $usrdta3;

        return $this;
    }

    /**
     * Get usrdta3
     *
     * @return string 
     */
    public function getUsrdta3()
    {
        return $this->usrdta3;
    }

    /**
     * Set usrdta4
     *
     * @param string $usrdta4
     * @return Ssusrs
     */
    public function setUsrdta4($usrdta4)
    {
        $this->usrdta4 = $usrdta4;

        return $this;
    }

    /**
     * Get usrdta4
     *
     * @return string 
     */
    public function getUsrdta4()
    {
        return $this->usrdta4;
    }

    /**
     * Set usrdta5
     *
     * @param string $usrdta5
     * @return Ssusrs
     */
    public function setUsrdta5($usrdta5)
    {
        $this->usrdta5 = $usrdta5;

        return $this;
    }

    /**
     * Get usrdta5
     *
     * @return string 
     */
    public function getUsrdta5()
    {
        return $this->usrdta5;
    }

    /**
     * Set sdata1
     *
     * @param string $sdata1
     * @return Ssusrs
     */
    public function setSdata1($sdata1)
    {
        $this->sdata1 = $sdata1;

        return $this;
    }

    /**
     * Get sdata1
     *
     * @return string 
     */
    public function getSdata1()
    {
        return $this->sdata1;
    }

    /**
     * Set sdata2
     *
     * @param string $sdata2
     * @return Ssusrs
     */
    public function setSdata2($sdata2)
    {
        $this->sdata2 = $sdata2;

        return $this;
    }

    /**
     * Get sdata2
     *
     * @return string 
     */
    public function getSdata2()
    {
        return $this->sdata2;
    }

    /**
     * Set sdata3
     *
     * @param string $sdata3
     * @return Ssusrs
     */
    public function setSdata3($sdata3)
    {
        $this->sdata3 = $sdata3;

        return $this;
    }

    /**
     * Get sdata3
     *
     * @return string 
     */
    public function getSdata3()
    {
        return $this->sdata3;
    }

    /**
     * Set sdata6
     *
     * @param string $sdata6
     * @return Ssusrs
     */
    public function setSdata6($sdata6)
    {
        $this->sdata6 = $sdata6;

        return $this;
    }

    /**
     * Get sdata6
     *
     * @return string 
     */
    public function getSdata6()
    {
        return $this->sdata6;
    }
}
