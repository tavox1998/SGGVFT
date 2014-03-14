<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Savend
 *
 * @ORM\Table(name="SAVEND", indexes={@ORM\Index(name="SAVEND_IX1", columns={"Descrip"}), @ORM\Index(name="SAVEND_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Savend
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=60, nullable=true)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID3", type="integer", nullable=false)
     */
    private $tipoid3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID3", type="string", length=25, nullable=true)
     */
    private $id3;

    /**
     * @var string
     *
     * @ORM\Column(name="DescOrder", type="string", length=10, nullable=true)
     */
    private $descorder;

    /**
     * @var string
     *
     * @ORM\Column(name="Clase", type="string", length=10, nullable=true)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="Direc1", type="string", length=60, nullable=true)
     */
    private $direc1;

    /**
     * @var string
     *
     * @ORM\Column(name="Direc2", type="string", length=60, nullable=true)
     */
    private $direc2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pais", type="integer", nullable=false)
     */
    private $pais = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ciudad", type="integer", nullable=false)
     */
    private $ciudad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Municipio", type="integer", nullable=false)
     */
    private $municipio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=20, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Telef", type="string", length=30, nullable=true)
     */
    private $telef;

    /**
     * @var string
     *
     * @ORM\Column(name="Movil", type="string", length=15, nullable=true)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUV", type="datetime", nullable=true)
     */
    private $fechauv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUC", type="datetime", nullable=true)
     */
    private $fechauc;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiPV", type="smallint", nullable=false)
     */
    private $escomipv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiTV", type="smallint", nullable=false)
     */
    private $escomitv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiTC", type="smallint", nullable=false)
     */
    private $escomitc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiTU", type="smallint", nullable=false)
     */
    private $escomitu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiDT", type="smallint", nullable=false)
     */
    private $escomidt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiUT", type="smallint", nullable=false)
     */
    private $escomiut = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsComiTM", type="smallint", nullable=false)
     */
    private $escomitm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID", type="smallint", nullable=false)
     */
    private $tipoid = '0';



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
     * Set descrip
     *
     * @param string $descrip
     * @return Savend
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
     * Set tipoid3
     *
     * @param integer $tipoid3
     * @return Savend
     */
    public function setTipoid3($tipoid3)
    {
        $this->tipoid3 = $tipoid3;

        return $this;
    }

    /**
     * Get tipoid3
     *
     * @return integer 
     */
    public function getTipoid3()
    {
        return $this->tipoid3;
    }

    /**
     * Set id3
     *
     * @param string $id3
     * @return Savend
     */
    public function setId3($id3)
    {
        $this->id3 = $id3;

        return $this;
    }

    /**
     * Get id3
     *
     * @return string 
     */
    public function getId3()
    {
        return $this->id3;
    }

    /**
     * Set descorder
     *
     * @param string $descorder
     * @return Savend
     */
    public function setDescorder($descorder)
    {
        $this->descorder = $descorder;

        return $this;
    }

    /**
     * Get descorder
     *
     * @return string 
     */
    public function getDescorder()
    {
        return $this->descorder;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return Savend
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set direc1
     *
     * @param string $direc1
     * @return Savend
     */
    public function setDirec1($direc1)
    {
        $this->direc1 = $direc1;

        return $this;
    }

    /**
     * Get direc1
     *
     * @return string 
     */
    public function getDirec1()
    {
        return $this->direc1;
    }

    /**
     * Set direc2
     *
     * @param string $direc2
     * @return Savend
     */
    public function setDirec2($direc2)
    {
        $this->direc2 = $direc2;

        return $this;
    }

    /**
     * Get direc2
     *
     * @return string 
     */
    public function getDirec2()
    {
        return $this->direc2;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     * @return Savend
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return integer 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Savend
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ciudad
     *
     * @param integer $ciudad
     * @return Savend
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return integer 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set municipio
     *
     * @param integer $municipio
     * @return Savend
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return integer 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Savend
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set telef
     *
     * @param string $telef
     * @return Savend
     */
    public function setTelef($telef)
    {
        $this->telef = $telef;

        return $this;
    }

    /**
     * Get telef
     *
     * @return string 
     */
    public function getTelef()
    {
        return $this->telef;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return Savend
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
     * Set email
     *
     * @param string $email
     * @return Savend
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
     * Set fechauv
     *
     * @param \DateTime $fechauv
     * @return Savend
     */
    public function setFechauv($fechauv)
    {
        $this->fechauv = $fechauv;

        return $this;
    }

    /**
     * Get fechauv
     *
     * @return \DateTime 
     */
    public function getFechauv()
    {
        return $this->fechauv;
    }

    /**
     * Set fechauc
     *
     * @param \DateTime $fechauc
     * @return Savend
     */
    public function setFechauc($fechauc)
    {
        $this->fechauc = $fechauc;

        return $this;
    }

    /**
     * Get fechauc
     *
     * @return \DateTime 
     */
    public function getFechauc()
    {
        return $this->fechauc;
    }

    /**
     * Set escomipv
     *
     * @param integer $escomipv
     * @return Savend
     */
    public function setEscomipv($escomipv)
    {
        $this->escomipv = $escomipv;

        return $this;
    }

    /**
     * Get escomipv
     *
     * @return integer 
     */
    public function getEscomipv()
    {
        return $this->escomipv;
    }

    /**
     * Set escomitv
     *
     * @param integer $escomitv
     * @return Savend
     */
    public function setEscomitv($escomitv)
    {
        $this->escomitv = $escomitv;

        return $this;
    }

    /**
     * Get escomitv
     *
     * @return integer 
     */
    public function getEscomitv()
    {
        return $this->escomitv;
    }

    /**
     * Set escomitc
     *
     * @param integer $escomitc
     * @return Savend
     */
    public function setEscomitc($escomitc)
    {
        $this->escomitc = $escomitc;

        return $this;
    }

    /**
     * Get escomitc
     *
     * @return integer 
     */
    public function getEscomitc()
    {
        return $this->escomitc;
    }

    /**
     * Set escomitu
     *
     * @param integer $escomitu
     * @return Savend
     */
    public function setEscomitu($escomitu)
    {
        $this->escomitu = $escomitu;

        return $this;
    }

    /**
     * Get escomitu
     *
     * @return integer 
     */
    public function getEscomitu()
    {
        return $this->escomitu;
    }

    /**
     * Set escomidt
     *
     * @param integer $escomidt
     * @return Savend
     */
    public function setEscomidt($escomidt)
    {
        $this->escomidt = $escomidt;

        return $this;
    }

    /**
     * Get escomidt
     *
     * @return integer 
     */
    public function getEscomidt()
    {
        return $this->escomidt;
    }

    /**
     * Set escomiut
     *
     * @param integer $escomiut
     * @return Savend
     */
    public function setEscomiut($escomiut)
    {
        $this->escomiut = $escomiut;

        return $this;
    }

    /**
     * Get escomiut
     *
     * @return integer 
     */
    public function getEscomiut()
    {
        return $this->escomiut;
    }

    /**
     * Set escomitm
     *
     * @param integer $escomitm
     * @return Savend
     */
    public function setEscomitm($escomitm)
    {
        $this->escomitm = $escomitm;

        return $this;
    }

    /**
     * Get escomitm
     *
     * @return integer 
     */
    public function getEscomitm()
    {
        return $this->escomitm;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Savend
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set tipoid
     *
     * @param integer $tipoid
     * @return Savend
     */
    public function setTipoid($tipoid)
    {
        $this->tipoid = $tipoid;

        return $this;
    }

    /**
     * Get tipoid
     *
     * @return integer 
     */
    public function getTipoid()
    {
        return $this->tipoid;
    }
}
