<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbfdccons
 *
 * @ORM\Table(name="SBFDCCONS", indexes={@ORM\Index(name="SBFDCCONS_IX1", columns={"NLinea"})})
 * @ORM\Entity
 */
class Sbfdccons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="NLinea", type="integer", nullable=false)
     */
    private $nlinea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';



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
     * Set nlinea
     *
     * @param integer $nlinea
     * @return Sbfdccons
     */
    public function setNlinea($nlinea)
    {
        $this->nlinea = $nlinea;

        return $this;
    }

    /**
     * Get nlinea
     *
     * @return integer 
     */
    public function getNlinea()
    {
        return $this->nlinea;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbfdccons
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
     * Set monto
     *
     * @param string $monto
     * @return Sbfdccons
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
