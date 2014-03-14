<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sargocat
 *
 * @ORM\Table(name="SARGOCAT")
 * @ORM\Entity
 */
class Sargocat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodInst", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codinst = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoRgo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tiporgo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico = '0';

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
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';



    /**
     * Set codinst
     *
     * @param integer $codinst
     * @return Sargocat
     */
    public function setCodinst($codinst)
    {
        $this->codinst = $codinst;

        return $this;
    }

    /**
     * Get codinst
     *
     * @return integer 
     */
    public function getCodinst()
    {
        return $this->codinst;
    }

    /**
     * Set tiporgo
     *
     * @param integer $tiporgo
     * @return Sargocat
     */
    public function setTiporgo($tiporgo)
    {
        $this->tiporgo = $tiporgo;

        return $this;
    }

    /**
     * Get tiporgo
     *
     * @return integer 
     */
    public function getTiporgo()
    {
        return $this->tiporgo;
    }

    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sargocat
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
     * Set desde
     *
     * @param string $desde
     * @return Sargocat
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
     * @return Sargocat
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
     * Set monto
     *
     * @param string $monto
     * @return Sargocat
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
