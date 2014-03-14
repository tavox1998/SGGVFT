<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sataxcom
 *
 * @ORM\Table(name="SATAXCOM")
 * @ORM\Entity
 */
class Sataxcom
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoCom", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipocom;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

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
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TGravable", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tgravable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set tipocom
     *
     * @param string $tipocom
     * @return Sataxcom
     */
    public function setTipocom($tipocom)
    {
        $this->tipocom = $tipocom;

        return $this;
    }

    /**
     * Get tipocom
     *
     * @return string 
     */
    public function getTipocom()
    {
        return $this->tipocom;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sataxcom
     */
    public function setNumerod($numerod)
    {
        $this->numerod = $numerod;

        return $this;
    }

    /**
     * Get numerod
     *
     * @return string 
     */
    public function getNumerod()
    {
        return $this->numerod;
    }

    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sataxcom
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
     * Set codtaxs
     *
     * @param string $codtaxs
     * @return Sataxcom
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
     * @return Sataxcom
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
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sataxcom
     */
    public function setMtotax($mtotax)
    {
        $this->mtotax = $mtotax;

        return $this;
    }

    /**
     * Get mtotax
     *
     * @return string 
     */
    public function getMtotax()
    {
        return $this->mtotax;
    }

    /**
     * Set tgravable
     *
     * @param string $tgravable
     * @return Sataxcom
     */
    public function setTgravable($tgravable)
    {
        $this->tgravable = $tgravable;

        return $this;
    }

    /**
     * Get tgravable
     *
     * @return string 
     */
    public function getTgravable()
    {
        return $this->tgravable;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sataxcom
     */
    public function setCodsucu($codsucu)
    {
        $this->codsucu = $codsucu;

        return $this;
    }

    /**
     * Get codsucu
     *
     * @return string 
     */
    public function getCodsucu()
    {
        return $this->codsucu;
    }
}
