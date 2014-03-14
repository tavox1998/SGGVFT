<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacomp
 *
 * @ORM\Table(name="SACOMP", indexes={@ORM\Index(name="SACOMP_IX1", columns={"TipoCom", "NumeroD"}), @ORM\Index(name="SACOMP_IX2", columns={"TipoCom", "Descrip"})})
 * @ORM\Entity
 */
class Sacomp
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoCom", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipocom;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="NroCtrol", type="string", length=20, nullable=true)
     */
    private $nroctrol;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=true)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=true)
     */
    private $codesta;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=true)
     */
    private $codusua;

    /**
     * @var integer
     *
     * @ORM\Column(name="Signo", type="smallint", nullable=false)
     */
    private $signo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaT", type="datetime", nullable=true)
     */
    private $fechat;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoTra", type="string", length=1, nullable=true)
     */
    private $tipotra;

    /**
     * @var string
     *
     * @ORM\Column(name="OTipo", type="string", length=1, nullable=true)
     */
    private $otipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ONumero", type="string", length=20, nullable=true)
     */
    private $onumero;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroP", type="string", length=20, nullable=true)
     */
    private $numerop;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroE", type="string", length=20, nullable=true)
     */
    private $numeroe;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroC", type="string", length=20, nullable=true)
     */
    private $numeroc;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroN", type="string", length=20, nullable=true)
     */
    private $numeron;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroR", type="string", length=10, nullable=true)
     */
    private $numeror;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $factor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoMEx", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montomex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=true)
     */
    private $codubic;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=60, nullable=true)
     */
    private $descrip;

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
     * @ORM\Column(name="ID3", type="string", length=25, nullable=true)
     */
    private $id3;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OtrosC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $otrosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fletes", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $fletes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TGravable", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tgravable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TExento", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $texento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DesctoP", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $desctop = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsConsig", type="smallint", nullable=false)
     */
    private $esconsig = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaI", type="datetime", nullable=true)
     */
    private $fechai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaR", type="datetime", nullable=true)
     */
    private $fechar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

    /**
     * @var string
     *
     * @ORM\Column(name="CancelI", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $canceli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelE", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancele = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancela = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelG", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Contado", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $contado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Credito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $credito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoAct", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoPagos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtopagos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoNCredito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoncredito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoNDebito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtondebito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoInt1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoint1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoInt2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoint2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoFinanc", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtofinanc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DetalChq", type="string", length=40, nullable=true)
     */
    private $detalchq;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalPrd", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $totalprd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TotalSrv", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $totalsrv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OrdenC", type="string", length=30, nullable=true)
     */
    private $ordenc;

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var integer
     *
     * @ORM\Column(name="NGiros", type="integer", nullable=false)
     */
    private $ngiros = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NMeses", type="integer", nullable=false)
     */
    private $nmeses = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Notas1", type="string", length=60, nullable=true)
     */
    private $notas1;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas2", type="string", length=60, nullable=true)
     */
    private $notas2;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas3", type="string", length=60, nullable=true)
     */
    private $notas3;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas4", type="string", length=60, nullable=true)
     */
    private $notas4;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas5", type="string", length=60, nullable=true)
     */
    private $notas5;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas6", type="string", length=60, nullable=true)
     */
    private $notas6;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas7", type="string", length=60, nullable=true)
     */
    private $notas7;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas8", type="string", length=60, nullable=true)
     */
    private $notas8;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas9", type="string", length=60, nullable=true)
     */
    private $notas9;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas10", type="string", length=60, nullable=true)
     */
    private $notas10;

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
     * @var integer
     *
     * @ORM\Column(name="TipoTraE", type="smallint", nullable=false)
     */
    private $tipotrae = '0';



    /**
     * Set tipocom
     *
     * @param string $tipocom
     * @return Sacomp
     */
    public function setTipocom($tipocom)
    {
        $this->tipocom = $tipocom;

        return $this;
    }

    /**
     * Get tipocom
     *
     * @return string 
     */
    public function getTipocom()
    {
        return $this->tipocom;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sacomp
     */
    public function setNumerod($numerod)
    {
        $this->numerod = $numerod;

        return $this;
    }

    /**
     * Get numerod
     *
     * @return string 
     */
    public function getNumerod()
    {
        return $this->numerod;
    }

    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sacomp
     */
    public function setCodprov($codprov)
    {
        $this->codprov = $codprov;

        return $this;
    }

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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sacomp
     */
    public function setNrounico($nrounico)
    {
        $this->nrounico = $nrounico;

        return $this;
    }

    /**
     * Get nrounico
     *
     * @return integer 
     */
    public function getNrounico()
    {
        return $this->nrounico;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Sacomp
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set nroctrol
     *
     * @param string $nroctrol
     * @return Sacomp
     */
    public function setNroctrol($nroctrol)
    {
        $this->nroctrol = $nroctrol;

        return $this;
    }

    /**
     * Get nroctrol
     *
     * @return string 
     */
    public function getNroctrol()
    {
        return $this->nroctrol;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sacomp
     */
    public function setCodsucu($codsucu)
    {
        $this->codsucu = $codsucu;

        return $this;
    }

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
     * Set codesta
     *
     * @param string $codesta
     * @return Sacomp
     */
    public function setCodesta($codesta)
    {
        $this->codesta = $codesta;

        return $this;
    }

    /**
     * Get codesta
     *
     * @return string 
     */
    public function getCodesta()
    {
        return $this->codesta;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Sacomp
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
     * Set signo
     *
     * @param integer $signo
     * @return Sacomp
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return integer 
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set fechat
     *
     * @param \DateTime $fechat
     * @return Sacomp
     */
    public function setFechat($fechat)
    {
        $this->fechat = $fechat;

        return $this;
    }

    /**
     * Get fechat
     *
     * @return \DateTime 
     */
    public function getFechat()
    {
        return $this->fechat;
    }

    /**
     * Set tipotra
     *
     * @param string $tipotra
     * @return Sacomp
     */
    public function setTipotra($tipotra)
    {
        $this->tipotra = $tipotra;

        return $this;
    }

    /**
     * Get tipotra
     *
     * @return string 
     */
    public function getTipotra()
    {
        return $this->tipotra;
    }

    /**
     * Set otipo
     *
     * @param string $otipo
     * @return Sacomp
     */
    public function setOtipo($otipo)
    {
        $this->otipo = $otipo;

        return $this;
    }

    /**
     * Get otipo
     *
     * @return string 
     */
    public function getOtipo()
    {
        return $this->otipo;
    }

    /**
     * Set onumero
     *
     * @param string $onumero
     * @return Sacomp
     */
    public function setOnumero($onumero)
    {
        $this->onumero = $onumero;

        return $this;
    }

    /**
     * Get onumero
     *
     * @return string 
     */
    public function getOnumero()
    {
        return $this->onumero;
    }

    /**
     * Set numerop
     *
     * @param string $numerop
     * @return Sacomp
     */
    public function setNumerop($numerop)
    {
        $this->numerop = $numerop;

        return $this;
    }

    /**
     * Get numerop
     *
     * @return string 
     */
    public function getNumerop()
    {
        return $this->numerop;
    }

    /**
     * Set numeroe
     *
     * @param string $numeroe
     * @return Sacomp
     */
    public function setNumeroe($numeroe)
    {
        $this->numeroe = $numeroe;

        return $this;
    }

    /**
     * Get numeroe
     *
     * @return string 
     */
    public function getNumeroe()
    {
        return $this->numeroe;
    }

    /**
     * Set numeroc
     *
     * @param string $numeroc
     * @return Sacomp
     */
    public function setNumeroc($numeroc)
    {
        $this->numeroc = $numeroc;

        return $this;
    }

    /**
     * Get numeroc
     *
     * @return string 
     */
    public function getNumeroc()
    {
        return $this->numeroc;
    }

    /**
     * Set numeron
     *
     * @param string $numeron
     * @return Sacomp
     */
    public function setNumeron($numeron)
    {
        $this->numeron = $numeron;

        return $this;
    }

    /**
     * Get numeron
     *
     * @return string 
     */
    public function getNumeron()
    {
        return $this->numeron;
    }

    /**
     * Set numeror
     *
     * @param string $numeror
     * @return Sacomp
     */
    public function setNumeror($numeror)
    {
        $this->numeror = $numeror;

        return $this;
    }

    /**
     * Get numeror
     *
     * @return string 
     */
    public function getNumeror()
    {
        return $this->numeror;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Sacomp
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set factor
     *
     * @param string $factor
     * @return Sacomp
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
     * Set montomex
     *
     * @param string $montomex
     * @return Sacomp
     */
    public function setMontomex($montomex)
    {
        $this->montomex = $montomex;

        return $this;
    }

    /**
     * Get montomex
     *
     * @return string 
     */
    public function getMontomex()
    {
        return $this->montomex;
    }

    /**
     * Set codubic
     *
     * @param string $codubic
     * @return Sacomp
     */
    public function setCodubic($codubic)
    {
        $this->codubic = $codubic;

        return $this;
    }

    /**
     * Get codubic
     *
     * @return string 
     */
    public function getCodubic()
    {
        return $this->codubic;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * Set id3
     *
     * @param string $id3
     * @return Sacomp
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
     * Set monto
     *
     * @param string $monto
     * @return Sacomp
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
     * Set otrosc
     *
     * @param string $otrosc
     * @return Sacomp
     */
    public function setOtrosc($otrosc)
    {
        $this->otrosc = $otrosc;

        return $this;
    }

    /**
     * Get otrosc
     *
     * @return string 
     */
    public function getOtrosc()
    {
        return $this->otrosc;
    }

    /**
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sacomp
     */
    public function setMtotax($mtotax)
    {
        $this->mtotax = $mtotax;

        return $this;
    }

    /**
     * Get mtotax
     *
     * @return string 
     */
    public function getMtotax()
    {
        return $this->mtotax;
    }

    /**
     * Set fletes
     *
     * @param string $fletes
     * @return Sacomp
     */
    public function setFletes($fletes)
    {
        $this->fletes = $fletes;

        return $this;
    }

    /**
     * Get fletes
     *
     * @return string 
     */
    public function getFletes()
    {
        return $this->fletes;
    }

    /**
     * Set tgravable
     *
     * @param string $tgravable
     * @return Sacomp
     */
    public function setTgravable($tgravable)
    {
        $this->tgravable = $tgravable;

        return $this;
    }

    /**
     * Get tgravable
     *
     * @return string 
     */
    public function getTgravable()
    {
        return $this->tgravable;
    }

    /**
     * Set texento
     *
     * @param string $texento
     * @return Sacomp
     */
    public function setTexento($texento)
    {
        $this->texento = $texento;

        return $this;
    }

    /**
     * Get texento
     *
     * @return string 
     */
    public function getTexento()
    {
        return $this->texento;
    }

    /**
     * Set desctop
     *
     * @param string $desctop
     * @return Sacomp
     */
    public function setDesctop($desctop)
    {
        $this->desctop = $desctop;

        return $this;
    }

    /**
     * Get desctop
     *
     * @return string 
     */
    public function getDesctop()
    {
        return $this->desctop;
    }

    /**
     * Set esconsig
     *
     * @param integer $esconsig
     * @return Sacomp
     */
    public function setEsconsig($esconsig)
    {
        $this->esconsig = $esconsig;

        return $this;
    }

    /**
     * Get esconsig
     *
     * @return integer 
     */
    public function getEsconsig()
    {
        return $this->esconsig;
    }

    /**
     * Set reteniva
     *
     * @param string $reteniva
     * @return Sacomp
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
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Sacomp
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
     * Set fechar
     *
     * @param \DateTime $fechar
     * @return Sacomp
     */
    public function setFechar($fechar)
    {
        $this->fechar = $fechar;

        return $this;
    }

    /**
     * Get fechar
     *
     * @return \DateTime 
     */
    public function getFechar()
    {
        return $this->fechar;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sacomp
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
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Sacomp
     */
    public function setFechav($fechav)
    {
        $this->fechav = $fechav;

        return $this;
    }

    /**
     * Get fechav
     *
     * @return \DateTime 
     */
    public function getFechav()
    {
        return $this->fechav;
    }

    /**
     * Set canceli
     *
     * @param string $canceli
     * @return Sacomp
     */
    public function setCanceli($canceli)
    {
        $this->canceli = $canceli;

        return $this;
    }

    /**
     * Get canceli
     *
     * @return string 
     */
    public function getCanceli()
    {
        return $this->canceli;
    }

    /**
     * Set cancele
     *
     * @param string $cancele
     * @return Sacomp
     */
    public function setCancele($cancele)
    {
        $this->cancele = $cancele;

        return $this;
    }

    /**
     * Get cancele
     *
     * @return string 
     */
    public function getCancele()
    {
        return $this->cancele;
    }

    /**
     * Set cancelt
     *
     * @param string $cancelt
     * @return Sacomp
     */
    public function setCancelt($cancelt)
    {
        $this->cancelt = $cancelt;

        return $this;
    }

    /**
     * Get cancelt
     *
     * @return string 
     */
    public function getCancelt()
    {
        return $this->cancelt;
    }

    /**
     * Set cancelc
     *
     * @param string $cancelc
     * @return Sacomp
     */
    public function setCancelc($cancelc)
    {
        $this->cancelc = $cancelc;

        return $this;
    }

    /**
     * Get cancelc
     *
     * @return string 
     */
    public function getCancelc()
    {
        return $this->cancelc;
    }

    /**
     * Set cancela
     *
     * @param string $cancela
     * @return Sacomp
     */
    public function setCancela($cancela)
    {
        $this->cancela = $cancela;

        return $this;
    }

    /**
     * Get cancela
     *
     * @return string 
     */
    public function getCancela()
    {
        return $this->cancela;
    }

    /**
     * Set cancelg
     *
     * @param string $cancelg
     * @return Sacomp
     */
    public function setCancelg($cancelg)
    {
        $this->cancelg = $cancelg;

        return $this;
    }

    /**
     * Get cancelg
     *
     * @return string 
     */
    public function getCancelg()
    {
        return $this->cancelg;
    }

    /**
     * Set mtototal
     *
     * @param string $mtototal
     * @return Sacomp
     */
    public function setMtototal($mtototal)
    {
        $this->mtototal = $mtototal;

        return $this;
    }

    /**
     * Get mtototal
     *
     * @return string 
     */
    public function getMtototal()
    {
        return $this->mtototal;
    }

    /**
     * Set contado
     *
     * @param string $contado
     * @return Sacomp
     */
    public function setContado($contado)
    {
        $this->contado = $contado;

        return $this;
    }

    /**
     * Get contado
     *
     * @return string 
     */
    public function getContado()
    {
        return $this->contado;
    }

    /**
     * Set credito
     *
     * @param string $credito
     * @return Sacomp
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return string 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set saldoact
     *
     * @param string $saldoact
     * @return Sacomp
     */
    public function setSaldoact($saldoact)
    {
        $this->saldoact = $saldoact;

        return $this;
    }

    /**
     * Get saldoact
     *
     * @return string 
     */
    public function getSaldoact()
    {
        return $this->saldoact;
    }

    /**
     * Set mtopagos
     *
     * @param string $mtopagos
     * @return Sacomp
     */
    public function setMtopagos($mtopagos)
    {
        $this->mtopagos = $mtopagos;

        return $this;
    }

    /**
     * Get mtopagos
     *
     * @return string 
     */
    public function getMtopagos()
    {
        return $this->mtopagos;
    }

    /**
     * Set mtoncredito
     *
     * @param string $mtoncredito
     * @return Sacomp
     */
    public function setMtoncredito($mtoncredito)
    {
        $this->mtoncredito = $mtoncredito;

        return $this;
    }

    /**
     * Get mtoncredito
     *
     * @return string 
     */
    public function getMtoncredito()
    {
        return $this->mtoncredito;
    }

    /**
     * Set mtondebito
     *
     * @param string $mtondebito
     * @return Sacomp
     */
    public function setMtondebito($mtondebito)
    {
        $this->mtondebito = $mtondebito;

        return $this;
    }

    /**
     * Get mtondebito
     *
     * @return string 
     */
    public function getMtondebito()
    {
        return $this->mtondebito;
    }

    /**
     * Set descto1
     *
     * @param string $descto1
     * @return Sacomp
     */
    public function setDescto1($descto1)
    {
        $this->descto1 = $descto1;

        return $this;
    }

    /**
     * Get descto1
     *
     * @return string 
     */
    public function getDescto1()
    {
        return $this->descto1;
    }

    /**
     * Set mtoint1
     *
     * @param string $mtoint1
     * @return Sacomp
     */
    public function setMtoint1($mtoint1)
    {
        $this->mtoint1 = $mtoint1;

        return $this;
    }

    /**
     * Get mtoint1
     *
     * @return string 
     */
    public function getMtoint1()
    {
        return $this->mtoint1;
    }

    /**
     * Set descto2
     *
     * @param string $descto2
     * @return Sacomp
     */
    public function setDescto2($descto2)
    {
        $this->descto2 = $descto2;

        return $this;
    }

    /**
     * Get descto2
     *
     * @return string 
     */
    public function getDescto2()
    {
        return $this->descto2;
    }

    /**
     * Set mtoint2
     *
     * @param string $mtoint2
     * @return Sacomp
     */
    public function setMtoint2($mtoint2)
    {
        $this->mtoint2 = $mtoint2;

        return $this;
    }

    /**
     * Get mtoint2
     *
     * @return string 
     */
    public function getMtoint2()
    {
        return $this->mtoint2;
    }

    /**
     * Set mtofinanc
     *
     * @param string $mtofinanc
     * @return Sacomp
     */
    public function setMtofinanc($mtofinanc)
    {
        $this->mtofinanc = $mtofinanc;

        return $this;
    }

    /**
     * Get mtofinanc
     *
     * @return string 
     */
    public function getMtofinanc()
    {
        return $this->mtofinanc;
    }

    /**
     * Set detalchq
     *
     * @param string $detalchq
     * @return Sacomp
     */
    public function setDetalchq($detalchq)
    {
        $this->detalchq = $detalchq;

        return $this;
    }

    /**
     * Get detalchq
     *
     * @return string 
     */
    public function getDetalchq()
    {
        return $this->detalchq;
    }

    /**
     * Set totalprd
     *
     * @param string $totalprd
     * @return Sacomp
     */
    public function setTotalprd($totalprd)
    {
        $this->totalprd = $totalprd;

        return $this;
    }

    /**
     * Get totalprd
     *
     * @return string 
     */
    public function getTotalprd()
    {
        return $this->totalprd;
    }

    /**
     * Set totalsrv
     *
     * @param string $totalsrv
     * @return Sacomp
     */
    public function setTotalsrv($totalsrv)
    {
        $this->totalsrv = $totalsrv;

        return $this;
    }

    /**
     * Get totalsrv
     *
     * @return string 
     */
    public function getTotalsrv()
    {
        return $this->totalsrv;
    }

    /**
     * Set ordenc
     *
     * @param string $ordenc
     * @return Sacomp
     */
    public function setOrdenc($ordenc)
    {
        $this->ordenc = $ordenc;

        return $this;
    }

    /**
     * Get ordenc
     *
     * @return string 
     */
    public function getOrdenc()
    {
        return $this->ordenc;
    }

    /**
     * Set codoper
     *
     * @param string $codoper
     * @return Sacomp
     */
    public function setCodoper($codoper)
    {
        $this->codoper = $codoper;

        return $this;
    }

    /**
     * Get codoper
     *
     * @return string 
     */
    public function getCodoper()
    {
        return $this->codoper;
    }

    /**
     * Set ngiros
     *
     * @param integer $ngiros
     * @return Sacomp
     */
    public function setNgiros($ngiros)
    {
        $this->ngiros = $ngiros;

        return $this;
    }

    /**
     * Get ngiros
     *
     * @return integer 
     */
    public function getNgiros()
    {
        return $this->ngiros;
    }

    /**
     * Set nmeses
     *
     * @param integer $nmeses
     * @return Sacomp
     */
    public function setNmeses($nmeses)
    {
        $this->nmeses = $nmeses;

        return $this;
    }

    /**
     * Get nmeses
     *
     * @return integer 
     */
    public function getNmeses()
    {
        return $this->nmeses;
    }

    /**
     * Set notas1
     *
     * @param string $notas1
     * @return Sacomp
     */
    public function setNotas1($notas1)
    {
        $this->notas1 = $notas1;

        return $this;
    }

    /**
     * Get notas1
     *
     * @return string 
     */
    public function getNotas1()
    {
        return $this->notas1;
    }

    /**
     * Set notas2
     *
     * @param string $notas2
     * @return Sacomp
     */
    public function setNotas2($notas2)
    {
        $this->notas2 = $notas2;

        return $this;
    }

    /**
     * Get notas2
     *
     * @return string 
     */
    public function getNotas2()
    {
        return $this->notas2;
    }

    /**
     * Set notas3
     *
     * @param string $notas3
     * @return Sacomp
     */
    public function setNotas3($notas3)
    {
        $this->notas3 = $notas3;

        return $this;
    }

    /**
     * Get notas3
     *
     * @return string 
     */
    public function getNotas3()
    {
        return $this->notas3;
    }

    /**
     * Set notas4
     *
     * @param string $notas4
     * @return Sacomp
     */
    public function setNotas4($notas4)
    {
        $this->notas4 = $notas4;

        return $this;
    }

    /**
     * Get notas4
     *
     * @return string 
     */
    public function getNotas4()
    {
        return $this->notas4;
    }

    /**
     * Set notas5
     *
     * @param string $notas5
     * @return Sacomp
     */
    public function setNotas5($notas5)
    {
        $this->notas5 = $notas5;

        return $this;
    }

    /**
     * Get notas5
     *
     * @return string 
     */
    public function getNotas5()
    {
        return $this->notas5;
    }

    /**
     * Set notas6
     *
     * @param string $notas6
     * @return Sacomp
     */
    public function setNotas6($notas6)
    {
        $this->notas6 = $notas6;

        return $this;
    }

    /**
     * Get notas6
     *
     * @return string 
     */
    public function getNotas6()
    {
        return $this->notas6;
    }

    /**
     * Set notas7
     *
     * @param string $notas7
     * @return Sacomp
     */
    public function setNotas7($notas7)
    {
        $this->notas7 = $notas7;

        return $this;
    }

    /**
     * Get notas7
     *
     * @return string 
     */
    public function getNotas7()
    {
        return $this->notas7;
    }

    /**
     * Set notas8
     *
     * @param string $notas8
     * @return Sacomp
     */
    public function setNotas8($notas8)
    {
        $this->notas8 = $notas8;

        return $this;
    }

    /**
     * Get notas8
     *
     * @return string 
     */
    public function getNotas8()
    {
        return $this->notas8;
    }

    /**
     * Set notas9
     *
     * @param string $notas9
     * @return Sacomp
     */
    public function setNotas9($notas9)
    {
        $this->notas9 = $notas9;

        return $this;
    }

    /**
     * Get notas9
     *
     * @return string 
     */
    public function getNotas9()
    {
        return $this->notas9;
    }

    /**
     * Set notas10
     *
     * @param string $notas10
     * @return Sacomp
     */
    public function setNotas10($notas10)
    {
        $this->notas10 = $notas10;

        return $this;
    }

    /**
     * Get notas10
     *
     * @return string 
     */
    public function getNotas10()
    {
        return $this->notas10;
    }

    /**
     * Set establreten
     *
     * @param string $establreten
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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
     * @return Sacomp
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

    /**
     * Set tipotrae
     *
     * @param integer $tipotrae
     * @return Sacomp
     */
    public function setTipotrae($tipotrae)
    {
        $this->tipotrae = $tipotrae;

        return $this;
    }

    /**
     * Get tipotrae
     *
     * @return integer 
     */
    public function getTipotrae()
    {
        return $this->tipotrae;
    }
}
