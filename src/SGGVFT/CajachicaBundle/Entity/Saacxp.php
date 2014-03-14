<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saacxp
 *
 * @ORM\Table(name="SAACXP", indexes={@ORM\Index(name="SAACXP_IX1", columns={"CodProv", "NroUnico"})})
 * @ORM\Entity
 */
class Saacxp
{
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroRegi", type="integer", nullable=false)
     */
    private $nroregi = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaI", type="datetime", nullable=false)
     */
    private $fechai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaT", type="datetime", nullable=true)
     */
    private $fechat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaR", type="datetime", nullable=true)
     */
    private $fechar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

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
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroN", type="string", length=20, nullable=true)
     */
    private $numeron;

    /**
     * @var string
     *
     * @ORM\Column(name="NroCtrol", type="string", length=20, nullable=true)
     */
    private $nroctrol;

    /**
     * @var integer
     *
     * @ORM\Column(name="FromTran", type="integer", nullable=false)
     */
    private $fromtran = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCxP", type="string", length=2, nullable=true)
     */
    private $tipocxp;

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
     * @ORM\Column(name="SaldoMEx", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldomex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Document", type="string", length=40, nullable=true)
     */
    private $document;

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
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoNeto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montoneto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoOrg", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoorg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OrgTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $orgtax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoAct", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoact = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsLibroI", type="smallint", nullable=false)
     */
    private $eslibroi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BaseImpo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $baseimpo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TExento", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $texento = '0';

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
     * @ORM\Column(name="CancelD", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $canceld = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsUnPago", type="smallint", nullable=false)
     */
    private $esunpago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DetalChq", type="string", length=40, nullable=true)
     */
    private $detalchq;

    /**
     * @var integer
     *
     * @ORM\Column(name="AfectaCom", type="smallint", nullable=false)
     */
    private $afectacom = '0';

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
     * @var string
     *
     * @ORM\Column(name="NroOPago", type="string", length=15, nullable=true)
     */
    private $nroopago;

    /**
     * @var string
     *
     * @ORM\Column(name="Debitos", type="decimal", precision=28, scale=3, nullable=false)
     */
    private $debitos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Creditos", type="decimal", precision=28, scale=3, nullable=false)
     */
    private $creditos = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Saacxp
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
     * @return Saacxp
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
     * Set nroregi
     *
     * @param integer $nroregi
     * @return Saacxp
     */
    public function setNroregi($nroregi)
    {
        $this->nroregi = $nroregi;

        return $this;
    }

    /**
     * Get nroregi
     *
     * @return integer 
     */
    public function getNroregi()
    {
        return $this->nroregi;
    }

    /**
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Saacxp
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
     * @return Saacxp
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
     * Set fechat
     *
     * @param \DateTime $fechat
     * @return Saacxp
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
     * Set fechar
     *
     * @param \DateTime $fechar
     * @return Saacxp
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
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Saacxp
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * Set codoper
     *
     * @param string $codoper
     * @return Saacxp
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
     * Set numerod
     *
     * @param string $numerod
     * @return Saacxp
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
     * Set numeron
     *
     * @param string $numeron
     * @return Saacxp
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
     * Set nroctrol
     *
     * @param string $nroctrol
     * @return Saacxp
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
     * Set fromtran
     *
     * @param integer $fromtran
     * @return Saacxp
     */
    public function setFromtran($fromtran)
    {
        $this->fromtran = $fromtran;

        return $this;
    }

    /**
     * Get fromtran
     *
     * @return integer 
     */
    public function getFromtran()
    {
        return $this->fromtran;
    }

    /**
     * Set tipocxp
     *
     * @param string $tipocxp
     * @return Saacxp
     */
    public function setTipocxp($tipocxp)
    {
        $this->tipocxp = $tipocxp;

        return $this;
    }

    /**
     * Get tipocxp
     *
     * @return string 
     */
    public function getTipocxp()
    {
        return $this->tipocxp;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * Set saldomex
     *
     * @param string $saldomex
     * @return Saacxp
     */
    public function setSaldomex($saldomex)
    {
        $this->saldomex = $saldomex;

        return $this;
    }

    /**
     * Get saldomex
     *
     * @return string 
     */
    public function getSaldomex()
    {
        return $this->saldomex;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Saacxp
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set notas1
     *
     * @param string $notas1
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * Set monto
     *
     * @param string $monto
     * @return Saacxp
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
     * Set montoneto
     *
     * @param string $montoneto
     * @return Saacxp
     */
    public function setMontoneto($montoneto)
    {
        $this->montoneto = $montoneto;

        return $this;
    }

    /**
     * Get montoneto
     *
     * @return string 
     */
    public function getMontoneto()
    {
        return $this->montoneto;
    }

    /**
     * Set mtotax
     *
     * @param string $mtotax
     * @return Saacxp
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
     * Set reteniva
     *
     * @param string $reteniva
     * @return Saacxp
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
     * Set saldo
     *
     * @param string $saldo
     * @return Saacxp
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
     * Set saldoorg
     *
     * @param string $saldoorg
     * @return Saacxp
     */
    public function setSaldoorg($saldoorg)
    {
        $this->saldoorg = $saldoorg;

        return $this;
    }

    /**
     * Get saldoorg
     *
     * @return string 
     */
    public function getSaldoorg()
    {
        return $this->saldoorg;
    }

    /**
     * Set orgtax
     *
     * @param string $orgtax
     * @return Saacxp
     */
    public function setOrgtax($orgtax)
    {
        $this->orgtax = $orgtax;

        return $this;
    }

    /**
     * Get orgtax
     *
     * @return string 
     */
    public function getOrgtax()
    {
        return $this->orgtax;
    }

    /**
     * Set saldoact
     *
     * @param string $saldoact
     * @return Saacxp
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
     * Set eslibroi
     *
     * @param integer $eslibroi
     * @return Saacxp
     */
    public function setEslibroi($eslibroi)
    {
        $this->eslibroi = $eslibroi;

        return $this;
    }

    /**
     * Get eslibroi
     *
     * @return integer 
     */
    public function getEslibroi()
    {
        return $this->eslibroi;
    }

    /**
     * Set baseimpo
     *
     * @param string $baseimpo
     * @return Saacxp
     */
    public function setBaseimpo($baseimpo)
    {
        $this->baseimpo = $baseimpo;

        return $this;
    }

    /**
     * Get baseimpo
     *
     * @return string 
     */
    public function getBaseimpo()
    {
        return $this->baseimpo;
    }

    /**
     * Set texento
     *
     * @param string $texento
     * @return Saacxp
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
     * Set canceli
     *
     * @param string $canceli
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * @return Saacxp
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
     * Set canceld
     *
     * @param string $canceld
     * @return Saacxp
     */
    public function setCanceld($canceld)
    {
        $this->canceld = $canceld;

        return $this;
    }

    /**
     * Get canceld
     *
     * @return string 
     */
    public function getCanceld()
    {
        return $this->canceld;
    }

    /**
     * Set esunpago
     *
     * @param integer $esunpago
     * @return Saacxp
     */
    public function setEsunpago($esunpago)
    {
        $this->esunpago = $esunpago;

        return $this;
    }

    /**
     * Get esunpago
     *
     * @return integer 
     */
    public function getEsunpago()
    {
        return $this->esunpago;
    }

    /**
     * Set esreten
     *
     * @param integer $esreten
     * @return Saacxp
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
     * Set detalchq
     *
     * @param string $detalchq
     * @return Saacxp
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
     * Set afectacom
     *
     * @param integer $afectacom
     * @return Saacxp
     */
    public function setAfectacom($afectacom)
    {
        $this->afectacom = $afectacom;

        return $this;
    }

    /**
     * Get afectacom
     *
     * @return integer 
     */
    public function getAfectacom()
    {
        return $this->afectacom;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saacxp
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
     * @return Saacxp
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
     * Set nroopago
     *
     * @param string $nroopago
     * @return Saacxp
     */
    public function setNroopago($nroopago)
    {
        $this->nroopago = $nroopago;

        return $this;
    }

    /**
     * Get nroopago
     *
     * @return string 
     */
    public function getNroopago()
    {
        return $this->nroopago;
    }

    /**
     * Set debitos
     *
     * @param string $debitos
     * @return Saacxp
     */
    public function setDebitos($debitos)
    {
        $this->debitos = $debitos;

        return $this;
    }

    /**
     * Get debitos
     *
     * @return string 
     */
    public function getDebitos()
    {
        return $this->debitos;
    }

    /**
     * Set creditos
     *
     * @param string $creditos
     * @return Saacxp
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get creditos
     *
     * @return string 
     */
    public function getCreditos()
    {
        return $this->creditos;
    }
}
