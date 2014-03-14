<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saprsri
 *
 * @ORM\Table(name="SAPRSRI")
 * @ORM\Entity
 */
class Saprsri
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODPROV", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="EstablReten", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $establreten;

    /**
     * @var string
     *
     * @ORM\Column(name="PtoEmiReten", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ptoemireten;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecCadReten", type="datetime", nullable=true)
     */
    private $feccadreten;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroInicio", type="integer", nullable=false)
     */
    private $nroinicio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroFinal", type="integer", nullable=false)
     */
    private $nrofinal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AutSRIReten", type="string", length=10, nullable=true)
     */
    private $autsrireten;



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Saprsri
     */
    public function setCodprov($codprov)
    {
        $this->codprov = $codprov;

        return $this;
    }

    /**
     * Get codprov
     *
     * @return string 
     */
    public function getCodprov()
    {
        return $this->codprov;
    }

    /**
     * Set establreten
     *
     * @param string $establreten
     * @return Saprsri
     */
    public function setEstablreten($establreten)
    {
        $this->establreten = $establreten;

        return $this;
    }

    /**
     * Get establreten
     *
     * @return string 
     */
    public function getEstablreten()
    {
        return $this->establreten;
    }

    /**
     * Set ptoemireten
     *
     * @param string $ptoemireten
     * @return Saprsri
     */
    public function setPtoemireten($ptoemireten)
    {
        $this->ptoemireten = $ptoemireten;

        return $this;
    }

    /**
     * Get ptoemireten
     *
     * @return string 
     */
    public function getPtoemireten()
    {
        return $this->ptoemireten;
    }

    /**
     * Set feccadreten
     *
     * @param \DateTime $feccadreten
     * @return Saprsri
     */
    public function setFeccadreten($feccadreten)
    {
        $this->feccadreten = $feccadreten;

        return $this;
    }

    /**
     * Get feccadreten
     *
     * @return \DateTime 
     */
    public function getFeccadreten()
    {
        return $this->feccadreten;
    }

    /**
     * Set nroinicio
     *
     * @param integer $nroinicio
     * @return Saprsri
     */
    public function setNroinicio($nroinicio)
    {
        $this->nroinicio = $nroinicio;

        return $this;
    }

    /**
     * Get nroinicio
     *
     * @return integer 
     */
    public function getNroinicio()
    {
        return $this->nroinicio;
    }

    /**
     * Set nrofinal
     *
     * @param integer $nrofinal
     * @return Saprsri
     */
    public function setNrofinal($nrofinal)
    {
        $this->nrofinal = $nrofinal;

        return $this;
    }

    /**
     * Get nrofinal
     *
     * @return integer 
     */
    public function getNrofinal()
    {
        return $this->nrofinal;
    }

    /**
     * Set autsrireten
     *
     * @param string $autsrireten
     * @return Saprsri
     */
    public function setAutsrireten($autsrireten)
    {
        $this->autsrireten = $autsrireten;

        return $this;
    }

    /**
     * Get autsrireten
     *
     * @return string 
     */
    public function getAutsrireten()
    {
        return $this->autsrireten;
    }
}
