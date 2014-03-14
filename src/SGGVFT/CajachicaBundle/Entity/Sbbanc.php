<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbbanc
 *
 * @ORM\Table(name="SBBANC", indexes={@ORM\Index(name="SBBANC_IX1", columns={"Descripcion"})})
 * @ORM\Entity
 */
class Sbbanc
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codbanc;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NoCuenta", type="string", length=20, nullable=true)
     */
    private $nocuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Sucursal", type="string", length=50, nullable=true)
     */
    private $sucursal;

    /**
     * @var integer
     *
     * @ORM\Column(name="TDC", type="integer", nullable=false)
     */
    private $tdc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CtaContab", type="string", length=25, nullable=true)
     */
    private $ctacontab;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoAct", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoC1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoc1 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaC1", type="datetime", nullable=true)
     */
    private $fechac1;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoC2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoc2 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaC2", type="datetime", nullable=true)
     */
    private $fechac2;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrxConc", type="integer", nullable=false)
     */
    private $prxconc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="InvChe", type="integer", nullable=false)
     */
    private $invche = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IDB", type="integer", nullable=false)
     */
    private $idb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=3, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="PDB", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pdb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CtaDebito", type="string", length=30, nullable=true)
     */
    private $ctadebito;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrxNDDB", type="integer", nullable=false)
     */
    private $prxnddb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaConc", type="integer", nullable=false)
     */
    private $ctaconc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RTransf", type="integer", nullable=false)
     */
    private $rtransf = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomSuc", type="string", length=40, nullable=true)
     */
    private $nomsuc;

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
     * @ORM\Column(name="Gerente", type="string", length=30, nullable=true)
     */
    private $gerente;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefonos", type="string", length=25, nullable=true)
     */
    private $telefonos;

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
     * @var integer
     *
     * @ORM\Column(name="MesesH", type="integer", nullable=false)
     */
    private $mesesh = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VNoCh", type="integer", nullable=false)
     */
    private $vnoch = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VNoDp", type="integer", nullable=false)
     */
    private $vnodp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VNoNc", type="integer", nullable=false)
     */
    private $vnonc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VNoNd", type="integer", nullable=false)
     */
    private $vnond = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrxCheque", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $prxcheque = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp0", type="integer", nullable=false)
     */
    private $ncomp0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp1", type="integer", nullable=false)
     */
    private $ncomp1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp2", type="integer", nullable=false)
     */
    private $ncomp2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp3", type="integer", nullable=false)
     */
    private $ncomp3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp4", type="integer", nullable=false)
     */
    private $ncomp4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NComp5", type="integer", nullable=false)
     */
    private $ncomp5 = '0';



    /**
     * Get codbanc
     *
     * @return string 
     */
    public function getCodbanc()
    {
        return $this->codbanc;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbbanc
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
     * Set nocuenta
     *
     * @param string $nocuenta
     * @return Sbbanc
     */
    public function setNocuenta($nocuenta)
    {
        $this->nocuenta = $nocuenta;

        return $this;
    }

    /**
     * Get nocuenta
     *
     * @return string 
     */
    public function getNocuenta()
    {
        return $this->nocuenta;
    }

    /**
     * Set sucursal
     *
     * @param string $sucursal
     * @return Sbbanc
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set tdc
     *
     * @param integer $tdc
     * @return Sbbanc
     */
    public function setTdc($tdc)
    {
        $this->tdc = $tdc;

        return $this;
    }

    /**
     * Get tdc
     *
     * @return integer 
     */
    public function getTdc()
    {
        return $this->tdc;
    }

    /**
     * Set ctacontab
     *
     * @param string $ctacontab
     * @return Sbbanc
     */
    public function setCtacontab($ctacontab)
    {
        $this->ctacontab = $ctacontab;

        return $this;
    }

    /**
     * Get ctacontab
     *
     * @return string 
     */
    public function getCtacontab()
    {
        return $this->ctacontab;
    }

    /**
     * Set saldoact
     *
     * @param string $saldoact
     * @return Sbbanc
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
     * Set saldoc1
     *
     * @param string $saldoc1
     * @return Sbbanc
     */
    public function setSaldoc1($saldoc1)
    {
        $this->saldoc1 = $saldoc1;

        return $this;
    }

    /**
     * Get saldoc1
     *
     * @return string 
     */
    public function getSaldoc1()
    {
        return $this->saldoc1;
    }

    /**
     * Set fechac1
     *
     * @param \DateTime $fechac1
     * @return Sbbanc
     */
    public function setFechac1($fechac1)
    {
        $this->fechac1 = $fechac1;

        return $this;
    }

    /**
     * Get fechac1
     *
     * @return \DateTime 
     */
    public function getFechac1()
    {
        return $this->fechac1;
    }

    /**
     * Set saldoc2
     *
     * @param string $saldoc2
     * @return Sbbanc
     */
    public function setSaldoc2($saldoc2)
    {
        $this->saldoc2 = $saldoc2;

        return $this;
    }

    /**
     * Get saldoc2
     *
     * @return string 
     */
    public function getSaldoc2()
    {
        return $this->saldoc2;
    }

    /**
     * Set fechac2
     *
     * @param \DateTime $fechac2
     * @return Sbbanc
     */
    public function setFechac2($fechac2)
    {
        $this->fechac2 = $fechac2;

        return $this;
    }

    /**
     * Get fechac2
     *
     * @return \DateTime 
     */
    public function getFechac2()
    {
        return $this->fechac2;
    }

    /**
     * Set prxconc
     *
     * @param integer $prxconc
     * @return Sbbanc
     */
    public function setPrxconc($prxconc)
    {
        $this->prxconc = $prxconc;

        return $this;
    }

    /**
     * Get prxconc
     *
     * @return integer 
     */
    public function getPrxconc()
    {
        return $this->prxconc;
    }

    /**
     * Set invche
     *
     * @param integer $invche
     * @return Sbbanc
     */
    public function setInvche($invche)
    {
        $this->invche = $invche;

        return $this;
    }

    /**
     * Get invche
     *
     * @return integer 
     */
    public function getInvche()
    {
        return $this->invche;
    }

    /**
     * Set idb
     *
     * @param integer $idb
     * @return Sbbanc
     */
    public function setIdb($idb)
    {
        $this->idb = $idb;

        return $this;
    }

    /**
     * Get idb
     *
     * @return integer 
     */
    public function getIdb()
    {
        return $this->idb;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Sbbanc
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
     * Set pdb
     *
     * @param string $pdb
     * @return Sbbanc
     */
    public function setPdb($pdb)
    {
        $this->pdb = $pdb;

        return $this;
    }

    /**
     * Get pdb
     *
     * @return string 
     */
    public function getPdb()
    {
        return $this->pdb;
    }

    /**
     * Set ctadebito
     *
     * @param string $ctadebito
     * @return Sbbanc
     */
    public function setCtadebito($ctadebito)
    {
        $this->ctadebito = $ctadebito;

        return $this;
    }

    /**
     * Get ctadebito
     *
     * @return string 
     */
    public function getCtadebito()
    {
        return $this->ctadebito;
    }

    /**
     * Set prxnddb
     *
     * @param integer $prxnddb
     * @return Sbbanc
     */
    public function setPrxnddb($prxnddb)
    {
        $this->prxnddb = $prxnddb;

        return $this;
    }

    /**
     * Get prxnddb
     *
     * @return integer 
     */
    public function getPrxnddb()
    {
        return $this->prxnddb;
    }

    /**
     * Set ctaconc
     *
     * @param integer $ctaconc
     * @return Sbbanc
     */
    public function setCtaconc($ctaconc)
    {
        $this->ctaconc = $ctaconc;

        return $this;
    }

    /**
     * Get ctaconc
     *
     * @return integer 
     */
    public function getCtaconc()
    {
        return $this->ctaconc;
    }

    /**
     * Set rtransf
     *
     * @param integer $rtransf
     * @return Sbbanc
     */
    public function setRtransf($rtransf)
    {
        $this->rtransf = $rtransf;

        return $this;
    }

    /**
     * Get rtransf
     *
     * @return integer 
     */
    public function getRtransf()
    {
        return $this->rtransf;
    }

    /**
     * Set nomsuc
     *
     * @param string $nomsuc
     * @return Sbbanc
     */
    public function setNomsuc($nomsuc)
    {
        $this->nomsuc = $nomsuc;

        return $this;
    }

    /**
     * Get nomsuc
     *
     * @return string 
     */
    public function getNomsuc()
    {
        return $this->nomsuc;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     * @return Sbbanc
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
     * @return Sbbanc
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
     * @return Sbbanc
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
     * @return Sbbanc
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
     * @return Sbbanc
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
     * Set direccion1
     *
     * @param string $direccion1
     * @return Sbbanc
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
     * @return Sbbanc
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
     * Set gerente
     *
     * @param string $gerente
     * @return Sbbanc
     */
    public function setGerente($gerente)
    {
        $this->gerente = $gerente;

        return $this;
    }

    /**
     * Get gerente
     *
     * @return string 
     */
    public function getGerente()
    {
        return $this->gerente;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     * @return Sbbanc
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
     * Set fax
     *
     * @param string $fax
     * @return Sbbanc
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
     * @return Sbbanc
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
     * @return Sbbanc
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
     * Set mesesh
     *
     * @param integer $mesesh
     * @return Sbbanc
     */
    public function setMesesh($mesesh)
    {
        $this->mesesh = $mesesh;

        return $this;
    }

    /**
     * Get mesesh
     *
     * @return integer 
     */
    public function getMesesh()
    {
        return $this->mesesh;
    }

    /**
     * Set vnoch
     *
     * @param integer $vnoch
     * @return Sbbanc
     */
    public function setVnoch($vnoch)
    {
        $this->vnoch = $vnoch;

        return $this;
    }

    /**
     * Get vnoch
     *
     * @return integer 
     */
    public function getVnoch()
    {
        return $this->vnoch;
    }

    /**
     * Set vnodp
     *
     * @param integer $vnodp
     * @return Sbbanc
     */
    public function setVnodp($vnodp)
    {
        $this->vnodp = $vnodp;

        return $this;
    }

    /**
     * Get vnodp
     *
     * @return integer 
     */
    public function getVnodp()
    {
        return $this->vnodp;
    }

    /**
     * Set vnonc
     *
     * @param integer $vnonc
     * @return Sbbanc
     */
    public function setVnonc($vnonc)
    {
        $this->vnonc = $vnonc;

        return $this;
    }

    /**
     * Get vnonc
     *
     * @return integer 
     */
    public function getVnonc()
    {
        return $this->vnonc;
    }

    /**
     * Set vnond
     *
     * @param integer $vnond
     * @return Sbbanc
     */
    public function setVnond($vnond)
    {
        $this->vnond = $vnond;

        return $this;
    }

    /**
     * Get vnond
     *
     * @return integer 
     */
    public function getVnond()
    {
        return $this->vnond;
    }

    /**
     * Set prxcheque
     *
     * @param string $prxcheque
     * @return Sbbanc
     */
    public function setPrxcheque($prxcheque)
    {
        $this->prxcheque = $prxcheque;

        return $this;
    }

    /**
     * Get prxcheque
     *
     * @return string 
     */
    public function getPrxcheque()
    {
        return $this->prxcheque;
    }

    /**
     * Set ncomp0
     *
     * @param integer $ncomp0
     * @return Sbbanc
     */
    public function setNcomp0($ncomp0)
    {
        $this->ncomp0 = $ncomp0;

        return $this;
    }

    /**
     * Get ncomp0
     *
     * @return integer 
     */
    public function getNcomp0()
    {
        return $this->ncomp0;
    }

    /**
     * Set ncomp1
     *
     * @param integer $ncomp1
     * @return Sbbanc
     */
    public function setNcomp1($ncomp1)
    {
        $this->ncomp1 = $ncomp1;

        return $this;
    }

    /**
     * Get ncomp1
     *
     * @return integer 
     */
    public function getNcomp1()
    {
        return $this->ncomp1;
    }

    /**
     * Set ncomp2
     *
     * @param integer $ncomp2
     * @return Sbbanc
     */
    public function setNcomp2($ncomp2)
    {
        $this->ncomp2 = $ncomp2;

        return $this;
    }

    /**
     * Get ncomp2
     *
     * @return integer 
     */
    public function getNcomp2()
    {
        return $this->ncomp2;
    }

    /**
     * Set ncomp3
     *
     * @param integer $ncomp3
     * @return Sbbanc
     */
    public function setNcomp3($ncomp3)
    {
        $this->ncomp3 = $ncomp3;

        return $this;
    }

    /**
     * Get ncomp3
     *
     * @return integer 
     */
    public function getNcomp3()
    {
        return $this->ncomp3;
    }

    /**
     * Set ncomp4
     *
     * @param integer $ncomp4
     * @return Sbbanc
     */
    public function setNcomp4($ncomp4)
    {
        $this->ncomp4 = $ncomp4;

        return $this;
    }

    /**
     * Get ncomp4
     *
     * @return integer 
     */
    public function getNcomp4()
    {
        return $this->ncomp4;
    }

    /**
     * Set ncomp5
     *
     * @param integer $ncomp5
     * @return Sbbanc
     */
    public function setNcomp5($ncomp5)
    {
        $this->ncomp5 = $ncomp5;

        return $this;
    }

    /**
     * Get ncomp5
     *
     * @return integer 
     */
    public function getNcomp5()
    {
        return $this->ncomp5;
    }
}
