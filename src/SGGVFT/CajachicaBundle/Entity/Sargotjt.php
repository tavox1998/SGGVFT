<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sargotjt
 *
 * @ORM\Table(name="SARGOTJT")
 * @ORM\Entity
 */
class Sargotjt
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTarj", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codtarj;

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
     * Set codtarj
     *
     * @param string $codtarj
     * @return Sargotjt
     */
    public function setCodtarj($codtarj)
    {
        $this->codtarj = $codtarj;

        return $this;
    }

    /**
     * Get codtarj
     *
     * @return string 
     */
    public function getCodtarj()
    {
        return $this->codtarj;
    }

    /**
     * Set tiporgo
     *
     * @param integer $tiporgo
     * @return Sargotjt
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
     * @return Sargotjt
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
     * @return Sargotjt
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
     * @return Sargotjt
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
     * @return Sargotjt
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
