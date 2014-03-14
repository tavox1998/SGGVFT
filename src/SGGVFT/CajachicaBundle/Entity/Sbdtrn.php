<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdtrn
 *
 * @ORM\Table(name="SBDTRN", indexes={@ORM\Index(name="SBDTRN_IX1", columns={"CodCta", "Fecha", "CodBanc"}), @ORM\Index(name="SBDTRN_IX2", columns={"NOpe", "Fecha"})})
 * @ORM\Entity
 */
class Sbdtrn
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
     * @ORM\Column(name="CodCta", type="string", length=30, nullable=true)
     */
    private $codcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsTransf", type="integer", nullable=false)
     */
    private $estransf = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsCuenta", type="integer", nullable=false)
     */
    private $escuenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=30, nullable=true)
     */
    private $codusua;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=true)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

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
     * @var integer
     *
     * @ORM\Column(name="EncOpe", type="integer", nullable=false)
     */
    private $encope = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Origen", type="string", length=35, nullable=true)
     */
    private $origen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DH", type="integer", nullable=false)
     */
    private $dh = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NMo", type="integer", nullable=false)
     */
    private $nmo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BaseTr", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $basetr = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDb", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCr", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocr = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Consolidado", type="integer", nullable=false)
     */
    private $consolidado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FConsolidado", type="datetime", nullable=true)
     */
    private $fconsolidado;

    /**
     * @var integer
     *
     * @ORM\Column(name="SiCentro", type="integer", nullable=false)
     */
    private $sicentro = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SiTercero", type="integer", nullable=false)
     */
    private $sitercero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodCenCto", type="string", length=30, nullable=true)
     */
    private $codcencto;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTercero", type="string", length=30, nullable=true)
     */
    private $codtercero;

    /**
     * @var string
     *
     * @ORM\Column(name="Tercero", type="string", length=50, nullable=true)
     */
    private $tercero;

    /**
     * @var string
     *
     * @ORM\Column(name="FlujoE", type="decimal", precision=28, scale=3, nullable=true)
     */
    private $flujoe;



    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbdtrn
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
     * @return Sbdtrn
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
     * @return Sbdtrn
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
     * Set codcta
     *
     * @param string $codcta
     * @return Sbdtrn
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
     * Set estransf
     *
     * @param integer $estransf
     * @return Sbdtrn
     */
    public function setEstransf($estransf)
    {
        $this->estransf = $estransf;

        return $this;
    }

    /**
     * Get estransf
     *
     * @return integer 
     */
    public function getEstransf()
    {
        return $this->estransf;
    }

    /**
     * Set escuenta
     *
     * @param integer $escuenta
     * @return Sbdtrn
     */
    public function setEscuenta($escuenta)
    {
        $this->escuenta = $escuenta;

        return $this;
    }

    /**
     * Get escuenta
     *
     * @return integer 
     */
    public function getEscuenta()
    {
        return $this->escuenta;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Sbdtrn
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sbdtrn
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
     * Set codoper
     *
     * @param string $codoper
     * @return Sbdtrn
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
     * Set codesta
     *
     * @param string $codesta
     * @return Sbdtrn
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
     * @return Sbdtrn
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
     * Set encope
     *
     * @param integer $encope
     * @return Sbdtrn
     */
    public function setEncope($encope)
    {
        $this->encope = $encope;

        return $this;
    }

    /**
     * Get encope
     *
     * @return integer 
     */
    public function getEncope()
    {
        return $this->encope;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Sbdtrn
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbdtrn
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
     * Set origen
     *
     * @param string $origen
     * @return Sbdtrn
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string 
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Sbdtrn
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
     * Set dh
     *
     * @param integer $dh
     * @return Sbdtrn
     */
    public function setDh($dh)
    {
        $this->dh = $dh;

        return $this;
    }

    /**
     * Get dh
     *
     * @return integer 
     */
    public function getDh()
    {
        return $this->dh;
    }

    /**
     * Set nmo
     *
     * @param integer $nmo
     * @return Sbdtrn
     */
    public function setNmo($nmo)
    {
        $this->nmo = $nmo;

        return $this;
    }

    /**
     * Get nmo
     *
     * @return integer 
     */
    public function getNmo()
    {
        return $this->nmo;
    }

    /**
     * Set basetr
     *
     * @param string $basetr
     * @return Sbdtrn
     */
    public function setBasetr($basetr)
    {
        $this->basetr = $basetr;

        return $this;
    }

    /**
     * Get basetr
     *
     * @return string 
     */
    public function getBasetr()
    {
        return $this->basetr;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbdtrn
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
     * Set mtodb
     *
     * @param string $mtodb
     * @return Sbdtrn
     */
    public function setMtodb($mtodb)
    {
        $this->mtodb = $mtodb;

        return $this;
    }

    /**
     * Get mtodb
     *
     * @return string 
     */
    public function getMtodb()
    {
        return $this->mtodb;
    }

    /**
     * Set mtocr
     *
     * @param string $mtocr
     * @return Sbdtrn
     */
    public function setMtocr($mtocr)
    {
        $this->mtocr = $mtocr;

        return $this;
    }

    /**
     * Get mtocr
     *
     * @return string 
     */
    public function getMtocr()
    {
        return $this->mtocr;
    }

    /**
     * Set consolidado
     *
     * @param integer $consolidado
     * @return Sbdtrn
     */
    public function setConsolidado($consolidado)
    {
        $this->consolidado = $consolidado;

        return $this;
    }

    /**
     * Get consolidado
     *
     * @return integer 
     */
    public function getConsolidado()
    {
        return $this->consolidado;
    }

    /**
     * Set fconsolidado
     *
     * @param \DateTime $fconsolidado
     * @return Sbdtrn
     */
    public function setFconsolidado($fconsolidado)
    {
        $this->fconsolidado = $fconsolidado;

        return $this;
    }

    /**
     * Get fconsolidado
     *
     * @return \DateTime 
     */
    public function getFconsolidado()
    {
        return $this->fconsolidado;
    }

    /**
     * Set sicentro
     *
     * @param integer $sicentro
     * @return Sbdtrn
     */
    public function setSicentro($sicentro)
    {
        $this->sicentro = $sicentro;

        return $this;
    }

    /**
     * Get sicentro
     *
     * @return integer 
     */
    public function getSicentro()
    {
        return $this->sicentro;
    }

    /**
     * Set sitercero
     *
     * @param integer $sitercero
     * @return Sbdtrn
     */
    public function setSitercero($sitercero)
    {
        $this->sitercero = $sitercero;

        return $this;
    }

    /**
     * Get sitercero
     *
     * @return integer 
     */
    public function getSitercero()
    {
        return $this->sitercero;
    }

    /**
     * Set codcencto
     *
     * @param string $codcencto
     * @return Sbdtrn
     */
    public function setCodcencto($codcencto)
    {
        $this->codcencto = $codcencto;

        return $this;
    }

    /**
     * Get codcencto
     *
     * @return string 
     */
    public function getCodcencto()
    {
        return $this->codcencto;
    }

    /**
     * Set codtercero
     *
     * @param string $codtercero
     * @return Sbdtrn
     */
    public function setCodtercero($codtercero)
    {
        $this->codtercero = $codtercero;

        return $this;
    }

    /**
     * Get codtercero
     *
     * @return string 
     */
    public function getCodtercero()
    {
        return $this->codtercero;
    }

    /**
     * Set tercero
     *
     * @param string $tercero
     * @return Sbdtrn
     */
    public function setTercero($tercero)
    {
        $this->tercero = $tercero;

        return $this;
    }

    /**
     * Get tercero
     *
     * @return string 
     */
    public function getTercero()
    {
        return $this->tercero;
    }

    /**
     * Set flujoe
     *
     * @param string $flujoe
     * @return Sbdtrn
     */
    public function setFlujoe($flujoe)
    {
        $this->flujoe = $flujoe;

        return $this;
    }

    /**
     * Get flujoe
     *
     * @return string 
     */
    public function getFlujoe()
    {
        return $this->flujoe;
    }
}
