<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbappd
 *
 * @ORM\Table(name="SBAPPD")
 * @ORM\Entity
 */
class Sbappd
{
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
     * @ORM\Column(name="NroPpal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroppal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     */
    private $codbanc;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=15, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="RIF", type="string", length=20, nullable=false)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripPago", type="string", length=70, nullable=false)
     */
    private $descrippago;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     */
    private $numerod;



    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sbappd
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
     * Set nroppal
     *
     * @param integer $nroppal
     * @return Sbappd
     */
    public function setNroppal($nroppal)
    {
        $this->nroppal = $nroppal;

        return $this;
    }

    /**
     * Get nroppal
     *
     * @return integer 
     */
    public function getNroppal()
    {
        return $this->nroppal;
    }

    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbappd
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
     * Set documento
     *
     * @param string $documento
     * @return Sbappd
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
     * Set rif
     *
     * @param string $rif
     * @return Sbappd
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbappd
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
     * Set descrippago
     *
     * @param string $descrippago
     * @return Sbappd
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
     * Set monto
     *
     * @param string $monto
     * @return Sbappd
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
     * Set numerod
     *
     * @param string $numerod
     * @return Sbappd
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
}
