<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdopf
 *
 * @ORM\Table(name="SBDOPF", indexes={@ORM\Index(name="SBDOPF_IX1", columns={"CodOpFr"})})
 * @ORM\Entity
 */
class Sbdopf
{
    /**
     * @var string
     *
     * @ORM\Column(name="NroUnico", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="CodOpFr", type="string", length=30, nullable=false)
     */
    private $codopfr;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCta", type="string", length=30, nullable=true)
     */
    private $codcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCenCto", type="string", length=30, nullable=true)
     */
    private $codcencto;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTercero", type="string", length=30, nullable=true)
     */
    private $codtercero;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="string", length=50, nullable=true)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario1", type="string", length=50, nullable=true)
     */
    private $comentario1;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario2", type="string", length=50, nullable=true)
     */
    private $comentario2;



    /**
     * Get nrounico
     *
     * @return string 
     */
    public function getNrounico()
    {
        return $this->nrounico;
    }

    /**
     * Set codopfr
     *
     * @param string $codopfr
     * @return Sbdopf
     */
    public function setCodopfr($codopfr)
    {
        $this->codopfr = $codopfr;

        return $this;
    }

    /**
     * Get codopfr
     *
     * @return string 
     */
    public function getCodopfr()
    {
        return $this->codopfr;
    }

    /**
     * Set codcta
     *
     * @param string $codcta
     * @return Sbdopf
     */
    public function setCodcta($codcta)
    {
        $this->codcta = $codcta;

        return $this;
    }

    /**
     * Get codcta
     *
     * @return string 
     */
    public function getCodcta()
    {
        return $this->codcta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbdopf
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
     * Set codcencto
     *
     * @param string $codcencto
     * @return Sbdopf
     */
    public function setCodcencto($codcencto)
    {
        $this->codcencto = $codcencto;

        return $this;
    }

    /**
     * Get codcencto
     *
     * @return string 
     */
    public function getCodcencto()
    {
        return $this->codcencto;
    }

    /**
     * Set codtercero
     *
     * @param string $codtercero
     * @return Sbdopf
     */
    public function setCodtercero($codtercero)
    {
        $this->codtercero = $codtercero;

        return $this;
    }

    /**
     * Get codtercero
     *
     * @return string 
     */
    public function getCodtercero()
    {
        return $this->codtercero;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbdopf
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

    /**
     * Set monto2
     *
     * @param string $monto2
     * @return Sbdopf
     */
    public function setMonto2($monto2)
    {
        $this->monto2 = $monto2;

        return $this;
    }

    /**
     * Get monto2
     *
     * @return string 
     */
    public function getMonto2()
    {
        return $this->monto2;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Sbdopf
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set comentario1
     *
     * @param string $comentario1
     * @return Sbdopf
     */
    public function setComentario1($comentario1)
    {
        $this->comentario1 = $comentario1;

        return $this;
    }

    /**
     * Get comentario1
     *
     * @return string 
     */
    public function getComentario1()
    {
        return $this->comentario1;
    }

    /**
     * Set comentario2
     *
     * @param string $comentario2
     * @return Sbdopf
     */
    public function setComentario2($comentario2)
    {
        $this->comentario2 = $comentario2;

        return $this;
    }

    /**
     * Get comentario2
     *
     * @return string 
     */
    public function getComentario2()
    {
        return $this->comentario2;
    }
}
