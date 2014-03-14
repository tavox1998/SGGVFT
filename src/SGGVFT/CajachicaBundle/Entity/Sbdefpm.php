<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdefpm
 *
 * @ORM\Table(name="SBDEFPM")
 * @ORM\Entity
 */
class Sbdefpm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NDefAPP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ndefapp;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Entidad", type="string", length=70, nullable=false)
     */
    private $entidad;



    /**
     * Get ndefapp
     *
     * @return integer 
     */
    public function getNdefapp()
    {
        return $this->ndefapp;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbdefpm
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
     * Set entidad
     *
     * @param string $entidad
     * @return Sbdefpm
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }
}
