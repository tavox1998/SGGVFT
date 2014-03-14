<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbbene
 *
 * @ORM\Table(name="SBBENE", indexes={@ORM\Index(name="SBBENE_IX1", columns={"Descripcion"})})
 * @ORM\Entity
 */
class Sbbene
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodBene", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codbene;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="IOE", type="string", length=1, nullable=true)
     */
    private $ioe;

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
     * @var integer
     *
     * @ORM\Column(name="ECG", type="integer", nullable=false)
     */
    private $ecg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion1", type="string", length=40, nullable=true)
     */
    private $direccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion2", type="string", length=40, nullable=true)
     */
    private $direccion2;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefonos", type="string", length=30, nullable=true)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="Movil", type="string", length=15, nullable=true)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=25, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=25, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Memo", type="text", length=16, nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCta", type="string", length=30, nullable=true)
     */
    private $codcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Concepto1", type="string", length=60, nullable=true)
     */
    private $concepto1;

    /**
     * @var string
     *
     * @ORM\Column(name="Concepto2", type="string", length=60, nullable=true)
     */
    private $concepto2;

    /**
     * @var string
     *
     * @ORM\Column(name="Concepto3", type="string", length=60, nullable=true)
     */
    private $concepto3;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Coment1", type="string", length=40, nullable=true)
     */
    private $coment1;

    /**
     * @var string
     *
     * @ORM\Column(name="Coment2", type="string", length=40, nullable=true)
     */
    private $coment2;

    /**
     * @var string
     *
     * @ORM\Column(name="Coment3", type="string", length=40, nullable=true)
     */
    private $coment3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaI", type="datetime", nullable=true)
     */
    private $fechai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UFecha", type="datetime", nullable=true)
     */
    private $ufecha;

    /**
     * @var string
     *
     * @ORM\Column(name="UDcto", type="string", length=25, nullable=true)
     */
    private $udcto;

    /**
     * @var string
     *
     * @ORM\Column(name="UBanco", type="string", length=30, nullable=true)
     */
    private $ubanco;

    /**
     * @var string
     *
     * @ORM\Column(name="UBenef", type="string", length=50, nullable=true)
     */
    private $ubenef;

    /**
     * @var string
     *
     * @ORM\Column(name="UComent1", type="string", length=50, nullable=true)
     */
    private $ucoment1;

    /**
     * @var string
     *
     * @ORM\Column(name="UComent2", type="string", length=50, nullable=true)
     */
    private $ucoment2;

    /**
     * @var string
     *
     * @ORM\Column(name="UMonto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $umonto = '0';



    /**
     * Get codbene
     *
     * @return string 
     */
    public function getCodbene()
    {
        return $this->codbene;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbbene
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ioe
     *
     * @param string $ioe
     * @return Sbbene
     */
    public function setIoe($ioe)
    {
        $this->ioe = $ioe;

        return $this;
    }

    /**
     * Get ioe
     *
     * @return string 
     */
    public function getIoe()
    {
        return $this->ioe;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     * @return Sbbene
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
     * @return Sbbene
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
     * @return Sbbene
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
     * @return Sbbene
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
     * @return Sbbene
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
     * Set ecg
     *
     * @param integer $ecg
     * @return Sbbene
     */
    public function setEcg($ecg)
    {
        $this->ecg = $ecg;

        return $this;
    }

    /**
     * Get ecg
     *
     * @return integer 
     */
    public function getEcg()
    {
        return $this->ecg;
    }

    /**
     * Set direccion1
     *
     * @param string $direccion1
     * @return Sbbene
     */
    public function setDireccion1($direccion1)
    {
        $this->direccion1 = $direccion1;

        return $this;
    }

    /**
     * Get direccion1
     *
     * @return string 
     */
    public function getDireccion1()
    {
        return $this->direccion1;
    }

    /**
     * Set direccion2
     *
     * @param string $direccion2
     * @return Sbbene
     */
    public function setDireccion2($direccion2)
    {
        $this->direccion2 = $direccion2;

        return $this;
    }

    /**
     * Get direccion2
     *
     * @return string 
     */
    public function getDireccion2()
    {
        return $this->direccion2;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     * @return Sbbene
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return Sbbene
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
     * Set fax
     *
     * @param string $fax
     * @return Sbbene
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Sbbene
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
     * Set memo
     *
     * @param string $memo
     * @return Sbbene
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set codcta
     *
     * @param string $codcta
     * @return Sbbene
     */
    public function setCodcta($codcta)
    {
        $this->codcta = $codcta;

        return $this;
    }

    /**
     * Get codcta
     *
     * @return string 
     */
    public function getCodcta()
    {
        return $this->codcta;
    }

    /**
     * Set concepto1
     *
     * @param string $concepto1
     * @return Sbbene
     */
    public function setConcepto1($concepto1)
    {
        $this->concepto1 = $concepto1;

        return $this;
    }

    /**
     * Get concepto1
     *
     * @return string 
     */
    public function getConcepto1()
    {
        return $this->concepto1;
    }

    /**
     * Set concepto2
     *
     * @param string $concepto2
     * @return Sbbene
     */
    public function setConcepto2($concepto2)
    {
        $this->concepto2 = $concepto2;

        return $this;
    }

    /**
     * Get concepto2
     *
     * @return string 
     */
    public function getConcepto2()
    {
        return $this->concepto2;
    }

    /**
     * Set concepto3
     *
     * @param string $concepto3
     * @return Sbbene
     */
    public function setConcepto3($concepto3)
    {
        $this->concepto3 = $concepto3;

        return $this;
    }

    /**
     * Get concepto3
     *
     * @return string 
     */
    public function getConcepto3()
    {
        return $this->concepto3;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbbene
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
     * Set coment1
     *
     * @param string $coment1
     * @return Sbbene
     */
    public function setComent1($coment1)
    {
        $this->coment1 = $coment1;

        return $this;
    }

    /**
     * Get coment1
     *
     * @return string 
     */
    public function getComent1()
    {
        return $this->coment1;
    }

    /**
     * Set coment2
     *
     * @param string $coment2
     * @return Sbbene
     */
    public function setComent2($coment2)
    {
        $this->coment2 = $coment2;

        return $this;
    }

    /**
     * Get coment2
     *
     * @return string 
     */
    public function getComent2()
    {
        return $this->coment2;
    }

    /**
     * Set coment3
     *
     * @param string $coment3
     * @return Sbbene
     */
    public function setComent3($coment3)
    {
        $this->coment3 = $coment3;

        return $this;
    }

    /**
     * Get coment3
     *
     * @return string 
     */
    public function getComent3()
    {
        return $this->coment3;
    }

    /**
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Sbbene
     */
    public function setFechai($fechai)
    {
        $this->fechai = $fechai;

        return $this;
    }

    /**
     * Get fechai
     *
     * @return \DateTime 
     */
    public function getFechai()
    {
        return $this->fechai;
    }

    /**
     * Set ufecha
     *
     * @param \DateTime $ufecha
     * @return Sbbene
     */
    public function setUfecha($ufecha)
    {
        $this->ufecha = $ufecha;

        return $this;
    }

    /**
     * Get ufecha
     *
     * @return \DateTime 
     */
    public function getUfecha()
    {
        return $this->ufecha;
    }

    /**
     * Set udcto
     *
     * @param string $udcto
     * @return Sbbene
     */
    public function setUdcto($udcto)
    {
        $this->udcto = $udcto;

        return $this;
    }

    /**
     * Get udcto
     *
     * @return string 
     */
    public function getUdcto()
    {
        return $this->udcto;
    }

    /**
     * Set ubanco
     *
     * @param string $ubanco
     * @return Sbbene
     */
    public function setUbanco($ubanco)
    {
        $this->ubanco = $ubanco;

        return $this;
    }

    /**
     * Get ubanco
     *
     * @return string 
     */
    public function getUbanco()
    {
        return $this->ubanco;
    }

    /**
     * Set ubenef
     *
     * @param string $ubenef
     * @return Sbbene
     */
    public function setUbenef($ubenef)
    {
        $this->ubenef = $ubenef;

        return $this;
    }

    /**
     * Get ubenef
     *
     * @return string 
     */
    public function getUbenef()
    {
        return $this->ubenef;
    }

    /**
     * Set ucoment1
     *
     * @param string $ucoment1
     * @return Sbbene
     */
    public function setUcoment1($ucoment1)
    {
        $this->ucoment1 = $ucoment1;

        return $this;
    }

    /**
     * Get ucoment1
     *
     * @return string 
     */
    public function getUcoment1()
    {
        return $this->ucoment1;
    }

    /**
     * Set ucoment2
     *
     * @param string $ucoment2
     * @return Sbbene
     */
    public function setUcoment2($ucoment2)
    {
        $this->ucoment2 = $ucoment2;

        return $this;
    }

    /**
     * Get ucoment2
     *
     * @return string 
     */
    public function getUcoment2()
    {
        return $this->ucoment2;
    }

    /**
     * Set umonto
     *
     * @param string $umonto
     * @return Sbbene
     */
    public function setUmonto($umonto)
    {
        $this->umonto = $umonto;

        return $this;
    }

    /**
     * Get umonto
     *
     * @return string 
     */
    public function getUmonto()
    {
        return $this->umonto;
    }
}
