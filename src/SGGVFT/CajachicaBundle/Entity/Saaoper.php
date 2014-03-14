<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saaoper
 *
 * @ORM\Table(name="SAAOPER")
 * @ORM\Entity
 */
class Saaoper
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
     * @var integer
     *
     * @ORM\Column(name="NroOper", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrooper = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PDtaReq", type="integer", nullable=false)
     */
    private $pdtareq = '0';



    /**
     * Set codtbl
     *
     * @param string $codtbl
     * @return Saaoper
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
     * @return Saaoper
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
     * Set nrooper
     *
     * @param integer $nrooper
     * @return Saaoper
     */
    public function setNrooper($nrooper)
    {
        $this->nrooper = $nrooper;

        return $this;
    }

    /**
     * Get nrooper
     *
     * @return integer 
     */
    public function getNrooper()
    {
        return $this->nrooper;
    }

    /**
     * Set pdtareq
     *
     * @param integer $pdtareq
     * @return Saaoper
     */
    public function setPdtareq($pdtareq)
    {
        $this->pdtareq = $pdtareq;

        return $this;
    }

    /**
     * Get pdtareq
     *
     * @return integer 
     */
    public function getPdtareq()
    {
        return $this->pdtareq;
    }
}
