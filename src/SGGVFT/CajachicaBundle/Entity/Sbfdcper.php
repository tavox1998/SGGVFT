<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbfdcper
 *
 * @ORM\Table(name="SBFDCPER", indexes={@ORM\Index(name="SBFDCPER_IX1", columns={"Periodo"})})
 * @ORM\Entity
 */
class Sbfdcper
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
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=7, nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldoa = '0';



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
     * Set periodo
     *
     * @param string $periodo
     * @return Sbfdcper
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set saldoa
     *
     * @param string $saldoa
     * @return Sbfdcper
     */
    public function setSaldoa($saldoa)
    {
        $this->saldoa = $saldoa;

        return $this;
    }

    /**
     * Get saldoa
     *
     * @return string 
     */
    public function getSaldoa()
    {
        return $this->saldoa;
    }
}
