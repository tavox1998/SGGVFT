<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sapvpr
 *
 * @ORM\Table(name="SAPVPR")
 * @ORM\Entity
 */
class Sapvpr
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
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="Refere", type="string", length=15, nullable=true)
     */
    private $refere;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCom", type="string", length=1, nullable=true)
     */
    private $tipocom;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsServ", type="smallint", nullable=false)
     */
    private $esserv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coditem = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sapvpr
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
     * @return Sapvpr
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
     * Set refere
     *
     * @param string $refere
     * @return Sapvpr
     */
    public function setRefere($refere)
    {
        $this->refere = $refere;

        return $this;
    }

    /**
     * Get refere
     *
     * @return string 
     */
    public function getRefere()
    {
        return $this->refere;
    }

    /**
     * Set tipocom
     *
     * @param string $tipocom
     * @return Sapvpr
     */
    public function setTipocom($tipocom)
    {
        $this->tipocom = $tipocom;

        return $this;
    }

    /**
     * Get tipocom
     *
     * @return string 
     */
    public function getTipocom()
    {
        return $this->tipocom;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sapvpr
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Sapvpr
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Sapvpr
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sapvpr
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
     * Set esserv
     *
     * @param integer $esserv
     * @return Sapvpr
     */
    public function setEsserv($esserv)
    {
        $this->esserv = $esserv;

        return $this;
    }

    /**
     * Get esserv
     *
     * @return integer 
     */
    public function getEsserv()
    {
        return $this->esserv;
    }

    /**
     * Set coditem
     *
     * @param string $coditem
     * @return Sapvpr
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
}
