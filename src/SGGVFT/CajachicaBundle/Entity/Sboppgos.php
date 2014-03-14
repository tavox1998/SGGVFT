<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sboppgos
 *
 * @ORM\Table(name="SBOPPGOS")
 * @ORM\Entity
 */
class Sboppgos
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="NroOPago", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUCxP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroucxp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SData", type="string", length=255, nullable=false)
     */
    private $sdata;

    /**
     * @var string
     *
     * @ORM\Column(name="FData", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $fdata = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sboppgos
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
     * Set nroopago
     *
     * @param string $nroopago
     * @return Sboppgos
     */
    public function setNroopago($nroopago)
    {
        $this->nroopago = $nroopago;

        return $this;
    }

    /**
     * Get nroopago
     *
     * @return string 
     */
    public function getNroopago()
    {
        return $this->nroopago;
    }

    /**
     * Set nroucxp
     *
     * @param integer $nroucxp
     * @return Sboppgos
     */
    public function setNroucxp($nroucxp)
    {
        $this->nroucxp = $nroucxp;

        return $this;
    }

    /**
     * Get nroucxp
     *
     * @return integer 
     */
    public function getNroucxp()
    {
        return $this->nroucxp;
    }

    /**
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Sboppgos
     */
    public function setNrolinea($nrolinea)
    {
        $this->nrolinea = $nrolinea;

        return $this;
    }

    /**
     * Get nrolinea
     *
     * @return integer 
     */
    public function getNrolinea()
    {
        return $this->nrolinea;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Sboppgos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set sdata
     *
     * @param string $sdata
     * @return Sboppgos
     */
    public function setSdata($sdata)
    {
        $this->sdata = $sdata;

        return $this;
    }

    /**
     * Get sdata
     *
     * @return string 
     */
    public function getSdata()
    {
        return $this->sdata;
    }

    /**
     * Set fdata
     *
     * @param string $fdata
     * @return Sboppgos
     */
    public function setFdata($fdata)
    {
        $this->fdata = $fdata;

        return $this;
    }

    /**
     * Get fdata
     *
     * @return string 
     */
    public function getFdata()
    {
        return $this->fdata;
    }
}
