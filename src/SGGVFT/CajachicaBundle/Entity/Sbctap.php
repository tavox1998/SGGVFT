<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbctap
 *
 * @ORM\Table(name="SBCTAP")
 * @ORM\Entity
 */
class Sbctap
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID3", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id3;

    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codbanc;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NroCuenta", type="string", length=30, nullable=false)
     */
    private $nrocuenta;



    /**
     * Set id3
     *
     * @param string $id3
     * @return Sbctap
     */
    public function setId3($id3)
    {
        $this->id3 = $id3;

        return $this;
    }

    /**
     * Get id3
     *
     * @return string 
     */
    public function getId3()
    {
        return $this->id3;
    }

    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbctap
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbctap
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
     * Set nrocuenta
     *
     * @param string $nrocuenta
     * @return Sbctap
     */
    public function setNrocuenta($nrocuenta)
    {
        $this->nrocuenta = $nrocuenta;

        return $this;
    }

    /**
     * Get nrocuenta
     *
     * @return string 
     */
    public function getNrocuenta()
    {
        return $this->nrocuenta;
    }
}
