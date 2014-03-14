<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Safact
 *
 * @ORM\Table(name="SAFACT", indexes={@ORM\Index(name="SAFACT_IX1", columns={"TipoFac", "Descrip"}), @ORM\Index(name="SAFACT_IX2", columns={"TipoFac", "OrdenC"})})
 * @ORM\Entity
 */
class Safact
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoFac", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipofac;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="NroCtrol", type="string", length=20, nullable=true)
     */
    private $nroctrol;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

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
     * @ORM\Column(name="EsCorrel", type="smallint", nullable=false)
     */
    private $escorrel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodConv", type="string", length=10, nullable=true)
     */
    private $codconv;

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
     * @ORM\Column(name="OTipo", type="string", length=1, nullable=true)
     */
    private $otipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ONumero", type="string", length=10, nullable=true)
     */
    private $onumero;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoTra", type="string", length=1, nullable=true)
     */
    private $tipotra;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroC", type="string", length=10, nullable=true)
     */
    private $numeroc;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroT", type="string", length=15, nullable=true)
     */
    private $numerot;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroR", type="string", length=10, nullable=true)
     */
    private $numeror;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaD1", type="datetime", nullable=true)
     */
    private $fechad1;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD1", type="string", length=15, nullable=true)
     */
    private $numerod1;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroK", type="string", length=15, nullable=true)
     */
    private $numerok;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroF", type="string", length=10, nullable=true)
     */
    private $numerof;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroP", type="string", length=15, nullable=true)
     */
    private $numerop;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroE", type="string", length=10, nullable=true)
     */
    private $numeroe;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroZ", type="string", length=10, nullable=true)
     */
    private $numeroz;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsExPickup", type="smallint", nullable=false)
     */
    private $esexpickup = '0';

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
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=true)
     */
    private $codclie;

    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=true)
     */
    private $codvend;

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
     * @var string
     *
     * @ORM\Column(name="Direc3", type="string", length=60, nullable=true)
     */
    private $direc3;

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
     * @ORM\Column(name="CostoPrd", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costoprd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CostoSrv", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costosrv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DesctoP", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $desctop = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaR", type="datetime", nullable=true)
     */
    private $fechar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaI", type="datetime", nullable=true)
     */
    private $fechai;

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
     * @ORM\Column(name="CancelI", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $canceli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancela = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelE", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancele = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelG", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelP", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cambio", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cambio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsConsig", type="smallint", nullable=false)
     */
    private $esconsig = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoExtra", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoextra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ValorPtos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $valorptos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PctAnual", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pctanual = '0';

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
     * @ORM\Column(name="PctManejo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pctmanejo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoInt2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoint2 = '0';

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
     * @ORM\Column(name="MtoComiVta", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomivta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoComiCob", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomicob = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoComiVtaD", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomivtad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoComiCobD", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomicobd = '0';

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
     * @ORM\Column(name="AutSRI", type="string", length=10, nullable=true)
     */
    private $autsri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaSRI", type="datetime", nullable=true)
     */
    private $fechasri;

    /**
     * @var string
     *
     * @ORM\Column(name="NroEstable", type="string", length=10, nullable=true)
     */
    private $nroestable;

    /**
     * @var string
     *
     * @ORM\Column(name="PtoEmision", type="string", length=10, nullable=true)
     */
    private $ptoemision;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoTraE", type="smallint", nullable=false)
     */
    private $tipotrae = '0';



    /**
     * Set tipofac
     *
     * @param string $tipofac
     * @return Safact
     */
    public function setTipofac($tipofac)
    {
        $this->tipofac = $tipofac;

        return $this;
    }

    /**
     * Get tipofac
     *
     * @return string 
     */
    public function getTipofac()
    {
        return $this->tipofac;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Safact
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Safact
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
     * Set nroctrol
     *
     * @param string $nroctrol
     * @return Safact
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
     * Set status
     *
     * @param string $status
     * @return Safact
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set escorrel
     *
     * @param integer $escorrel
     * @return Safact
     */
    public function setEscorrel($escorrel)
    {
        $this->escorrel = $escorrel;

        return $this;
    }

    /**
     * Get escorrel
     *
     * @return integer 
     */
    public function getEscorrel()
    {
        return $this->escorrel;
    }

    /**
     * Set codconv
     *
     * @param string $codconv
     * @return Safact
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
     * Set signo
     *
     * @param integer $signo
     * @return Safact
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
     * @return Safact
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
     * Set otipo
     *
     * @param string $otipo
     * @return Safact
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
     * @return Safact
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
     * Set tipotra
     *
     * @param string $tipotra
     * @return Safact
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
     * Set numeroc
     *
     * @param string $numeroc
     * @return Safact
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
     * Set numerot
     *
     * @param string $numerot
     * @return Safact
     */
    public function setNumerot($numerot)
    {
        $this->numerot = $numerot;

        return $this;
    }

    /**
     * Get numerot
     *
     * @return string 
     */
    public function getNumerot()
    {
        return $this->numerot;
    }

    /**
     * Set numeror
     *
     * @param string $numeror
     * @return Safact
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
     * Set fechad1
     *
     * @param \DateTime $fechad1
     * @return Safact
     */
    public function setFechad1($fechad1)
    {
        $this->fechad1 = $fechad1;

        return $this;
    }

    /**
     * Get fechad1
     *
     * @return \DateTime 
     */
    public function getFechad1()
    {
        return $this->fechad1;
    }

    /**
     * Set numerod1
     *
     * @param string $numerod1
     * @return Safact
     */
    public function setNumerod1($numerod1)
    {
        $this->numerod1 = $numerod1;

        return $this;
    }

    /**
     * Get numerod1
     *
     * @return string 
     */
    public function getNumerod1()
    {
        return $this->numerod1;
    }

    /**
     * Set numerok
     *
     * @param string $numerok
     * @return Safact
     */
    public function setNumerok($numerok)
    {
        $this->numerok = $numerok;

        return $this;
    }

    /**
     * Get numerok
     *
     * @return string 
     */
    public function getNumerok()
    {
        return $this->numerok;
    }

    /**
     * Set numerof
     *
     * @param string $numerof
     * @return Safact
     */
    public function setNumerof($numerof)
    {
        $this->numerof = $numerof;

        return $this;
    }

    /**
     * Get numerof
     *
     * @return string 
     */
    public function getNumerof()
    {
        return $this->numerof;
    }

    /**
     * Set numerop
     *
     * @param string $numerop
     * @return Safact
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
     * @return Safact
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
     * Set numeroz
     *
     * @param string $numeroz
     * @return Safact
     */
    public function setNumeroz($numeroz)
    {
        $this->numeroz = $numeroz;

        return $this;
    }

    /**
     * Get numeroz
     *
     * @return string 
     */
    public function getNumeroz()
    {
        return $this->numeroz;
    }

    /**
     * Set esexpickup
     *
     * @param integer $esexpickup
     * @return Safact
     */
    public function setEsexpickup($esexpickup)
    {
        $this->esexpickup = $esexpickup;

        return $this;
    }

    /**
     * Get esexpickup
     *
     * @return integer 
     */
    public function getEsexpickup()
    {
        return $this->esexpickup;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set codclie
     *
     * @param string $codclie
     * @return Safact
     */
    public function setCodclie($codclie)
    {
        $this->codclie = $codclie;

        return $this;
    }

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
     * Set codvend
     *
     * @param string $codvend
     * @return Safact
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
     * Set codubic
     *
     * @param string $codubic
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set direc3
     *
     * @param string $direc3
     * @return Safact
     */
    public function setDirec3($direc3)
    {
        $this->direc3 = $direc3;

        return $this;
    }

    /**
     * Get direc3
     *
     * @return string 
     */
    public function getDirec3()
    {
        return $this->direc3;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set mtotax
     *
     * @param string $mtotax
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set costoprd
     *
     * @param string $costoprd
     * @return Safact
     */
    public function setCostoprd($costoprd)
    {
        $this->costoprd = $costoprd;

        return $this;
    }

    /**
     * Get costoprd
     *
     * @return string 
     */
    public function getCostoprd()
    {
        return $this->costoprd;
    }

    /**
     * Set costosrv
     *
     * @param string $costosrv
     * @return Safact
     */
    public function setCostosrv($costosrv)
    {
        $this->costosrv = $costosrv;

        return $this;
    }

    /**
     * Get costosrv
     *
     * @return string 
     */
    public function getCostosrv()
    {
        return $this->costosrv;
    }

    /**
     * Set desctop
     *
     * @param string $desctop
     * @return Safact
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
     * Set reteniva
     *
     * @param string $reteniva
     * @return Safact
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
     * Set fechar
     *
     * @param \DateTime $fechar
     * @return Safact
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
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Safact
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Safact
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
     * @return Safact
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
     * Set mtototal
     *
     * @param string $mtototal
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set canceli
     *
     * @param string $canceli
     * @return Safact
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
     * Set cancela
     *
     * @param string $cancela
     * @return Safact
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
     * Set cancele
     *
     * @param string $cancele
     * @return Safact
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
     * Set cancelc
     *
     * @param string $cancelc
     * @return Safact
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
     * Set cancelt
     *
     * @param string $cancelt
     * @return Safact
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
     * Set cancelg
     *
     * @param string $cancelg
     * @return Safact
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
     * Set cancelp
     *
     * @param string $cancelp
     * @return Safact
     */
    public function setCancelp($cancelp)
    {
        $this->cancelp = $cancelp;

        return $this;
    }

    /**
     * Get cancelp
     *
     * @return string 
     */
    public function getCancelp()
    {
        return $this->cancelp;
    }

    /**
     * Set cambio
     *
     * @param string $cambio
     * @return Safact
     */
    public function setCambio($cambio)
    {
        $this->cambio = $cambio;

        return $this;
    }

    /**
     * Get cambio
     *
     * @return string 
     */
    public function getCambio()
    {
        return $this->cambio;
    }

    /**
     * Set esconsig
     *
     * @param integer $esconsig
     * @return Safact
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
     * Set mtoextra
     *
     * @param string $mtoextra
     * @return Safact
     */
    public function setMtoextra($mtoextra)
    {
        $this->mtoextra = $mtoextra;

        return $this;
    }

    /**
     * Get mtoextra
     *
     * @return string 
     */
    public function getMtoextra()
    {
        return $this->mtoextra;
    }

    /**
     * Set valorptos
     *
     * @param string $valorptos
     * @return Safact
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
     * Set descto1
     *
     * @param string $descto1
     * @return Safact
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
     * Set pctanual
     *
     * @param string $pctanual
     * @return Safact
     */
    public function setPctanual($pctanual)
    {
        $this->pctanual = $pctanual;

        return $this;
    }

    /**
     * Get pctanual
     *
     * @return string 
     */
    public function getPctanual()
    {
        return $this->pctanual;
    }

    /**
     * Set mtoint1
     *
     * @param string $mtoint1
     * @return Safact
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
     * @return Safact
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
     * Set pctmanejo
     *
     * @param string $pctmanejo
     * @return Safact
     */
    public function setPctmanejo($pctmanejo)
    {
        $this->pctmanejo = $pctmanejo;

        return $this;
    }

    /**
     * Get pctmanejo
     *
     * @return string 
     */
    public function getPctmanejo()
    {
        return $this->pctmanejo;
    }

    /**
     * Set mtoint2
     *
     * @param string $mtoint2
     * @return Safact
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
     * Set saldoact
     *
     * @param string $saldoact
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set mtofinanc
     *
     * @param string $mtofinanc
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set mtocomivta
     *
     * @param string $mtocomivta
     * @return Safact
     */
    public function setMtocomivta($mtocomivta)
    {
        $this->mtocomivta = $mtocomivta;

        return $this;
    }

    /**
     * Get mtocomivta
     *
     * @return string 
     */
    public function getMtocomivta()
    {
        return $this->mtocomivta;
    }

    /**
     * Set mtocomicob
     *
     * @param string $mtocomicob
     * @return Safact
     */
    public function setMtocomicob($mtocomicob)
    {
        $this->mtocomicob = $mtocomicob;

        return $this;
    }

    /**
     * Get mtocomicob
     *
     * @return string 
     */
    public function getMtocomicob()
    {
        return $this->mtocomicob;
    }

    /**
     * Set mtocomivtad
     *
     * @param string $mtocomivtad
     * @return Safact
     */
    public function setMtocomivtad($mtocomivtad)
    {
        $this->mtocomivtad = $mtocomivtad;

        return $this;
    }

    /**
     * Get mtocomivtad
     *
     * @return string 
     */
    public function getMtocomivtad()
    {
        return $this->mtocomivtad;
    }

    /**
     * Set mtocomicobd
     *
     * @param string $mtocomicobd
     * @return Safact
     */
    public function setMtocomicobd($mtocomicobd)
    {
        $this->mtocomicobd = $mtocomicobd;

        return $this;
    }

    /**
     * Get mtocomicobd
     *
     * @return string 
     */
    public function getMtocomicobd()
    {
        return $this->mtocomicobd;
    }

    /**
     * Set notas1
     *
     * @param string $notas1
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * @return Safact
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
     * Set autsri
     *
     * @param string $autsri
     * @return Safact
     */
    public function setAutsri($autsri)
    {
        $this->autsri = $autsri;

        return $this;
    }

    /**
     * Get autsri
     *
     * @return string 
     */
    public function getAutsri()
    {
        return $this->autsri;
    }

    /**
     * Set fechasri
     *
     * @param \DateTime $fechasri
     * @return Safact
     */
    public function setFechasri($fechasri)
    {
        $this->fechasri = $fechasri;

        return $this;
    }

    /**
     * Get fechasri
     *
     * @return \DateTime 
     */
    public function getFechasri()
    {
        return $this->fechasri;
    }

    /**
     * Set nroestable
     *
     * @param string $nroestable
     * @return Safact
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
     * Set ptoemision
     *
     * @param string $ptoemision
     * @return Safact
     */
    public function setPtoemision($ptoemision)
    {
        $this->ptoemision = $ptoemision;

        return $this;
    }

    /**
     * Get ptoemision
     *
     * @return string 
     */
    public function getPtoemision()
    {
        return $this->ptoemision;
    }

    /**
     * Set tipotrae
     *
     * @param integer $tipotrae
     * @return Safact
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
