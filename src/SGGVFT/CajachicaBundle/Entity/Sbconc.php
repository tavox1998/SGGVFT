<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbconc
 *
 * @ORM\Table(name="SBCONC")
 * @ORM\Entity
 */
class Sbconc
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
     * @ORM\Column(name="NoConc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $noconc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=30, nullable=true)
     */
    private $codusua;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NoCuenta", type="string", length=20, nullable=true)
     */
    private $nocuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaI", type="datetime", nullable=false)
     */
    private $fechai;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoI", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoDepoC", type="integer", nullable=false)
     */
    private $nodepoc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCredC", type="integer", nullable=false)
     */
    private $nocredc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCheqC", type="integer", nullable=false)
     */
    private $nocheqc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoNDebC", type="integer", nullable=false)
     */
    private $nondebc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtDepoC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtdepoc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtCredC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtcredc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtCheqC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtcheqc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtNDebC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtndebc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoDepoT", type="integer", nullable=false)
     */
    private $nodepot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCredT", type="integer", nullable=false)
     */
    private $nocredt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoCheqT", type="integer", nullable=false)
     */
    private $nocheqt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NoNDebT", type="integer", nullable=false)
     */
    private $nondebt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtDepoT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtdepot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtCredT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtcredt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtCheqT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtcheqt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtNDebT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtndebt = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaF", type="datetime", nullable=false)
     */
    private $fechaf;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoF", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldof = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoLib", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldolib = '0';



    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbconc
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
     * Set noconc
     *
     * @param integer $noconc
     * @return Sbconc
     */
    public function setNoconc($noconc)
    {
        $this->noconc = $noconc;

        return $this;
    }

    /**
     * Get noconc
     *
     * @return integer 
     */
    public function getNoconc()
    {
        return $this->noconc;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Sbconc
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbconc
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
     * @return Sbconc
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
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Sbconc
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
     * Set saldoi
     *
     * @param string $saldoi
     * @return Sbconc
     */
    public function setSaldoi($saldoi)
    {
        $this->saldoi = $saldoi;

        return $this;
    }

    /**
     * Get saldoi
     *
     * @return string 
     */
    public function getSaldoi()
    {
        return $this->saldoi;
    }

    /**
     * Set nodepoc
     *
     * @param integer $nodepoc
     * @return Sbconc
     */
    public function setNodepoc($nodepoc)
    {
        $this->nodepoc = $nodepoc;

        return $this;
    }

    /**
     * Get nodepoc
     *
     * @return integer 
     */
    public function getNodepoc()
    {
        return $this->nodepoc;
    }

    /**
     * Set nocredc
     *
     * @param integer $nocredc
     * @return Sbconc
     */
    public function setNocredc($nocredc)
    {
        $this->nocredc = $nocredc;

        return $this;
    }

    /**
     * Get nocredc
     *
     * @return integer 
     */
    public function getNocredc()
    {
        return $this->nocredc;
    }

    /**
     * Set nocheqc
     *
     * @param integer $nocheqc
     * @return Sbconc
     */
    public function setNocheqc($nocheqc)
    {
        $this->nocheqc = $nocheqc;

        return $this;
    }

    /**
     * Get nocheqc
     *
     * @return integer 
     */
    public function getNocheqc()
    {
        return $this->nocheqc;
    }

    /**
     * Set nondebc
     *
     * @param integer $nondebc
     * @return Sbconc
     */
    public function setNondebc($nondebc)
    {
        $this->nondebc = $nondebc;

        return $this;
    }

    /**
     * Get nondebc
     *
     * @return integer 
     */
    public function getNondebc()
    {
        return $this->nondebc;
    }

    /**
     * Set mtdepoc
     *
     * @param string $mtdepoc
     * @return Sbconc
     */
    public function setMtdepoc($mtdepoc)
    {
        $this->mtdepoc = $mtdepoc;

        return $this;
    }

    /**
     * Get mtdepoc
     *
     * @return string 
     */
    public function getMtdepoc()
    {
        return $this->mtdepoc;
    }

    /**
     * Set mtcredc
     *
     * @param string $mtcredc
     * @return Sbconc
     */
    public function setMtcredc($mtcredc)
    {
        $this->mtcredc = $mtcredc;

        return $this;
    }

    /**
     * Get mtcredc
     *
     * @return string 
     */
    public function getMtcredc()
    {
        return $this->mtcredc;
    }

    /**
     * Set mtcheqc
     *
     * @param string $mtcheqc
     * @return Sbconc
     */
    public function setMtcheqc($mtcheqc)
    {
        $this->mtcheqc = $mtcheqc;

        return $this;
    }

    /**
     * Get mtcheqc
     *
     * @return string 
     */
    public function getMtcheqc()
    {
        return $this->mtcheqc;
    }

    /**
     * Set mtndebc
     *
     * @param string $mtndebc
     * @return Sbconc
     */
    public function setMtndebc($mtndebc)
    {
        $this->mtndebc = $mtndebc;

        return $this;
    }

    /**
     * Get mtndebc
     *
     * @return string 
     */
    public function getMtndebc()
    {
        return $this->mtndebc;
    }

    /**
     * Set nodepot
     *
     * @param integer $nodepot
     * @return Sbconc
     */
    public function setNodepot($nodepot)
    {
        $this->nodepot = $nodepot;

        return $this;
    }

    /**
     * Get nodepot
     *
     * @return integer 
     */
    public function getNodepot()
    {
        return $this->nodepot;
    }

    /**
     * Set nocredt
     *
     * @param integer $nocredt
     * @return Sbconc
     */
    public function setNocredt($nocredt)
    {
        $this->nocredt = $nocredt;

        return $this;
    }

    /**
     * Get nocredt
     *
     * @return integer 
     */
    public function getNocredt()
    {
        return $this->nocredt;
    }

    /**
     * Set nocheqt
     *
     * @param integer $nocheqt
     * @return Sbconc
     */
    public function setNocheqt($nocheqt)
    {
        $this->nocheqt = $nocheqt;

        return $this;
    }

    /**
     * Get nocheqt
     *
     * @return integer 
     */
    public function getNocheqt()
    {
        return $this->nocheqt;
    }

    /**
     * Set nondebt
     *
     * @param integer $nondebt
     * @return Sbconc
     */
    public function setNondebt($nondebt)
    {
        $this->nondebt = $nondebt;

        return $this;
    }

    /**
     * Get nondebt
     *
     * @return integer 
     */
    public function getNondebt()
    {
        return $this->nondebt;
    }

    /**
     * Set mtdepot
     *
     * @param string $mtdepot
     * @return Sbconc
     */
    public function setMtdepot($mtdepot)
    {
        $this->mtdepot = $mtdepot;

        return $this;
    }

    /**
     * Get mtdepot
     *
     * @return string 
     */
    public function getMtdepot()
    {
        return $this->mtdepot;
    }

    /**
     * Set mtcredt
     *
     * @param string $mtcredt
     * @return Sbconc
     */
    public function setMtcredt($mtcredt)
    {
        $this->mtcredt = $mtcredt;

        return $this;
    }

    /**
     * Get mtcredt
     *
     * @return string 
     */
    public function getMtcredt()
    {
        return $this->mtcredt;
    }

    /**
     * Set mtcheqt
     *
     * @param string $mtcheqt
     * @return Sbconc
     */
    public function setMtcheqt($mtcheqt)
    {
        $this->mtcheqt = $mtcheqt;

        return $this;
    }

    /**
     * Get mtcheqt
     *
     * @return string 
     */
    public function getMtcheqt()
    {
        return $this->mtcheqt;
    }

    /**
     * Set mtndebt
     *
     * @param string $mtndebt
     * @return Sbconc
     */
    public function setMtndebt($mtndebt)
    {
        $this->mtndebt = $mtndebt;

        return $this;
    }

    /**
     * Get mtndebt
     *
     * @return string 
     */
    public function getMtndebt()
    {
        return $this->mtndebt;
    }

    /**
     * Set fechaf
     *
     * @param \DateTime $fechaf
     * @return Sbconc
     */
    public function setFechaf($fechaf)
    {
        $this->fechaf = $fechaf;

        return $this;
    }

    /**
     * Get fechaf
     *
     * @return \DateTime 
     */
    public function getFechaf()
    {
        return $this->fechaf;
    }

    /**
     * Set saldof
     *
     * @param string $saldof
     * @return Sbconc
     */
    public function setSaldof($saldof)
    {
        $this->saldof = $saldof;

        return $this;
    }

    /**
     * Get saldof
     *
     * @return string 
     */
    public function getSaldof()
    {
        return $this->saldof;
    }

    /**
     * Set saldolib
     *
     * @param string $saldolib
     * @return Sbconc
     */
    public function setSaldolib($saldolib)
    {
        $this->saldolib = $saldolib;

        return $this;
    }

    /**
     * Get saldolib
     *
     * @return string 
     */
    public function getSaldolib()
    {
        return $this->saldolib;
    }
}
