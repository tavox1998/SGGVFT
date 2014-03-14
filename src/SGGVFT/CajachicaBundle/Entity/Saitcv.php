<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitcv
 *
 * @ORM\Table(name="SAITCV")
 * @ORM\Entity
 */
class Saitcv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodConv", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codconv;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coditem;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoCnv", type="smallint", nullable=false)
     */
    private $tipocnv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Frecuencia", type="integer", nullable=false)
     */
    private $frecuencia = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUV", type="datetime", nullable=true)
     */
    private $fechauv;

    /**
     * @var integer
     *
     * @ORM\Column(name="Medida", type="smallint", nullable=false)
     */
    private $medida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoMax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montomax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Desde", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $desde = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Hasta", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $hasta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoPVP", type="smallint", nullable=false)
     */
    private $tipopvp = '0';



    /**
     * Set codconv
     *
     * @param string $codconv
     * @return Saitcv
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saitcv
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
     * Set coditem
     *
     * @param string $coditem
     * @return Saitcv
     */
    public function setCoditem($coditem)
    {
        $this->coditem = $coditem;

        return $this;
    }

    /**
     * Get coditem
     *
     * @return string 
     */
    public function getCoditem()
    {
        return $this->coditem;
    }

    /**
     * Set tipocnv
     *
     * @param integer $tipocnv
     * @return Saitcv
     */
    public function setTipocnv($tipocnv)
    {
        $this->tipocnv = $tipocnv;

        return $this;
    }

    /**
     * Get tipocnv
     *
     * @return integer 
     */
    public function getTipocnv()
    {
        return $this->tipocnv;
    }

    /**
     * Set frecuencia
     *
     * @param integer $frecuencia
     * @return Saitcv
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;

        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return integer 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * Set fechauv
     *
     * @param \DateTime $fechauv
     * @return Saitcv
     */
    public function setFechauv($fechauv)
    {
        $this->fechauv = $fechauv;

        return $this;
    }

    /**
     * Get fechauv
     *
     * @return \DateTime 
     */
    public function getFechauv()
    {
        return $this->fechauv;
    }

    /**
     * Set medida
     *
     * @param integer $medida
     * @return Saitcv
     */
    public function setMedida($medida)
    {
        $this->medida = $medida;

        return $this;
    }

    /**
     * Get medida
     *
     * @return integer 
     */
    public function getMedida()
    {
        return $this->medida;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Saitcv
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
     * Set montomax
     *
     * @param string $montomax
     * @return Saitcv
     */
    public function setMontomax($montomax)
    {
        $this->montomax = $montomax;

        return $this;
    }

    /**
     * Get montomax
     *
     * @return string 
     */
    public function getMontomax()
    {
        return $this->montomax;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Saitcv
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set desde
     *
     * @param string $desde
     * @return Saitcv
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return string 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param string $hasta
     * @return Saitcv
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return string 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set tipopvp
     *
     * @param integer $tipopvp
     * @return Saitcv
     */
    public function setTipopvp($tipopvp)
    {
        $this->tipopvp = $tipopvp;

        return $this;
    }

    /**
     * Get tipopvp
     *
     * @return integer 
     */
    public function getTipopvp()
    {
        return $this->tipopvp;
    }
}
