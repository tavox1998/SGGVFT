<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Satarj
 *
 * @ORM\Table(name="SATARJ", indexes={@ORM\Index(name="SATARJ_IX1", columns={"Descrip"}), @ORM\Index(name="SATARJ_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Satarj
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTarj", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtarj;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Clase", type="string", length=10, nullable=true)
     */
    private $clase;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $impuesto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasDif", type="integer", nullable=false)
     */
    private $diasdif = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BaseReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $basereten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=3, nullable=false)
     */
    private $reteniva = '0';



    /**
     * Get codtarj
     *
     * @return string 
     */
    public function getCodtarj()
    {
        return $this->codtarj;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Satarj
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
     * Set clase
     *
     * @param string $clase
     * @return Satarj
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Satarj
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Satarj
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
     * Set diasdif
     *
     * @param integer $diasdif
     * @return Satarj
     */
    public function setDiasdif($diasdif)
    {
        $this->diasdif = $diasdif;

        return $this;
    }

    /**
     * Get diasdif
     *
     * @return integer 
     */
    public function getDiasdif()
    {
        return $this->diasdif;
    }

    /**
     * Set basereten
     *
     * @param string $basereten
     * @return Satarj
     */
    public function setBasereten($basereten)
    {
        $this->basereten = $basereten;

        return $this;
    }

    /**
     * Get basereten
     *
     * @return string 
     */
    public function getBasereten()
    {
        return $this->basereten;
    }

    /**
     * Set reteniva
     *
     * @param string $reteniva
     * @return Satarj
     */
    public function setReteniva($reteniva)
    {
        $this->reteniva = $reteniva;

        return $this;
    }

    /**
     * Get reteniva
     *
     * @return string 
     */
    public function getReteniva()
    {
        return $this->reteniva;
    }
}
