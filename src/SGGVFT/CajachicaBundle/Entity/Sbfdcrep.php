<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbfdcrep
 *
 * @ORM\Table(name="SBFDCREP")
 * @ORM\Entity
 */
class Sbfdcrep
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
     * @ORM\Column(name="Grupo", type="integer", nullable=false)
     */
    private $grupo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TitGrp", type="string", length=70, nullable=false)
     */
    private $titgrp;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     */
    private $tipoope = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="string", length=70, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDb", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCr", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocr = '0';



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
     * Set grupo
     *
     * @param integer $grupo
     * @return Sbfdcrep
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set titgrp
     *
     * @param string $titgrp
     * @return Sbfdcrep
     */
    public function setTitgrp($titgrp)
    {
        $this->titgrp = $titgrp;

        return $this;
    }

    /**
     * Get titgrp
     *
     * @return string 
     */
    public function getTitgrp()
    {
        return $this->titgrp;
    }

    /**
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Sbfdcrep
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
     * Set titulo
     *
     * @param string $titulo
     * @return Sbfdcrep
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbfdcrep
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
     * Set mtodb
     *
     * @param string $mtodb
     * @return Sbfdcrep
     */
    public function setMtodb($mtodb)
    {
        $this->mtodb = $mtodb;

        return $this;
    }

    /**
     * Get mtodb
     *
     * @return string 
     */
    public function getMtodb()
    {
        return $this->mtodb;
    }

    /**
     * Set mtocr
     *
     * @param string $mtocr
     * @return Sbfdcrep
     */
    public function setMtocr($mtocr)
    {
        $this->mtocr = $mtocr;

        return $this;
    }

    /**
     * Get mtocr
     *
     * @return string 
     */
    public function getMtocr()
    {
        return $this->mtocr;
    }
}
