<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sataxprd
 *
 * @ORM\Table(name="SATAXPRD")
 * @ORM\Entity
 */
class Sataxprd
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprod;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTaxs", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codtaxs;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPorct", type="smallint", nullable=false)
     */
    private $esporct = '0';



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Sataxprd
     */
    public function setCodprod($codprod)
    {
        $this->codprod = $codprod;

        return $this;
    }

    /**
     * Get codprod
     *
     * @return string 
     */
    public function getCodprod()
    {
        return $this->codprod;
    }

    /**
     * Set codtaxs
     *
     * @param string $codtaxs
     * @return Sataxprd
     */
    public function setCodtaxs($codtaxs)
    {
        $this->codtaxs = $codtaxs;

        return $this;
    }

    /**
     * Get codtaxs
     *
     * @return string 
     */
    public function getCodtaxs()
    {
        return $this->codtaxs;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sataxprd
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
     * Set esporct
     *
     * @param integer $esporct
     * @return Sataxprd
     */
    public function setEsporct($esporct)
    {
        $this->esporct = $esporct;

        return $this;
    }

    /**
     * Get esporct
     *
     * @return integer 
     */
    public function getEsporct()
    {
        return $this->esporct;
    }
}
