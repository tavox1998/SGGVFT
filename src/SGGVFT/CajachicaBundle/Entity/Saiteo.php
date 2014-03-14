<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saiteo
 *
 * @ORM\Table(name="SAITEO")
 * @ORM\Entity
 */
class Saiteo
{
    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

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
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coditem;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOfe", type="smallint", nullable=false)
     */
    private $tipoofe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Medida", type="smallint", nullable=false)
     */
    private $medida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Desde", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $desde = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Hasta", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $hasta = '0';



    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saiteo
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saiteo
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
     * Set coditem
     *
     * @param string $coditem
     * @return Saiteo
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
     * Set tipoofe
     *
     * @param integer $tipoofe
     * @return Saiteo
     */
    public function setTipoofe($tipoofe)
    {
        $this->tipoofe = $tipoofe;

        return $this;
    }

    /**
     * Get tipoofe
     *
     * @return integer 
     */
    public function getTipoofe()
    {
        return $this->tipoofe;
    }

    /**
     * Set medida
     *
     * @param integer $medida
     * @return Saiteo
     */
    public function setMedida($medida)
    {
        $this->medida = $medida;

        return $this;
    }

    /**
     * Get medida
     *
     * @return integer 
     */
    public function getMedida()
    {
        return $this->medida;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Saiteo
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
     * Set comision
     *
     * @param string $comision
     * @return Saiteo
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set desde
     *
     * @param string $desde
     * @return Saiteo
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return string 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param string $hasta
     * @return Saiteo
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return string 
     */
    public function getHasta()
    {
        return $this->hasta;
    }
}
