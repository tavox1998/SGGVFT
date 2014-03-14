<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sataxes
 *
 * @ORM\Table(name="SATAXES", indexes={@ORM\Index(name="SATAXES_IX1", columns={"Descrip"})})
 * @ORM\Entity
 */
class Sataxes
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTaxs", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtaxs;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsFijo", type="smallint", nullable=false)
     */
    private $esfijo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPorct", type="smallint", nullable=false)
     */
    private $esporct = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsCosto", type="smallint", nullable=false)
     */
    private $escosto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoIVA", type="smallint", nullable=false)
     */
    private $tipoiva = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsLibroI", type="smallint", nullable=false)
     */
    private $eslibroi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPartic", type="smallint", nullable=false)
     */
    private $espartic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsTaxVenta", type="smallint", nullable=false)
     */
    private $estaxventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsTaxCompra", type="smallint", nullable=false)
     */
    private $estaxcompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MontoMax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montomax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Sustraendo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $sustraendo = '0';



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
     * Set descrip
     *
     * @param string $descrip
     * @return Sataxes
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
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sataxes
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
     * Set activo
     *
     * @param integer $activo
     * @return Sataxes
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
     * Set esfijo
     *
     * @param integer $esfijo
     * @return Sataxes
     */
    public function setEsfijo($esfijo)
    {
        $this->esfijo = $esfijo;

        return $this;
    }

    /**
     * Get esfijo
     *
     * @return integer 
     */
    public function getEsfijo()
    {
        return $this->esfijo;
    }

    /**
     * Set esreten
     *
     * @param integer $esreten
     * @return Sataxes
     */
    public function setEsreten($esreten)
    {
        $this->esreten = $esreten;

        return $this;
    }

    /**
     * Get esreten
     *
     * @return integer 
     */
    public function getEsreten()
    {
        return $this->esreten;
    }

    /**
     * Set codoper
     *
     * @param string $codoper
     * @return Sataxes
     */
    public function setCodoper($codoper)
    {
        $this->codoper = $codoper;

        return $this;
    }

    /**
     * Get codoper
     *
     * @return string 
     */
    public function getCodoper()
    {
        return $this->codoper;
    }

    /**
     * Set esporct
     *
     * @param integer $esporct
     * @return Sataxes
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

    /**
     * Set escosto
     *
     * @param integer $escosto
     * @return Sataxes
     */
    public function setEscosto($escosto)
    {
        $this->escosto = $escosto;

        return $this;
    }

    /**
     * Get escosto
     *
     * @return integer 
     */
    public function getEscosto()
    {
        return $this->escosto;
    }

    /**
     * Set tipoiva
     *
     * @param integer $tipoiva
     * @return Sataxes
     */
    public function setTipoiva($tipoiva)
    {
        $this->tipoiva = $tipoiva;

        return $this;
    }

    /**
     * Get tipoiva
     *
     * @return integer 
     */
    public function getTipoiva()
    {
        return $this->tipoiva;
    }

    /**
     * Set eslibroi
     *
     * @param integer $eslibroi
     * @return Sataxes
     */
    public function setEslibroi($eslibroi)
    {
        $this->eslibroi = $eslibroi;

        return $this;
    }

    /**
     * Get eslibroi
     *
     * @return integer 
     */
    public function getEslibroi()
    {
        return $this->eslibroi;
    }

    /**
     * Set espartic
     *
     * @param integer $espartic
     * @return Sataxes
     */
    public function setEspartic($espartic)
    {
        $this->espartic = $espartic;

        return $this;
    }

    /**
     * Get espartic
     *
     * @return integer 
     */
    public function getEspartic()
    {
        return $this->espartic;
    }

    /**
     * Set estaxventa
     *
     * @param integer $estaxventa
     * @return Sataxes
     */
    public function setEstaxventa($estaxventa)
    {
        $this->estaxventa = $estaxventa;

        return $this;
    }

    /**
     * Get estaxventa
     *
     * @return integer 
     */
    public function getEstaxventa()
    {
        return $this->estaxventa;
    }

    /**
     * Set estaxcompra
     *
     * @param integer $estaxcompra
     * @return Sataxes
     */
    public function setEstaxcompra($estaxcompra)
    {
        $this->estaxcompra = $estaxcompra;

        return $this;
    }

    /**
     * Get estaxcompra
     *
     * @return integer 
     */
    public function getEstaxcompra()
    {
        return $this->estaxcompra;
    }

    /**
     * Set montomax
     *
     * @param string $montomax
     * @return Sataxes
     */
    public function setMontomax($montomax)
    {
        $this->montomax = $montomax;

        return $this;
    }

    /**
     * Get montomax
     *
     * @return string 
     */
    public function getMontomax()
    {
        return $this->montomax;
    }

    /**
     * Set sustraendo
     *
     * @param string $sustraendo
     * @return Sataxes
     */
    public function setSustraendo($sustraendo)
    {
        $this->sustraendo = $sustraendo;

        return $this;
    }

    /**
     * Get sustraendo
     *
     * @return string 
     */
    public function getSustraendo()
    {
        return $this->sustraendo;
    }
}
