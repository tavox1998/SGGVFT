<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saipacxc
 *
 * @ORM\Table(name="SAIPACXC")
 * @ORM\Entity
 */
class Saipacxc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroPpal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroppal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoPag", type="integer", nullable=false)
     */
    private $tipopag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodPago", type="string", length=10, nullable=true)
     */
    private $codpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $impuesto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetencT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $retenct = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set nroppal
     *
     * @param integer $nroppal
     * @return Saipacxc
     */
    public function setNroppal($nroppal)
    {
        $this->nroppal = $nroppal;

        return $this;
    }

    /**
     * Get nroppal
     *
     * @return integer 
     */
    public function getNroppal()
    {
        return $this->nroppal;
    }

    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saipacxc
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
     * Set tipopag
     *
     * @param integer $tipopag
     * @return Saipacxc
     */
    public function setTipopag($tipopag)
    {
        $this->tipopag = $tipopag;

        return $this;
    }

    /**
     * Get tipopag
     *
     * @return integer 
     */
    public function getTipopag()
    {
        return $this->tipopag;
    }

    /**
     * Set codpago
     *
     * @param string $codpago
     * @return Saipacxc
     */
    public function setCodpago($codpago)
    {
        $this->codpago = $codpago;

        return $this;
    }

    /**
     * Get codpago
     *
     * @return string 
     */
    public function getCodpago()
    {
        return $this->codpago;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Saipacxc
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
     * Set descrip
     *
     * @param string $descrip
     * @return Saipacxc
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
     * Set impuesto
     *
     * @param string $impuesto
     * @return Saipacxc
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return string 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set retenct
     *
     * @param string $retenct
     * @return Saipacxc
     */
    public function setRetenct($retenct)
    {
        $this->retenct = $retenct;

        return $this;
    }

    /**
     * Get retenct
     *
     * @return string 
     */
    public function getRetenct()
    {
        return $this->retenct;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saipacxc
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
