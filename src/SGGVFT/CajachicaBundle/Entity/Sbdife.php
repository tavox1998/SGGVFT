<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdife
 *
 * @ORM\Table(name="SBDIFE")
 * @ORM\Entity
 */
class Sbdife
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codbanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOpe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nope = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nlinea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=30, nullable=true)
     */
    private $codusua;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=30, nullable=true)
     */
    private $codesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="CDCD", type="integer", nullable=false)
     */
    private $cdcd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=25, nullable=false)
     */
    private $documento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaLib", type="datetime", nullable=false)
     */
    private $fechalib;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=true)
     */
    private $beneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoPgo", type="string", length=60, nullable=false)
     */
    private $tipopgo;

    /**
     * @var string
     *
     * @ORM\Column(name="DescPgo", type="string", length=60, nullable=false)
     */
    private $descpgo;

    /**
     * @var string
     *
     * @ORM\Column(name="DctoPgo", type="string", length=60, nullable=false)
     */
    private $dctopgo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     */
    private $tipoope = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoE", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montoe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBanco", type="string", length=50, nullable=true)
     */
    private $nbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroC", type="string", length=30, nullable=true)
     */
    private $numeroc;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlazaC", type="integer", nullable=false)
     */
    private $plazac = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montoc = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaC", type="datetime", nullable=true)
     */
    private $fechac;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTarj", type="string", length=10, nullable=true)
     */
    private $codtarj;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoBT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montobt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BaseIT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $baseit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ComiT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ImpT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $impt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NetoT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $netot = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaT", type="datetime", nullable=true)
     */
    private $fechat;



    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbdife
     */
    public function setCodbanc($codbanc)
    {
        $this->codbanc = $codbanc;

        return $this;
    }

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
     * Set nope
     *
     * @param integer $nope
     * @return Sbdife
     */
    public function setNope($nope)
    {
        $this->nope = $nope;

        return $this;
    }

    /**
     * Get nope
     *
     * @return integer 
     */
    public function getNope()
    {
        return $this->nope;
    }

    /**
     * Set nlinea
     *
     * @param integer $nlinea
     * @return Sbdife
     */
    public function setNlinea($nlinea)
    {
        $this->nlinea = $nlinea;

        return $this;
    }

    /**
     * Get nlinea
     *
     * @return integer 
     */
    public function getNlinea()
    {
        return $this->nlinea;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Sbdife
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
     * Set codesta
     *
     * @param string $codesta
     * @return Sbdife
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
     * Set cdcd
     *
     * @param integer $cdcd
     * @return Sbdife
     */
    public function setCdcd($cdcd)
    {
        $this->cdcd = $cdcd;

        return $this;
    }

    /**
     * Get cdcd
     *
     * @return integer 
     */
    public function getCdcd()
    {
        return $this->cdcd;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Sbdife
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Sbdife
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechalib
     *
     * @param \DateTime $fechalib
     * @return Sbdife
     */
    public function setFechalib($fechalib)
    {
        $this->fechalib = $fechalib;

        return $this;
    }

    /**
     * Get fechalib
     *
     * @return \DateTime 
     */
    public function getFechalib()
    {
        return $this->fechalib;
    }

    /**
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return Sbdife
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set tipopgo
     *
     * @param string $tipopgo
     * @return Sbdife
     */
    public function setTipopgo($tipopgo)
    {
        $this->tipopgo = $tipopgo;

        return $this;
    }

    /**
     * Get tipopgo
     *
     * @return string 
     */
    public function getTipopgo()
    {
        return $this->tipopgo;
    }

    /**
     * Set descpgo
     *
     * @param string $descpgo
     * @return Sbdife
     */
    public function setDescpgo($descpgo)
    {
        $this->descpgo = $descpgo;

        return $this;
    }

    /**
     * Get descpgo
     *
     * @return string 
     */
    public function getDescpgo()
    {
        return $this->descpgo;
    }

    /**
     * Set dctopgo
     *
     * @param string $dctopgo
     * @return Sbdife
     */
    public function setDctopgo($dctopgo)
    {
        $this->dctopgo = $dctopgo;

        return $this;
    }

    /**
     * Get dctopgo
     *
     * @return string 
     */
    public function getDctopgo()
    {
        return $this->dctopgo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbdife
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
     * Set monto
     *
     * @param string $monto
     * @return Sbdife
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
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Sbdife
     */
    public function setTipoope($tipoope)
    {
        $this->tipoope = $tipoope;

        return $this;
    }

    /**
     * Get tipoope
     *
     * @return integer 
     */
    public function getTipoope()
    {
        return $this->tipoope;
    }

    /**
     * Set montoe
     *
     * @param string $montoe
     * @return Sbdife
     */
    public function setMontoe($montoe)
    {
        $this->montoe = $montoe;

        return $this;
    }

    /**
     * Get montoe
     *
     * @return string 
     */
    public function getMontoe()
    {
        return $this->montoe;
    }

    /**
     * Set nbanco
     *
     * @param string $nbanco
     * @return Sbdife
     */
    public function setNbanco($nbanco)
    {
        $this->nbanco = $nbanco;

        return $this;
    }

    /**
     * Get nbanco
     *
     * @return string 
     */
    public function getNbanco()
    {
        return $this->nbanco;
    }

    /**
     * Set numeroc
     *
     * @param string $numeroc
     * @return Sbdife
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
     * Set plazac
     *
     * @param integer $plazac
     * @return Sbdife
     */
    public function setPlazac($plazac)
    {
        $this->plazac = $plazac;

        return $this;
    }

    /**
     * Get plazac
     *
     * @return integer 
     */
    public function getPlazac()
    {
        return $this->plazac;
    }

    /**
     * Set montoc
     *
     * @param string $montoc
     * @return Sbdife
     */
    public function setMontoc($montoc)
    {
        $this->montoc = $montoc;

        return $this;
    }

    /**
     * Get montoc
     *
     * @return string 
     */
    public function getMontoc()
    {
        return $this->montoc;
    }

    /**
     * Set fechac
     *
     * @param \DateTime $fechac
     * @return Sbdife
     */
    public function setFechac($fechac)
    {
        $this->fechac = $fechac;

        return $this;
    }

    /**
     * Get fechac
     *
     * @return \DateTime 
     */
    public function getFechac()
    {
        return $this->fechac;
    }

    /**
     * Set codtarj
     *
     * @param string $codtarj
     * @return Sbdife
     */
    public function setCodtarj($codtarj)
    {
        $this->codtarj = $codtarj;

        return $this;
    }

    /**
     * Get codtarj
     *
     * @return string 
     */
    public function getCodtarj()
    {
        return $this->codtarj;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sbdife
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
     * Set montobt
     *
     * @param string $montobt
     * @return Sbdife
     */
    public function setMontobt($montobt)
    {
        $this->montobt = $montobt;

        return $this;
    }

    /**
     * Get montobt
     *
     * @return string 
     */
    public function getMontobt()
    {
        return $this->montobt;
    }

    /**
     * Set baseit
     *
     * @param string $baseit
     * @return Sbdife
     */
    public function setBaseit($baseit)
    {
        $this->baseit = $baseit;

        return $this;
    }

    /**
     * Get baseit
     *
     * @return string 
     */
    public function getBaseit()
    {
        return $this->baseit;
    }

    /**
     * Set comit
     *
     * @param string $comit
     * @return Sbdife
     */
    public function setComit($comit)
    {
        $this->comit = $comit;

        return $this;
    }

    /**
     * Get comit
     *
     * @return string 
     */
    public function getComit()
    {
        return $this->comit;
    }

    /**
     * Set impt
     *
     * @param string $impt
     * @return Sbdife
     */
    public function setImpt($impt)
    {
        $this->impt = $impt;

        return $this;
    }

    /**
     * Get impt
     *
     * @return string 
     */
    public function getImpt()
    {
        return $this->impt;
    }

    /**
     * Set netot
     *
     * @param string $netot
     * @return Sbdife
     */
    public function setNetot($netot)
    {
        $this->netot = $netot;

        return $this;
    }

    /**
     * Get netot
     *
     * @return string 
     */
    public function getNetot()
    {
        return $this->netot;
    }

    /**
     * Set fechat
     *
     * @param \DateTime $fechat
     * @return Sbdife
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
}
