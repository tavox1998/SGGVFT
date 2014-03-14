<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sazona
 *
 * @ORM\Table(name="SAZONA", indexes={@ORM\Index(name="SAZONA_IX1", columns={"Descrip"}), @ORM\Index(name="SAZONA_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Sazona
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodZona", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codzona;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Clase", type="string", length=10, nullable=true)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="Represent", type="string", length=40, nullable=true)
     */
    private $represent;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';



    /**
     * Get codzona
     *
     * @return string 
     */
    public function getCodzona()
    {
        return $this->codzona;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sazona
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return Sazona
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set represent
     *
     * @param string $represent
     * @return Sazona
     */
    public function setRepresent($represent)
    {
        $this->represent = $represent;

        return $this;
    }

    /**
     * Get represent
     *
     * @return string 
     */
    public function getRepresent()
    {
        return $this->represent;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Sazona
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
