<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbfmts
 *
 * @ORM\Table(name="SBFMTS")
 * @ORM\Entity
 */
class Sbfmts
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codbanc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoope = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbfmts
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
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Sbfmts
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbfmts
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
}
