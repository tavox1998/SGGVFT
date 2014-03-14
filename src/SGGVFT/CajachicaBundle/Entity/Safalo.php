<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Safalo
 *
 * @ORM\Table(name="SAFALO", indexes={@ORM\Index(name="SAFALO_IX1", columns={"Descrip"})})
 * @ORM\Entity
 */
class Safalo
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodFacL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codfacl;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=60, nullable=true)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasCred", type="integer", nullable=false)
     */
    private $diascred = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=true)
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoFac", type="smallint", nullable=false)
     */
    private $tipofac = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;



    /**
     * Get codfacl
     *
     * @return string 
     */
    public function getCodfacl()
    {
        return $this->codfacl;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Safalo
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
     * Set diascred
     *
     * @param integer $diascred
     * @return Safalo
     */
    public function setDiascred($diascred)
    {
        $this->diascred = $diascred;

        return $this;
    }

    /**
     * Get diascred
     *
     * @return integer 
     */
    public function getDiascred()
    {
        return $this->diascred;
    }

    /**
     * Set codvend
     *
     * @param string $codvend
     * @return Safalo
     */
    public function setCodvend($codvend)
    {
        $this->codvend = $codvend;

        return $this;
    }

    /**
     * Get codvend
     *
     * @return string 
     */
    public function getCodvend()
    {
        return $this->codvend;
    }

    /**
     * Set codoper
     *
     * @param string $codoper
     * @return Safalo
     */
    public function setCodoper($codoper)
    {
        $this->codoper = $codoper;

        return $this;
    }

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
     * Set tipofac
     *
     * @param integer $tipofac
     * @return Safalo
     */
    public function setTipofac($tipofac)
    {
        $this->tipofac = $tipofac;

        return $this;
    }

    /**
     * Get tipofac
     *
     * @return integer 
     */
    public function getTipofac()
    {
        return $this->tipofac;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Safalo
     */
    public function setFechae($fechae)
    {
        $this->fechae = $fechae;

        return $this;
    }

    /**
     * Get fechae
     *
     * @return \DateTime 
     */
    public function getFechae()
    {
        return $this->fechae;
    }
}
