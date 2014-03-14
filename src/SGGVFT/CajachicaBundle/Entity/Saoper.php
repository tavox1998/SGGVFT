<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saoper
 *
 * @ORM\Table(name="SAOPER", indexes={@ORM\Index(name="SAOPER_IX1", columns={"Descrip"}), @ORM\Index(name="SAOPER_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Saoper
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codoper;

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
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     */
    private $tipoope = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Rango", type="string", length=80, nullable=true)
     */
    private $rango;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';



    /**
     * Get codoper
     *
     * @return string 
     */
    public function getCodoper()
    {
        return $this->codoper;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saoper
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
     * @return Saoper
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
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Saoper
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
     * Set rango
     *
     * @param string $rango
     * @return Saoper
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get rango
     *
     * @return string 
     */
    public function getRango()
    {
        return $this->rango;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Saoper
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
