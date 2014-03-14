<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbctas
 *
 * @ORM\Table(name="SBCTAS", indexes={@ORM\Index(name="SBCTAS_IX1", columns={"Descripcion"})})
 * @ORM\Entity
 */
class Sbctas
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodCta", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IEA", type="integer", nullable=false)
     */
    private $iea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ECG", type="integer", nullable=false)
     */
    private $ecg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Grupo", type="string", length=30, nullable=true)
     */
    private $grupo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UFecha", type="datetime", nullable=true)
     */
    private $ufecha;

    /**
     * @var string
     *
     * @ORM\Column(name="UDcto", type="string", length=25, nullable=true)
     */
    private $udcto;

    /**
     * @var string
     *
     * @ORM\Column(name="UBanco", type="string", length=30, nullable=true)
     */
    private $ubanco;

    /**
     * @var string
     *
     * @ORM\Column(name="UBenef", type="string", length=50, nullable=true)
     */
    private $ubenef;

    /**
     * @var string
     *
     * @ORM\Column(name="UComent1", type="string", length=50, nullable=true)
     */
    private $ucoment1;

    /**
     * @var string
     *
     * @ORM\Column(name="UComent2", type="string", length=50, nullable=true)
     */
    private $ucoment2;

    /**
     * @var string
     *
     * @ORM\Column(name="UMonto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $umonto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsBanco", type="integer", nullable=false)
     */
    private $esbanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TDC", type="integer", nullable=false)
     */
    private $tdc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoAct", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tercero", type="string", length=30, nullable=true)
     */
    private $tercero;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCentro", type="string", length=30, nullable=true)
     */
    private $codcentro;

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaCF", type="integer", nullable=false)
     */
    private $ctacf = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaMov", type="integer", nullable=false)
     */
    private $ctamov = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaTer", type="integer", nullable=false)
     */
    private $ctater = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaCC", type="integer", nullable=false)
     */
    private $ctacc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CtaBase", type="integer", nullable=false)
     */
    private $ctabase = '0';



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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbctas
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
     * Set iea
     *
     * @param integer $iea
     * @return Sbctas
     */
    public function setIea($iea)
    {
        $this->iea = $iea;

        return $this;
    }

    /**
     * Get iea
     *
     * @return integer 
     */
    public function getIea()
    {
        return $this->iea;
    }

    /**
     * Set ecg
     *
     * @param integer $ecg
     * @return Sbctas
     */
    public function setEcg($ecg)
    {
        $this->ecg = $ecg;

        return $this;
    }

    /**
     * Get ecg
     *
     * @return integer 
     */
    public function getEcg()
    {
        return $this->ecg;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     * @return Sbctas
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set ufecha
     *
     * @param \DateTime $ufecha
     * @return Sbctas
     */
    public function setUfecha($ufecha)
    {
        $this->ufecha = $ufecha;

        return $this;
    }

    /**
     * Get ufecha
     *
     * @return \DateTime 
     */
    public function getUfecha()
    {
        return $this->ufecha;
    }

    /**
     * Set udcto
     *
     * @param string $udcto
     * @return Sbctas
     */
    public function setUdcto($udcto)
    {
        $this->udcto = $udcto;

        return $this;
    }

    /**
     * Get udcto
     *
     * @return string 
     */
    public function getUdcto()
    {
        return $this->udcto;
    }

    /**
     * Set ubanco
     *
     * @param string $ubanco
     * @return Sbctas
     */
    public function setUbanco($ubanco)
    {
        $this->ubanco = $ubanco;

        return $this;
    }

    /**
     * Get ubanco
     *
     * @return string 
     */
    public function getUbanco()
    {
        return $this->ubanco;
    }

    /**
     * Set ubenef
     *
     * @param string $ubenef
     * @return Sbctas
     */
    public function setUbenef($ubenef)
    {
        $this->ubenef = $ubenef;

        return $this;
    }

    /**
     * Get ubenef
     *
     * @return string 
     */
    public function getUbenef()
    {
        return $this->ubenef;
    }

    /**
     * Set ucoment1
     *
     * @param string $ucoment1
     * @return Sbctas
     */
    public function setUcoment1($ucoment1)
    {
        $this->ucoment1 = $ucoment1;

        return $this;
    }

    /**
     * Get ucoment1
     *
     * @return string 
     */
    public function getUcoment1()
    {
        return $this->ucoment1;
    }

    /**
     * Set ucoment2
     *
     * @param string $ucoment2
     * @return Sbctas
     */
    public function setUcoment2($ucoment2)
    {
        $this->ucoment2 = $ucoment2;

        return $this;
    }

    /**
     * Get ucoment2
     *
     * @return string 
     */
    public function getUcoment2()
    {
        return $this->ucoment2;
    }

    /**
     * Set umonto
     *
     * @param string $umonto
     * @return Sbctas
     */
    public function setUmonto($umonto)
    {
        $this->umonto = $umonto;

        return $this;
    }

    /**
     * Get umonto
     *
     * @return string 
     */
    public function getUmonto()
    {
        return $this->umonto;
    }

    /**
     * Set esbanco
     *
     * @param integer $esbanco
     * @return Sbctas
     */
    public function setEsbanco($esbanco)
    {
        $this->esbanco = $esbanco;

        return $this;
    }

    /**
     * Get esbanco
     *
     * @return integer 
     */
    public function getEsbanco()
    {
        return $this->esbanco;
    }

    /**
     * Set tdc
     *
     * @param integer $tdc
     * @return Sbctas
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
     * Set saldoact
     *
     * @param string $saldoact
     * @return Sbctas
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
     * Set tercero
     *
     * @param string $tercero
     * @return Sbctas
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
     * Set codcentro
     *
     * @param string $codcentro
     * @return Sbctas
     */
    public function setCodcentro($codcentro)
    {
        $this->codcentro = $codcentro;

        return $this;
    }

    /**
     * Get codcentro
     *
     * @return string 
     */
    public function getCodcentro()
    {
        return $this->codcentro;
    }

    /**
     * Set ctacf
     *
     * @param integer $ctacf
     * @return Sbctas
     */
    public function setCtacf($ctacf)
    {
        $this->ctacf = $ctacf;

        return $this;
    }

    /**
     * Get ctacf
     *
     * @return integer 
     */
    public function getCtacf()
    {
        return $this->ctacf;
    }

    /**
     * Set ctamov
     *
     * @param integer $ctamov
     * @return Sbctas
     */
    public function setCtamov($ctamov)
    {
        $this->ctamov = $ctamov;

        return $this;
    }

    /**
     * Get ctamov
     *
     * @return integer 
     */
    public function getCtamov()
    {
        return $this->ctamov;
    }

    /**
     * Set ctater
     *
     * @param integer $ctater
     * @return Sbctas
     */
    public function setCtater($ctater)
    {
        $this->ctater = $ctater;

        return $this;
    }

    /**
     * Get ctater
     *
     * @return integer 
     */
    public function getCtater()
    {
        return $this->ctater;
    }

    /**
     * Set ctacc
     *
     * @param integer $ctacc
     * @return Sbctas
     */
    public function setCtacc($ctacc)
    {
        $this->ctacc = $ctacc;

        return $this;
    }

    /**
     * Get ctacc
     *
     * @return integer 
     */
    public function getCtacc()
    {
        return $this->ctacc;
    }

    /**
     * Set ctabase
     *
     * @param integer $ctabase
     * @return Sbctas
     */
    public function setCtabase($ctabase)
    {
        $this->ctabase = $ctabase;

        return $this;
    }

    /**
     * Get ctabase
     *
     * @return integer 
     */
    public function getCtabase()
    {
        return $this->ctabase;
    }
}
