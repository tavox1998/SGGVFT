<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saprov
 *
 * @ORM\Table(name="SAPROV", indexes={@ORM\Index(name="SAPROV_IX1", columns={"Descrip"}), @ORM\Index(name="SAPROV_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Saprov
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=60, nullable=true)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoPrv", type="smallint", nullable=false)
     */
    private $tipoprv = '0';

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
     * @ORM\Column(name="Represent", type="string", length=40, nullable=true)
     */
    private $represent;

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
     * @ORM\Column(name="Fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RetenISLR", type="integer", nullable=false)
     */
    private $retenislr = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasCred", type="integer", nullable=false)
     */
    private $diascred = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Observa", type="string", length=40, nullable=true)
     */
    private $observa;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsMoneda", type="smallint", nullable=false)
     */
    private $esmoneda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoMax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montomax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PagosA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pagosa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PromPago", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $prompago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUC", type="datetime", nullable=true)
     */
    private $fechauc;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoUC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montouc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroUC", type="string", length=20, nullable=true)
     */
    private $numerouc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUP", type="datetime", nullable=true)
     */
    private $fechaup;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoUP", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montoup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroUP", type="string", length=20, nullable=true)
     */
    private $numeroup;

    /**
     * @var string
     *
     * @ORM\Column(name="EdoKC", type="string", length=3, nullable=true)
     */
    private $edokc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID", type="smallint", nullable=false)
     */
    private $tipoid = '0';



    /**
     * Get codprov
     *
     * @return string 
     */
    public function getCodprov()
    {
        return $this->codprov;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saprov
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
     * Set tipoprv
     *
     * @param integer $tipoprv
     * @return Saprov
     */
    public function setTipoprv($tipoprv)
    {
        $this->tipoprv = $tipoprv;

        return $this;
    }

    /**
     * Get tipoprv
     *
     * @return integer 
     */
    public function getTipoprv()
    {
        return $this->tipoprv;
    }

    /**
     * Set tipoid3
     *
     * @param integer $tipoid3
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * Set represent
     *
     * @param string $represent
     * @return Saprov
     */
    public function setRepresent($represent)
    {
        $this->represent = $represent;

        return $this;
    }

    /**
     * Get represent
     *
     * @return string 
     */
    public function getRepresent()
    {
        return $this->represent;
    }

    /**
     * Set direc1
     *
     * @param string $direc1
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * @return Saprov
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saprov
     */
    public function setFechae($fechae)
    {
        $this->fechae = $fechae;

        return $this;
    }

    /**
     * Get fechae
     *
     * @return \DateTime 
     */
    public function getFechae()
    {
        return $this->fechae;
    }

    /**
     * Set esreten
     *
     * @param integer $esreten
     * @return Saprov
     */
    public function setEsreten($esreten)
    {
        $this->esreten = $esreten;

        return $this;
    }

    /**
     * Get esreten
     *
     * @return integer 
     */
    public function getEsreten()
    {
        return $this->esreten;
    }

    /**
     * Set retenislr
     *
     * @param integer $retenislr
     * @return Saprov
     */
    public function setRetenislr($retenislr)
    {
        $this->retenislr = $retenislr;

        return $this;
    }

    /**
     * Get retenislr
     *
     * @return integer 
     */
    public function getRetenislr()
    {
        return $this->retenislr;
    }

    /**
     * Set diascred
     *
     * @param integer $diascred
     * @return Saprov
     */
    public function setDiascred($diascred)
    {
        $this->diascred = $diascred;

        return $this;
    }

    /**
     * Get diascred
     *
     * @return integer 
     */
    public function getDiascred()
    {
        return $this->diascred;
    }

    /**
     * Set observa
     *
     * @param string $observa
     * @return Saprov
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string 
     */
    public function getObserva()
    {
        return $this->observa;
    }

    /**
     * Set esmoneda
     *
     * @param integer $esmoneda
     * @return Saprov
     */
    public function setEsmoneda($esmoneda)
    {
        $this->esmoneda = $esmoneda;

        return $this;
    }

    /**
     * Get esmoneda
     *
     * @return integer 
     */
    public function getEsmoneda()
    {
        return $this->esmoneda;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     * @return Saprov
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set montomax
     *
     * @param string $montomax
     * @return Saprov
     */
    public function setMontomax($montomax)
    {
        $this->montomax = $montomax;

        return $this;
    }

    /**
     * Get montomax
     *
     * @return string 
     */
    public function getMontomax()
    {
        return $this->montomax;
    }

    /**
     * Set pagosa
     *
     * @param string $pagosa
     * @return Saprov
     */
    public function setPagosa($pagosa)
    {
        $this->pagosa = $pagosa;

        return $this;
    }

    /**
     * Get pagosa
     *
     * @return string 
     */
    public function getPagosa()
    {
        return $this->pagosa;
    }

    /**
     * Set prompago
     *
     * @param string $prompago
     * @return Saprov
     */
    public function setPrompago($prompago)
    {
        $this->prompago = $prompago;

        return $this;
    }

    /**
     * Get prompago
     *
     * @return string 
     */
    public function getPrompago()
    {
        return $this->prompago;
    }

    /**
     * Set reteniva
     *
     * @param string $reteniva
     * @return Saprov
     */
    public function setReteniva($reteniva)
    {
        $this->reteniva = $reteniva;

        return $this;
    }

    /**
     * Get reteniva
     *
     * @return string 
     */
    public function getReteniva()
    {
        return $this->reteniva;
    }

    /**
     * Set fechauc
     *
     * @param \DateTime $fechauc
     * @return Saprov
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
     * Set montouc
     *
     * @param string $montouc
     * @return Saprov
     */
    public function setMontouc($montouc)
    {
        $this->montouc = $montouc;

        return $this;
    }

    /**
     * Get montouc
     *
     * @return string 
     */
    public function getMontouc()
    {
        return $this->montouc;
    }

    /**
     * Set numerouc
     *
     * @param string $numerouc
     * @return Saprov
     */
    public function setNumerouc($numerouc)
    {
        $this->numerouc = $numerouc;

        return $this;
    }

    /**
     * Get numerouc
     *
     * @return string 
     */
    public function getNumerouc()
    {
        return $this->numerouc;
    }

    /**
     * Set fechaup
     *
     * @param \DateTime $fechaup
     * @return Saprov
     */
    public function setFechaup($fechaup)
    {
        $this->fechaup = $fechaup;

        return $this;
    }

    /**
     * Get fechaup
     *
     * @return \DateTime 
     */
    public function getFechaup()
    {
        return $this->fechaup;
    }

    /**
     * Set montoup
     *
     * @param string $montoup
     * @return Saprov
     */
    public function setMontoup($montoup)
    {
        $this->montoup = $montoup;

        return $this;
    }

    /**
     * Get montoup
     *
     * @return string 
     */
    public function getMontoup()
    {
        return $this->montoup;
    }

    /**
     * Set numeroup
     *
     * @param string $numeroup
     * @return Saprov
     */
    public function setNumeroup($numeroup)
    {
        $this->numeroup = $numeroup;

        return $this;
    }

    /**
     * Get numeroup
     *
     * @return string 
     */
    public function getNumeroup()
    {
        return $this->numeroup;
    }

    /**
     * Set edokc
     *
     * @param string $edokc
     * @return Saprov
     */
    public function setEdokc($edokc)
    {
        $this->edokc = $edokc;

        return $this;
    }

    /**
     * Get edokc
     *
     * @return string 
     */
    public function getEdokc()
    {
        return $this->edokc;
    }

    /**
     * Set tipoid
     *
     * @param integer $tipoid
     * @return Saprov
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
