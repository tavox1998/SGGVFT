<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbappm
 *
 * @ORM\Table(name="SBAPPM")
 * @ORM\Entity
 */
class Sbappm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

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
     * @ORM\Column(name="NroCtrl", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroctrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaP", type="datetime", nullable=false)
     */
    private $fechap;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroPagos", type="integer", nullable=false)
     */
    private $nropagos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MtoPagos", type="integer", nullable=false)
     */
    private $mtopagos = '0';



    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sbappm
     */
    public function setNrounico($nrounico)
    {
        $this->nrounico = $nrounico;

        return $this;
    }

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
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbappm
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
     * Set nroctrl
     *
     * @param string $nroctrl
     * @return Sbappm
     */
    public function setNroctrl($nroctrl)
    {
        $this->nroctrl = $nroctrl;

        return $this;
    }

    /**
     * Get nroctrl
     *
     * @return string 
     */
    public function getNroctrl()
    {
        return $this->nroctrl;
    }

    /**
     * Set fechap
     *
     * @param \DateTime $fechap
     * @return Sbappm
     */
    public function setFechap($fechap)
    {
        $this->fechap = $fechap;

        return $this;
    }

    /**
     * Get fechap
     *
     * @return \DateTime 
     */
    public function getFechap()
    {
        return $this->fechap;
    }

    /**
     * Set nropagos
     *
     * @param integer $nropagos
     * @return Sbappm
     */
    public function setNropagos($nropagos)
    {
        $this->nropagos = $nropagos;

        return $this;
    }

    /**
     * Get nropagos
     *
     * @return integer 
     */
    public function getNropagos()
    {
        return $this->nropagos;
    }

    /**
     * Set mtopagos
     *
     * @param integer $mtopagos
     * @return Sbappm
     */
    public function setMtopagos($mtopagos)
    {
        $this->mtopagos = $mtopagos;

        return $this;
    }

    /**
     * Get mtopagos
     *
     * @return integer 
     */
    public function getMtopagos()
    {
        return $this->mtopagos;
    }
}
