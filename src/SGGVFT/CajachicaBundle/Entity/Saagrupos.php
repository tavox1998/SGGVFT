<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saagrupos
 *
 * @ORM\Table(name="SAAGRUPOS")
 * @ORM\Entity
 */
class Saagrupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTbl", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codtbl;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numgrp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NombreGrp", type="string", length=50, nullable=false)
     */
    private $nombregrp;

    /**
     * @var string
     *
     * @ORM\Column(name="AliasGrp", type="string", length=50, nullable=false)
     */
    private $aliasgrp;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsTrans", type="smallint", nullable=false)
     */
    private $estrans = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NMeses", type="integer", nullable=false)
     */
    private $nmeses = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NMovim", type="integer", nullable=false)
     */
    private $nmovim = '0';



    /**
     * Set codtbl
     *
     * @param string $codtbl
     * @return Saagrupos
     */
    public function setCodtbl($codtbl)
    {
        $this->codtbl = $codtbl;

        return $this;
    }

    /**
     * Get codtbl
     *
     * @return string 
     */
    public function getCodtbl()
    {
        return $this->codtbl;
    }

    /**
     * Set numgrp
     *
     * @param integer $numgrp
     * @return Saagrupos
     */
    public function setNumgrp($numgrp)
    {
        $this->numgrp = $numgrp;

        return $this;
    }

    /**
     * Get numgrp
     *
     * @return integer 
     */
    public function getNumgrp()
    {
        return $this->numgrp;
    }

    /**
     * Set nombregrp
     *
     * @param string $nombregrp
     * @return Saagrupos
     */
    public function setNombregrp($nombregrp)
    {
        $this->nombregrp = $nombregrp;

        return $this;
    }

    /**
     * Get nombregrp
     *
     * @return string 
     */
    public function getNombregrp()
    {
        return $this->nombregrp;
    }

    /**
     * Set aliasgrp
     *
     * @param string $aliasgrp
     * @return Saagrupos
     */
    public function setAliasgrp($aliasgrp)
    {
        $this->aliasgrp = $aliasgrp;

        return $this;
    }

    /**
     * Get aliasgrp
     *
     * @return string 
     */
    public function getAliasgrp()
    {
        return $this->aliasgrp;
    }

    /**
     * Set estrans
     *
     * @param integer $estrans
     * @return Saagrupos
     */
    public function setEstrans($estrans)
    {
        $this->estrans = $estrans;

        return $this;
    }

    /**
     * Get estrans
     *
     * @return integer 
     */
    public function getEstrans()
    {
        return $this->estrans;
    }

    /**
     * Set nmeses
     *
     * @param integer $nmeses
     * @return Saagrupos
     */
    public function setNmeses($nmeses)
    {
        $this->nmeses = $nmeses;

        return $this;
    }

    /**
     * Get nmeses
     *
     * @return integer 
     */
    public function getNmeses()
    {
        return $this->nmeses;
    }

    /**
     * Set nmovim
     *
     * @param integer $nmovim
     * @return Saagrupos
     */
    public function setNmovim($nmovim)
    {
        $this->nmovim = $nmovim;

        return $this;
    }

    /**
     * Get nmovim
     *
     * @return integer 
     */
    public function getNmovim()
    {
        return $this->nmovim;
    }
}
