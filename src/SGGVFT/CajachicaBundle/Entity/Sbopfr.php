<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbopfr
 *
 * @ORM\Table(name="SBOPFR", indexes={@ORM\Index(name="SBOPFR_IX1", columns={"Descripcion"}), @ORM\Index(name="SBOPFR_IX2", columns={"TipoOpe", "Descripcion"})})
 * @ORM\Entity
 */
class Sbopfr
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodOpFr", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codopfr;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodBene", type="string", length=30, nullable=true)
     */
    private $codbene;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     */
    private $tipoope = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaPP", type="datetime", nullable=false)
     */
    private $fechapp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Avisar", type="integer", nullable=false)
     */
    private $avisar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Siempre", type="integer", nullable=false)
     */
    private $siempre = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NPagos", type="integer", nullable=false)
     */
    private $npagos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Frecuencia", type="integer", nullable=false)
     */
    private $frecuencia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';



    /**
     * Get codopfr
     *
     * @return string 
     */
    public function getCodopfr()
    {
        return $this->codopfr;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbopfr
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
     * Set codbene
     *
     * @param string $codbene
     * @return Sbopfr
     */
    public function setCodbene($codbene)
    {
        $this->codbene = $codbene;

        return $this;
    }

    /**
     * Get codbene
     *
     * @return string 
     */
    public function getCodbene()
    {
        return $this->codbene;
    }

    /**
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Sbopfr
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
     * Set fechapp
     *
     * @param \DateTime $fechapp
     * @return Sbopfr
     */
    public function setFechapp($fechapp)
    {
        $this->fechapp = $fechapp;

        return $this;
    }

    /**
     * Get fechapp
     *
     * @return \DateTime 
     */
    public function getFechapp()
    {
        return $this->fechapp;
    }

    /**
     * Set avisar
     *
     * @param integer $avisar
     * @return Sbopfr
     */
    public function setAvisar($avisar)
    {
        $this->avisar = $avisar;

        return $this;
    }

    /**
     * Get avisar
     *
     * @return integer 
     */
    public function getAvisar()
    {
        return $this->avisar;
    }

    /**
     * Set siempre
     *
     * @param integer $siempre
     * @return Sbopfr
     */
    public function setSiempre($siempre)
    {
        $this->siempre = $siempre;

        return $this;
    }

    /**
     * Get siempre
     *
     * @return integer 
     */
    public function getSiempre()
    {
        return $this->siempre;
    }

    /**
     * Set npagos
     *
     * @param integer $npagos
     * @return Sbopfr
     */
    public function setNpagos($npagos)
    {
        $this->npagos = $npagos;

        return $this;
    }

    /**
     * Get npagos
     *
     * @return integer 
     */
    public function getNpagos()
    {
        return $this->npagos;
    }

    /**
     * Set frecuencia
     *
     * @param integer $frecuencia
     * @return Sbopfr
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
     * Set monto
     *
     * @param string $monto
     * @return Sbopfr
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
}
