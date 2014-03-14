<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sameca
 *
 * @ORM\Table(name="SAMECA", indexes={@ORM\Index(name="SAMECA_IX1", columns={"Descrip"}), @ORM\Index(name="SAMECA_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Sameca
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmeca;

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
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

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
     * @var integer
     *
     * @ORM\Column(name="DEsComi", type="smallint", nullable=false)
     */
    private $descomi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID", type="smallint", nullable=false)
     */
    private $tipoid = '0';



    /**
     * Get codmeca
     *
     * @return string 
     */
    public function getCodmeca()
    {
        return $this->codmeca;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * Set activo
     *
     * @param integer $activo
     * @return Sameca
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
     * Set direc1
     *
     * @param string $direc1
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * @return Sameca
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
     * Set descomi
     *
     * @param integer $descomi
     * @return Sameca
     */
    public function setDescomi($descomi)
    {
        $this->descomi = $descomi;

        return $this;
    }

    /**
     * Get descomi
     *
     * @return integer 
     */
    public function getDescomi()
    {
        return $this->descomi;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sameca
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

    /**
     * Set tipoid
     *
     * @param integer $tipoid
     * @return Sameca
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
