<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saordt
 *
 * @ORM\Table(name="SAORDT")
 * @ORM\Entity
 */
class Saordt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TipoTra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipotra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroK", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerok;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codubic;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoOpI", type="string", length=1, nullable=true)
     */
    private $tipoopi;

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
     * @var integer
     *
     * @ORM\Column(name="TipoCli", type="integer", nullable=false)
     */
    private $tipocli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
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
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax4", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax5", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsExPickup", type="integer", nullable=false)
     */
    private $esexpickup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoPago", type="string", length=10, nullable=true)
     */
    private $tipopago;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripPago", type="string", length=40, nullable=true)
     */
    private $descrippago;

    /**
     * @var string
     *
     * @ORM\Column(name="Courier", type="string", length=40, nullable=true)
     */
    private $courier;



    /**
     * Set tipotra
     *
     * @param integer $tipotra
     * @return Saordt
     */
    public function setTipotra($tipotra)
    {
        $this->tipotra = $tipotra;

        return $this;
    }

    /**
     * Get tipotra
     *
     * @return integer 
     */
    public function getTipotra()
    {
        return $this->tipotra;
    }

    /**
     * Set numerok
     *
     * @param string $numerok
     * @return Saordt
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
     * Set codubic
     *
     * @param string $codubic
     * @return Saordt
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
     * Set status
     *
     * @param integer $status
     * @return Saordt
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipoopi
     *
     * @param string $tipoopi
     * @return Saordt
     */
    public function setTipoopi($tipoopi)
    {
        $this->tipoopi = $tipoopi;

        return $this;
    }

    /**
     * Get tipoopi
     *
     * @return string 
     */
    public function getTipoopi()
    {
        return $this->tipoopi;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saordt
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
     * @return Saordt
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
     * Set tipocli
     *
     * @param integer $tipocli
     * @return Saordt
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
     * Set descrip
     *
     * @param string $descrip
     * @return Saordt
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
     * @return Saordt
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
     * @return Saordt
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
     * @return Saordt
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
     * Set telef
     *
     * @param string $telef
     * @return Saordt
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
     * @return Saordt
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
     * @return Saordt
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
     * Set descto
     *
     * @param string $descto
     * @return Saordt
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
     * Set mtotax1
     *
     * @param string $mtotax1
     * @return Saordt
     */
    public function setMtotax1($mtotax1)
    {
        $this->mtotax1 = $mtotax1;

        return $this;
    }

    /**
     * Get mtotax1
     *
     * @return string 
     */
    public function getMtotax1()
    {
        return $this->mtotax1;
    }

    /**
     * Set mtotax2
     *
     * @param string $mtotax2
     * @return Saordt
     */
    public function setMtotax2($mtotax2)
    {
        $this->mtotax2 = $mtotax2;

        return $this;
    }

    /**
     * Get mtotax2
     *
     * @return string 
     */
    public function getMtotax2()
    {
        return $this->mtotax2;
    }

    /**
     * Set mtotax3
     *
     * @param string $mtotax3
     * @return Saordt
     */
    public function setMtotax3($mtotax3)
    {
        $this->mtotax3 = $mtotax3;

        return $this;
    }

    /**
     * Get mtotax3
     *
     * @return string 
     */
    public function getMtotax3()
    {
        return $this->mtotax3;
    }

    /**
     * Set mtotax4
     *
     * @param string $mtotax4
     * @return Saordt
     */
    public function setMtotax4($mtotax4)
    {
        $this->mtotax4 = $mtotax4;

        return $this;
    }

    /**
     * Get mtotax4
     *
     * @return string 
     */
    public function getMtotax4()
    {
        return $this->mtotax4;
    }

    /**
     * Set mtotax5
     *
     * @param string $mtotax5
     * @return Saordt
     */
    public function setMtotax5($mtotax5)
    {
        $this->mtotax5 = $mtotax5;

        return $this;
    }

    /**
     * Get mtotax5
     *
     * @return string 
     */
    public function getMtotax5()
    {
        return $this->mtotax5;
    }

    /**
     * Set esexpickup
     *
     * @param integer $esexpickup
     * @return Saordt
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
     * Set tipopago
     *
     * @param string $tipopago
     * @return Saordt
     */
    public function setTipopago($tipopago)
    {
        $this->tipopago = $tipopago;

        return $this;
    }

    /**
     * Get tipopago
     *
     * @return string 
     */
    public function getTipopago()
    {
        return $this->tipopago;
    }

    /**
     * Set descrippago
     *
     * @param string $descrippago
     * @return Saordt
     */
    public function setDescrippago($descrippago)
    {
        $this->descrippago = $descrippago;

        return $this;
    }

    /**
     * Get descrippago
     *
     * @return string 
     */
    public function getDescrippago()
    {
        return $this->descrippago;
    }

    /**
     * Set courier
     *
     * @param string $courier
     * @return Saordt
     */
    public function setCourier($courier)
    {
        $this->courier = $courier;

        return $this;
    }

    /**
     * Get courier
     *
     * @return string 
     */
    public function getCourier()
    {
        return $this->courier;
    }
}
