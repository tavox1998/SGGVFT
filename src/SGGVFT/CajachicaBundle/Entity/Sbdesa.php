<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdesa
 *
 * @ORM\Table(name="SBDESA")
 * @ORM\Entity
 */
class Sbdesa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IOri", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iori = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUU", type="datetime", nullable=false)
     */
    private $fechauu;



    /**
     * Set iori
     *
     * @param integer $iori
     * @return Sbdesa
     */
    public function setIori($iori)
    {
        $this->iori = $iori;

        return $this;
    }

    /**
     * Get iori
     *
     * @return integer 
     */
    public function getIori()
    {
        return $this->iori;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbdesa
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
     * Set fechauu
     *
     * @param \DateTime $fechauu
     * @return Sbdesa
     */
    public function setFechauu($fechauu)
    {
        $this->fechauu = $fechauu;

        return $this;
    }

    /**
     * Get fechauu
     *
     * @return \DateTime 
     */
    public function getFechauu()
    {
        return $this->fechauu;
    }
}
