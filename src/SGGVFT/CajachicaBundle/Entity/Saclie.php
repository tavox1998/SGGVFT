<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saclie
 *
 * @ORM\Table(name="SACLIE", indexes={@ORM\Index(name="SACLIE_IX1", columns={"Descrip"}), @ORM\Index(name="SACLIE_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Saclie
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codclie;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=60, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="ID3", type="string", length=25, nullable=true)
     */
    private $id3;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID3", type="integer", nullable=false)
     */
    private $tipoid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

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
     * @ORM\Column(name="Email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var string
     *
     * @ORM\Column(name="CodZona", type="string", length=10, nullable=true)
     */
    private $codzona;

    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=true)
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="CodConv", type="string", length=10, nullable=true)
     */
    private $codconv;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAlte", type="string", length=15, nullable=true)
     */
    private $codalte;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoCli", type="smallint", nullable=false)
     */
    private $tipocli = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoPVP", type="smallint", nullable=false)
     */
    private $tipopvp = '0';

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
     * @var integer
     *
     * @ORM\Column(name="EsCredito", type="smallint", nullable=false)
     */
    private $escredito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LimiteCred", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $limitecred = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasCred", type="integer", nullable=false)
     */
    private $diascred = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsToleran", type="smallint", nullable=false)
     */
    private $estoleran = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasTole", type="integer", nullable=false)
     */
    private $diastole = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IntMora", type="smallint", nullable=false)
     */
    private $intmora = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PagosA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pagosa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUV", type="datetime", nullable=true)
     */
    private $fechauv;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoUV", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montouv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroUV", type="string", length=10, nullable=true)
     */
    private $numerouv;

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
     * @ORM\Column(name="NumeroUP", type="string", length=10, nullable=true)
     */
    private $numeroup;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoMax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montomax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoMaxCred", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtomaxcred = '0';

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
     * @var string
     *
     * @ORM\Column(name="SaldoPtos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoptos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="EdoKC", type="string", length=3, nullable=true)
     */
    private $edokc;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripExt", type="string", length=250, nullable=true)
     */
    private $descripext;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoID", type="smallint", nullable=false)
     */
    private $tipoid = '0';



    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saclie
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
     * Set id3
     *
     * @param string $id3
     * @return Saclie
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
     * Set tipoid3
     *
     * @param integer $tipoid3
     * @return Saclie
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
     * Set activo
     *
     * @param integer $activo
     * @return Saclie
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
     * Set descorder
     *
     * @param string $descorder
     * @return Saclie
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
     * @return Saclie
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
     * Set represent
     *
     * @param string $represent
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * Set fax
     *
     * @param string $fax
     * @return Saclie
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saclie
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
     * Set codzona
     *
     * @param string $codzona
     * @return Saclie
     */
    public function setCodzona($codzona)
    {
        $this->codzona = $codzona;

        return $this;
    }

    /**
     * Get codzona
     *
     * @return string 
     */
    public function getCodzona()
    {
        return $this->codzona;
    }

    /**
     * Set codvend
     *
     * @param string $codvend
     * @return Saclie
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
     * Set codconv
     *
     * @param string $codconv
     * @return Saclie
     */
    public function setCodconv($codconv)
    {
        $this->codconv = $codconv;

        return $this;
    }

    /**
     * Get codconv
     *
     * @return string 
     */
    public function getCodconv()
    {
        return $this->codconv;
    }

    /**
     * Set codalte
     *
     * @param string $codalte
     * @return Saclie
     */
    public function setCodalte($codalte)
    {
        $this->codalte = $codalte;

        return $this;
    }

    /**
     * Get codalte
     *
     * @return string 
     */
    public function getCodalte()
    {
        return $this->codalte;
    }

    /**
     * Set tipocli
     *
     * @param integer $tipocli
     * @return Saclie
     */
    public function setTipocli($tipocli)
    {
        $this->tipocli = $tipocli;

        return $this;
    }

    /**
     * Get tipocli
     *
     * @return integer 
     */
    public function getTipocli()
    {
        return $this->tipocli;
    }

    /**
     * Set tipopvp
     *
     * @param integer $tipopvp
     * @return Saclie
     */
    public function setTipopvp($tipopvp)
    {
        $this->tipopvp = $tipopvp;

        return $this;
    }

    /**
     * Get tipopvp
     *
     * @return integer 
     */
    public function getTipopvp()
    {
        return $this->tipopvp;
    }

    /**
     * Set observa
     *
     * @param string $observa
     * @return Saclie
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
     * @return Saclie
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
     * Set escredito
     *
     * @param integer $escredito
     * @return Saclie
     */
    public function setEscredito($escredito)
    {
        $this->escredito = $escredito;

        return $this;
    }

    /**
     * Get escredito
     *
     * @return integer 
     */
    public function getEscredito()
    {
        return $this->escredito;
    }

    /**
     * Set limitecred
     *
     * @param string $limitecred
     * @return Saclie
     */
    public function setLimitecred($limitecred)
    {
        $this->limitecred = $limitecred;

        return $this;
    }

    /**
     * Get limitecred
     *
     * @return string 
     */
    public function getLimitecred()
    {
        return $this->limitecred;
    }

    /**
     * Set diascred
     *
     * @param integer $diascred
     * @return Saclie
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
     * Set estoleran
     *
     * @param integer $estoleran
     * @return Saclie
     */
    public function setEstoleran($estoleran)
    {
        $this->estoleran = $estoleran;

        return $this;
    }

    /**
     * Get estoleran
     *
     * @return integer 
     */
    public function getEstoleran()
    {
        return $this->estoleran;
    }

    /**
     * Set diastole
     *
     * @param integer $diastole
     * @return Saclie
     */
    public function setDiastole($diastole)
    {
        $this->diastole = $diastole;

        return $this;
    }

    /**
     * Get diastole
     *
     * @return integer 
     */
    public function getDiastole()
    {
        return $this->diastole;
    }

    /**
     * Set intmora
     *
     * @param integer $intmora
     * @return Saclie
     */
    public function setIntmora($intmora)
    {
        $this->intmora = $intmora;

        return $this;
    }

    /**
     * Get intmora
     *
     * @return integer 
     */
    public function getIntmora()
    {
        return $this->intmora;
    }

    /**
     * Set descto
     *
     * @param string $descto
     * @return Saclie
     */
    public function setDescto($descto)
    {
        $this->descto = $descto;

        return $this;
    }

    /**
     * Get descto
     *
     * @return string 
     */
    public function getDescto()
    {
        return $this->descto;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     * @return Saclie
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
     * Set pagosa
     *
     * @param string $pagosa
     * @return Saclie
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
     * Set fechauv
     *
     * @param \DateTime $fechauv
     * @return Saclie
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
     * Set montouv
     *
     * @param string $montouv
     * @return Saclie
     */
    public function setMontouv($montouv)
    {
        $this->montouv = $montouv;

        return $this;
    }

    /**
     * Get montouv
     *
     * @return string 
     */
    public function getMontouv()
    {
        return $this->montouv;
    }

    /**
     * Set numerouv
     *
     * @param string $numerouv
     * @return Saclie
     */
    public function setNumerouv($numerouv)
    {
        $this->numerouv = $numerouv;

        return $this;
    }

    /**
     * Get numerouv
     *
     * @return string 
     */
    public function getNumerouv()
    {
        return $this->numerouv;
    }

    /**
     * Set fechaup
     *
     * @param \DateTime $fechaup
     * @return Saclie
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
     * @return Saclie
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
     * @return Saclie
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
     * Set montomax
     *
     * @param string $montomax
     * @return Saclie
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
     * Set mtomaxcred
     *
     * @param string $mtomaxcred
     * @return Saclie
     */
    public function setMtomaxcred($mtomaxcred)
    {
        $this->mtomaxcred = $mtomaxcred;

        return $this;
    }

    /**
     * Get mtomaxcred
     *
     * @return string 
     */
    public function getMtomaxcred()
    {
        return $this->mtomaxcred;
    }

    /**
     * Set prompago
     *
     * @param string $prompago
     * @return Saclie
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
     * @return Saclie
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
     * Set saldoptos
     *
     * @param string $saldoptos
     * @return Saclie
     */
    public function setSaldoptos($saldoptos)
    {
        $this->saldoptos = $saldoptos;

        return $this;
    }

    /**
     * Get saldoptos
     *
     * @return string 
     */
    public function getSaldoptos()
    {
        return $this->saldoptos;
    }

    /**
     * Set edokc
     *
     * @param string $edokc
     * @return Saclie
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
     * Set descripext
     *
     * @param string $descripext
     * @return Saclie
     */
    public function setDescripext($descripext)
    {
        $this->descripext = $descripext;

        return $this;
    }

    /**
     * Get descripext
     *
     * @return string 
     */
    public function getDescripext()
    {
        return $this->descripext;
    }

    /**
     * Set tipoid
     *
     * @param integer $tipoid
     * @return Saclie
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
