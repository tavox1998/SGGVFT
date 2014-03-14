<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbmone
 *
 * @ORM\Table(name="SBMONE", indexes={@ORM\Index(name="SBMONE_IX1", columns={"Descripcion"})})
 * @ORM\Entity
 */
class Sbmone
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMone", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmone;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=25, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $factor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsBase", type="integer", nullable=false)
     */
    private $esbase = '0';



    /**
     * Get codmone
     *
     * @return string 
     */
    public function getCodmone()
    {
        return $this->codmone;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbmone
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
     * Set pais
     *
     * @param string $pais
     * @return Sbmone
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set factor
     *
     * @param string $factor
     * @return Sbmone
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return string 
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set esbase
     *
     * @param integer $esbase
     * @return Sbmone
     */
    public function setEsbase($esbase)
    {
        $this->esbase = $esbase;

        return $this;
    }

    /**
     * Get esbase
     *
     * @return integer 
     */
    public function getEsbase()
    {
        return $this->esbase;
    }
}
