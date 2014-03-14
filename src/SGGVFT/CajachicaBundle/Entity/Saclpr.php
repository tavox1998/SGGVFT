<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saclpr
 *
 * @ORM\Table(name="SACLPR", indexes={@ORM\Index(name="SACLPR_IX1", columns={"CodClie", "CodItem"})})
 * @ORM\Entity
 */
class Saclpr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codclie;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsServ", type="integer", nullable=false)
     */
    private $esserv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REFERE", type="string", length=15, nullable=true)
     */
    private $refere;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPOFAC", type="string", length=1, nullable=true)
     */
    private $tipofac;

    /**
     * @var string
     *
     * @ORM\Column(name="numerod", type="string", length=10, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechae", type="datetime", nullable=true)
     */
    private $fechae;



    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saclpr
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
     * @return Saclpr
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
     * Set codclie
     *
     * @param string $codclie
     * @return Saclpr
     */
    public function setCodclie($codclie)
    {
        $this->codclie = $codclie;

        return $this;
    }

    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }

    /**
     * Set esserv
     *
     * @param integer $esserv
     * @return Saclpr
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
     * Set refere
     *
     * @param string $refere
     * @return Saclpr
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
     * Set tipofac
     *
     * @param string $tipofac
     * @return Saclpr
     */
    public function setTipofac($tipofac)
    {
        $this->tipofac = $tipofac;

        return $this;
    }

    /**
     * Get tipofac
     *
     * @return string 
     */
    public function getTipofac()
    {
        return $this->tipofac;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saclpr
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
     * @return Saclpr
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
     * Set precio
     *
     * @param string $precio
     * @return Saclpr
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saclpr
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
}
