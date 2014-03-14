<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacmec
 *
 * @ORM\Table(name="SACMEC")
 * @ORM\Entity
 */
class Sacmec
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codmeca;

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
     * Set codmeca
     *
     * @param string $codmeca
     * @return Sacmec
     */
    public function setCodmeca($codmeca)
    {
        $this->codmeca = $codmeca;

        return $this;
    }

    /**
     * Get codmeca
     *
     * @return string 
     */
    public function getCodmeca()
    {
        return $this->codmeca;
    }

    /**
     * Set tiporgo
     *
     * @param integer $tiporgo
     * @return Sacmec
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
     * @return Sacmec
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
     * @return Sacmec
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
     * @return Sacmec
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
     * @return Sacmec
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
