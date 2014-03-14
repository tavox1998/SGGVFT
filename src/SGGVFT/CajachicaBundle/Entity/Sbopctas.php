<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbopctas
 *
 * @ORM\Table(name="SBOPCTAS")
 * @ORM\Entity
 */
class Sbopctas
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
     * @ORM\Column(name="NroILB", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroilb = '0';

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
     * @return Sbopctas
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
     * @return Sbopctas
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
     * Set nroilb
     *
     * @param integer $nroilb
     * @return Sbopctas
     */
    public function setNroilb($nroilb)
    {
        $this->nroilb = $nroilb;

        return $this;
    }

    /**
     * Get nroilb
     *
     * @return integer 
     */
    public function getNroilb()
    {
        return $this->nroilb;
    }

    /**
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Sbopctas
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
     * @return Sbopctas
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
     * @return Sbopctas
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
     * @return Sbopctas
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
