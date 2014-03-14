<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sataxitc
 *
 * @ORM\Table(name="SATAXITC", indexes={@ORM\Index(name="SATAXITC_IX1", columns={"CodItem", "CodTaxs"})})
 * @ORM\Entity
 */
class Sataxitc
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
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

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
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=true)
     */
    private $coditem;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TGravable", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tgravable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLineaC", type="integer", nullable=false)
     */
    private $nrolineac = '0';



    /**
     * Set tipocom
     *
     * @param string $tipocom
     * @return Sataxitc
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
     * Set codprov
     *
     * @param string $codprov
     * @return Sataxitc
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
     * Set numerod
     *
     * @param string $numerod
     * @return Sataxitc
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
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Sataxitc
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
     * Set codtaxs
     *
     * @param string $codtaxs
     * @return Sataxitc
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
     * Set coditem
     *
     * @param string $coditem
     * @return Sataxitc
     */
    public function setCoditem($coditem)
    {
        $this->coditem = $coditem;

        return $this;
    }

    /**
     * Get coditem
     *
     * @return string 
     */
    public function getCoditem()
    {
        return $this->coditem;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sataxitc
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
     * Set tgravable
     *
     * @param string $tgravable
     * @return Sataxitc
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
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sataxitc
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sataxitc
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

    /**
     * Set nrolineac
     *
     * @param integer $nrolineac
     * @return Sataxitc
     */
    public function setNrolineac($nrolineac)
    {
        $this->nrolineac = $nrolineac;

        return $this;
    }

    /**
     * Get nrolineac
     *
     * @return integer 
     */
    public function getNrolineac()
    {
        return $this->nrolineac;
    }
}
