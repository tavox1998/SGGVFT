<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saconf
 *
 * @ORM\Table(name="SACONF")
 * @ORM\Entity
 */
class Saconf
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=80, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Direc1", type="string", length=80, nullable=true)
     */
    private $direc1;

    /**
     * @var string
     *
     * @ORM\Column(name="Direc2", type="string", length=80, nullable=true)
     */
    private $direc2;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Telef", type="string", length=40, nullable=true)
     */
    private $telef;

    /**
     * @var string
     *
     * @ORM\Column(name="RIF", type="string", length=25, nullable=true)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=20, nullable=true)
     */
    private $zipcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="Municipio", type="integer", nullable=false)
     */
    private $municipio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ciudad", type="integer", nullable=false)
     */
    private $ciudad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Pais", type="integer", nullable=false)
     */
    private $pais = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SPais", type="string", length=30, nullable=true)
     */
    private $spais;

    /**
     * @var string
     *
     * @ORM\Column(name="SEstado", type="string", length=30, nullable=true)
     */
    private $sestado;

    /**
     * @var string
     *
     * @ORM\Column(name="SCiudad", type="string", length=30, nullable=true)
     */
    private $sciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="SMunicipio", type="string", length=30, nullable=true)
     */
    private $smunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTaxs", type="string", length=5, nullable=true)
     */
    private $codtaxs;

    /**
     * @var string
     *
     * @ORM\Column(name="CostoMes", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costomes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CorrelPrd", type="smallint", nullable=false)
     */
    private $correlprd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAppNot", type="integer", nullable=false)
     */
    private $idappnot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MesCurso", type="string", length=6, nullable=true)
     */
    private $mescurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="MesTran", type="integer", nullable=false)
     */
    private $mestran = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MesOC", type="integer", nullable=false)
     */
    private $mesoc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MesPrf", type="integer", nullable=false)
     */
    private $mesprf = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdVersion", type="integer", nullable=false)
     */
    private $idversion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdVerXtra", type="integer", nullable=false)
     */
    private $idverxtra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MesesPtos", type="integer", nullable=false)
     */
    private $mesesptos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ValorPtos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $valorptos = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUC", type="datetime", nullable=true)
     */
    private $fechauc;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoExtraG", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoextrag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpFleteV", type="smallint", nullable=false)
     */
    private $impfletev = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ImpFleteC", type="smallint", nullable=false)
     */
    private $impfletec = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RetenIVA", type="smallint", nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AutoReten", type="smallint", nullable=false)
     */
    private $autoreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PorctReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $porctreten = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PedirNCtrl", type="smallint", nullable=false)
     */
    private $pedirnctrl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Redond", type="smallint", nullable=false)
     */
    private $redond = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RedTotal", type="smallint", nullable=false)
     */
    private $redtotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ObliOper", type="smallint", nullable=false)
     */
    private $oblioper = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PaswLim", type="integer", nullable=false)
     */
    private $paswlim = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Adicional", type="text", length=400, nullable=true)
     */
    private $adicional;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $factor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FactorM", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $factorm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UsaFactorM", type="smallint", nullable=false)
     */
    private $usafactorm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SimbFac", type="string", length=3, nullable=true)
     */
    private $simbfac;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsMoneda", type="smallint", nullable=false)
     */
    private $esmoneda = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UsaNEL", type="smallint", nullable=false)
     */
    private $usanel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="InvConsig", type="smallint", nullable=false)
     */
    private $invconsig = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PrioridadIC", type="smallint", nullable=false)
     */
    private $prioridadic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CorrelUNC", type="smallint", nullable=false)
     */
    private $correlunc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=16, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="NroSerial", type="string", length=25, nullable=true)
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
     * @ORM\Column(name="NroEstable", type="string", length=10, nullable=true)
     */
    private $nroestable;

    /**
     * @var string
     *
     * @ORM\Column(name="EstablReten", type="string", length=10, nullable=true)
     */
    private $establreten;

    /**
     * @var string
     *
     * @ORM\Column(name="PtoEmiReten", type="string", length=10, nullable=true)
     */
    private $ptoemireten;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecCadReten", type="datetime", nullable=true)
     */
    private $feccadreten;

    /**
     * @var string
     *
     * @ORM\Column(name="AutSRIReten", type="string", length=10, nullable=true)
     */
    private $autsrireten;



    /**
     * Get codsucu
     *
     * @return string 
     */
    public function getCodsucu()
    {
        return $this->codsucu;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saconf
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
     * Set direc1
     *
     * @param string $direc1
     * @return Saconf
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
     * @return Saconf
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
     * Set email
     *
     * @param string $email
     * @return Saconf
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
     * Set telef
     *
     * @param string $telef
     * @return Saconf
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
     * Set rif
     *
     * @param string $rif
     * @return Saconf
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Saconf
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
     * Set municipio
     *
     * @param integer $municipio
     * @return Saconf
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
     * Set ciudad
     *
     * @param integer $ciudad
     * @return Saconf
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
     * Set estado
     *
     * @param integer $estado
     * @return Saconf
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
     * Set pais
     *
     * @param integer $pais
     * @return Saconf
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
     * Set spais
     *
     * @param string $spais
     * @return Saconf
     */
    public function setSpais($spais)
    {
        $this->spais = $spais;

        return $this;
    }

    /**
     * Get spais
     *
     * @return string 
     */
    public function getSpais()
    {
        return $this->spais;
    }

    /**
     * Set sestado
     *
     * @param string $sestado
     * @return Saconf
     */
    public function setSestado($sestado)
    {
        $this->sestado = $sestado;

        return $this;
    }

    /**
     * Get sestado
     *
     * @return string 
     */
    public function getSestado()
    {
        return $this->sestado;
    }

    /**
     * Set sciudad
     *
     * @param string $sciudad
     * @return Saconf
     */
    public function setSciudad($sciudad)
    {
        $this->sciudad = $sciudad;

        return $this;
    }

    /**
     * Get sciudad
     *
     * @return string 
     */
    public function getSciudad()
    {
        return $this->sciudad;
    }

    /**
     * Set smunicipio
     *
     * @param string $smunicipio
     * @return Saconf
     */
    public function setSmunicipio($smunicipio)
    {
        $this->smunicipio = $smunicipio;

        return $this;
    }

    /**
     * Get smunicipio
     *
     * @return string 
     */
    public function getSmunicipio()
    {
        return $this->smunicipio;
    }

    /**
     * Set codtaxs
     *
     * @param string $codtaxs
     * @return Saconf
     */
    public function setCodtaxs($codtaxs)
    {
        $this->codtaxs = $codtaxs;

        return $this;
    }

    /**
     * Get codtaxs
     *
     * @return string 
     */
    public function getCodtaxs()
    {
        return $this->codtaxs;
    }

    /**
     * Set costomes
     *
     * @param string $costomes
     * @return Saconf
     */
    public function setCostomes($costomes)
    {
        $this->costomes = $costomes;

        return $this;
    }

    /**
     * Get costomes
     *
     * @return string 
     */
    public function getCostomes()
    {
        return $this->costomes;
    }

    /**
     * Set correlprd
     *
     * @param integer $correlprd
     * @return Saconf
     */
    public function setCorrelprd($correlprd)
    {
        $this->correlprd = $correlprd;

        return $this;
    }

    /**
     * Get correlprd
     *
     * @return integer 
     */
    public function getCorrelprd()
    {
        return $this->correlprd;
    }

    /**
     * Set idappnot
     *
     * @param integer $idappnot
     * @return Saconf
     */
    public function setIdappnot($idappnot)
    {
        $this->idappnot = $idappnot;

        return $this;
    }

    /**
     * Get idappnot
     *
     * @return integer 
     */
    public function getIdappnot()
    {
        return $this->idappnot;
    }

    /**
     * Set mescurso
     *
     * @param string $mescurso
     * @return Saconf
     */
    public function setMescurso($mescurso)
    {
        $this->mescurso = $mescurso;

        return $this;
    }

    /**
     * Get mescurso
     *
     * @return string 
     */
    public function getMescurso()
    {
        return $this->mescurso;
    }

    /**
     * Set mestran
     *
     * @param integer $mestran
     * @return Saconf
     */
    public function setMestran($mestran)
    {
        $this->mestran = $mestran;

        return $this;
    }

    /**
     * Get mestran
     *
     * @return integer 
     */
    public function getMestran()
    {
        return $this->mestran;
    }

    /**
     * Set mesoc
     *
     * @param integer $mesoc
     * @return Saconf
     */
    public function setMesoc($mesoc)
    {
        $this->mesoc = $mesoc;

        return $this;
    }

    /**
     * Get mesoc
     *
     * @return integer 
     */
    public function getMesoc()
    {
        return $this->mesoc;
    }

    /**
     * Set mesprf
     *
     * @param integer $mesprf
     * @return Saconf
     */
    public function setMesprf($mesprf)
    {
        $this->mesprf = $mesprf;

        return $this;
    }

    /**
     * Get mesprf
     *
     * @return integer 
     */
    public function getMesprf()
    {
        return $this->mesprf;
    }

    /**
     * Set idversion
     *
     * @param integer $idversion
     * @return Saconf
     */
    public function setIdversion($idversion)
    {
        $this->idversion = $idversion;

        return $this;
    }

    /**
     * Get idversion
     *
     * @return integer 
     */
    public function getIdversion()
    {
        return $this->idversion;
    }

    /**
     * Set idverxtra
     *
     * @param integer $idverxtra
     * @return Saconf
     */
    public function setIdverxtra($idverxtra)
    {
        $this->idverxtra = $idverxtra;

        return $this;
    }

    /**
     * Get idverxtra
     *
     * @return integer 
     */
    public function getIdverxtra()
    {
        return $this->idverxtra;
    }

    /**
     * Set mesesptos
     *
     * @param integer $mesesptos
     * @return Saconf
     */
    public function setMesesptos($mesesptos)
    {
        $this->mesesptos = $mesesptos;

        return $this;
    }

    /**
     * Get mesesptos
     *
     * @return integer 
     */
    public function getMesesptos()
    {
        return $this->mesesptos;
    }

    /**
     * Set valorptos
     *
     * @param string $valorptos
     * @return Saconf
     */
    public function setValorptos($valorptos)
    {
        $this->valorptos = $valorptos;

        return $this;
    }

    /**
     * Get valorptos
     *
     * @return string 
     */
    public function getValorptos()
    {
        return $this->valorptos;
    }

    /**
     * Set fechauc
     *
     * @param \DateTime $fechauc
     * @return Saconf
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
     * Set mtoextrag
     *
     * @param string $mtoextrag
     * @return Saconf
     */
    public function setMtoextrag($mtoextrag)
    {
        $this->mtoextrag = $mtoextrag;

        return $this;
    }

    /**
     * Get mtoextrag
     *
     * @return string 
     */
    public function getMtoextrag()
    {
        return $this->mtoextrag;
    }

    /**
     * Set impfletev
     *
     * @param integer $impfletev
     * @return Saconf
     */
    public function setImpfletev($impfletev)
    {
        $this->impfletev = $impfletev;

        return $this;
    }

    /**
     * Get impfletev
     *
     * @return integer 
     */
    public function getImpfletev()
    {
        return $this->impfletev;
    }

    /**
     * Set impfletec
     *
     * @param integer $impfletec
     * @return Saconf
     */
    public function setImpfletec($impfletec)
    {
        $this->impfletec = $impfletec;

        return $this;
    }

    /**
     * Get impfletec
     *
     * @return integer 
     */
    public function getImpfletec()
    {
        return $this->impfletec;
    }

    /**
     * Set reteniva
     *
     * @param integer $reteniva
     * @return Saconf
     */
    public function setReteniva($reteniva)
    {
        $this->reteniva = $reteniva;

        return $this;
    }

    /**
     * Get reteniva
     *
     * @return integer 
     */
    public function getReteniva()
    {
        return $this->reteniva;
    }

    /**
     * Set autoreten
     *
     * @param integer $autoreten
     * @return Saconf
     */
    public function setAutoreten($autoreten)
    {
        $this->autoreten = $autoreten;

        return $this;
    }

    /**
     * Get autoreten
     *
     * @return integer 
     */
    public function getAutoreten()
    {
        return $this->autoreten;
    }

    /**
     * Set porctreten
     *
     * @param string $porctreten
     * @return Saconf
     */
    public function setPorctreten($porctreten)
    {
        $this->porctreten = $porctreten;

        return $this;
    }

    /**
     * Get porctreten
     *
     * @return string 
     */
    public function getPorctreten()
    {
        return $this->porctreten;
    }

    /**
     * Set pedirnctrl
     *
     * @param integer $pedirnctrl
     * @return Saconf
     */
    public function setPedirnctrl($pedirnctrl)
    {
        $this->pedirnctrl = $pedirnctrl;

        return $this;
    }

    /**
     * Get pedirnctrl
     *
     * @return integer 
     */
    public function getPedirnctrl()
    {
        return $this->pedirnctrl;
    }

    /**
     * Set redond
     *
     * @param integer $redond
     * @return Saconf
     */
    public function setRedond($redond)
    {
        $this->redond = $redond;

        return $this;
    }

    /**
     * Get redond
     *
     * @return integer 
     */
    public function getRedond()
    {
        return $this->redond;
    }

    /**
     * Set redtotal
     *
     * @param integer $redtotal
     * @return Saconf
     */
    public function setRedtotal($redtotal)
    {
        $this->redtotal = $redtotal;

        return $this;
    }

    /**
     * Get redtotal
     *
     * @return integer 
     */
    public function getRedtotal()
    {
        return $this->redtotal;
    }

    /**
     * Set oblioper
     *
     * @param integer $oblioper
     * @return Saconf
     */
    public function setOblioper($oblioper)
    {
        $this->oblioper = $oblioper;

        return $this;
    }

    /**
     * Get oblioper
     *
     * @return integer 
     */
    public function getOblioper()
    {
        return $this->oblioper;
    }

    /**
     * Set paswlim
     *
     * @param integer $paswlim
     * @return Saconf
     */
    public function setPaswlim($paswlim)
    {
        $this->paswlim = $paswlim;

        return $this;
    }

    /**
     * Get paswlim
     *
     * @return integer 
     */
    public function getPaswlim()
    {
        return $this->paswlim;
    }

    /**
     * Set adicional
     *
     * @param string $adicional
     * @return Saconf
     */
    public function setAdicional($adicional)
    {
        $this->adicional = $adicional;

        return $this;
    }

    /**
     * Get adicional
     *
     * @return string 
     */
    public function getAdicional()
    {
        return $this->adicional;
    }

    /**
     * Set factor
     *
     * @param string $factor
     * @return Saconf
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return string 
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set factorm
     *
     * @param string $factorm
     * @return Saconf
     */
    public function setFactorm($factorm)
    {
        $this->factorm = $factorm;

        return $this;
    }

    /**
     * Get factorm
     *
     * @return string 
     */
    public function getFactorm()
    {
        return $this->factorm;
    }

    /**
     * Set usafactorm
     *
     * @param integer $usafactorm
     * @return Saconf
     */
    public function setUsafactorm($usafactorm)
    {
        $this->usafactorm = $usafactorm;

        return $this;
    }

    /**
     * Get usafactorm
     *
     * @return integer 
     */
    public function getUsafactorm()
    {
        return $this->usafactorm;
    }

    /**
     * Set simbfac
     *
     * @param string $simbfac
     * @return Saconf
     */
    public function setSimbfac($simbfac)
    {
        $this->simbfac = $simbfac;

        return $this;
    }

    /**
     * Get simbfac
     *
     * @return string 
     */
    public function getSimbfac()
    {
        return $this->simbfac;
    }

    /**
     * Set esmoneda
     *
     * @param integer $esmoneda
     * @return Saconf
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
     * Set usanel
     *
     * @param integer $usanel
     * @return Saconf
     */
    public function setUsanel($usanel)
    {
        $this->usanel = $usanel;

        return $this;
    }

    /**
     * Get usanel
     *
     * @return integer 
     */
    public function getUsanel()
    {
        return $this->usanel;
    }

    /**
     * Set invconsig
     *
     * @param integer $invconsig
     * @return Saconf
     */
    public function setInvconsig($invconsig)
    {
        $this->invconsig = $invconsig;

        return $this;
    }

    /**
     * Get invconsig
     *
     * @return integer 
     */
    public function getInvconsig()
    {
        return $this->invconsig;
    }

    /**
     * Set prioridadic
     *
     * @param integer $prioridadic
     * @return Saconf
     */
    public function setPrioridadic($prioridadic)
    {
        $this->prioridadic = $prioridadic;

        return $this;
    }

    /**
     * Get prioridadic
     *
     * @return integer 
     */
    public function getPrioridadic()
    {
        return $this->prioridadic;
    }

    /**
     * Set correlunc
     *
     * @param integer $correlunc
     * @return Saconf
     */
    public function setCorrelunc($correlunc)
    {
        $this->correlunc = $correlunc;

        return $this;
    }

    /**
     * Get correlunc
     *
     * @return integer 
     */
    public function getCorrelunc()
    {
        return $this->correlunc;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Saconf
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set nroserial
     *
     * @param string $nroserial
     * @return Saconf
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
     * @return Saconf
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
     * Set nroestable
     *
     * @param string $nroestable
     * @return Saconf
     */
    public function setNroestable($nroestable)
    {
        $this->nroestable = $nroestable;

        return $this;
    }

    /**
     * Get nroestable
     *
     * @return string 
     */
    public function getNroestable()
    {
        return $this->nroestable;
    }

    /**
     * Set establreten
     *
     * @param string $establreten
     * @return Saconf
     */
    public function setEstablreten($establreten)
    {
        $this->establreten = $establreten;

        return $this;
    }

    /**
     * Get establreten
     *
     * @return string 
     */
    public function getEstablreten()
    {
        return $this->establreten;
    }

    /**
     * Set ptoemireten
     *
     * @param string $ptoemireten
     * @return Saconf
     */
    public function setPtoemireten($ptoemireten)
    {
        $this->ptoemireten = $ptoemireten;

        return $this;
    }

    /**
     * Get ptoemireten
     *
     * @return string 
     */
    public function getPtoemireten()
    {
        return $this->ptoemireten;
    }

    /**
     * Set feccadreten
     *
     * @param \DateTime $feccadreten
     * @return Saconf
     */
    public function setFeccadreten($feccadreten)
    {
        $this->feccadreten = $feccadreten;

        return $this;
    }

    /**
     * Get feccadreten
     *
     * @return \DateTime 
     */
    public function getFeccadreten()
    {
        return $this->feccadreten;
    }

    /**
     * Set autsrireten
     *
     * @param string $autsrireten
     * @return Saconf
     */
    public function setAutsrireten($autsrireten)
    {
        $this->autsrireten = $autsrireten;

        return $this;
    }

    /**
     * Get autsrireten
     *
     * @return string 
     */
    public function getAutsrireten()
    {
        return $this->autsrireten;
    }
}
