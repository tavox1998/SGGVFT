<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saetar
 *
 * @ORM\Table(name="SAETAR")
 * @ORM\Entity
 */
class Saetar
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTarj", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codtarj;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoVentas", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoventas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoRetenImp", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoretenimp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $impuesto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTips", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotips = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoIngreso", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoingreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCompra", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocompra = '0';



    /**
     * Set codtarj
     *
     * @param string $codtarj
     * @return Saetar
     */
    public function setCodtarj($codtarj)
    {
        $this->codtarj = $codtarj;

        return $this;
    }

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
     * Set periodo
     *
     * @param string $periodo
     * @return Saetar
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
     * Set mtoventas
     *
     * @param string $mtoventas
     * @return Saetar
     */
    public function setMtoventas($mtoventas)
    {
        $this->mtoventas = $mtoventas;

        return $this;
    }

    /**
     * Get mtoventas
     *
     * @return string 
     */
    public function getMtoventas()
    {
        return $this->mtoventas;
    }

    /**
     * Set mtoretenimp
     *
     * @param string $mtoretenimp
     * @return Saetar
     */
    public function setMtoretenimp($mtoretenimp)
    {
        $this->mtoretenimp = $mtoretenimp;

        return $this;
    }

    /**
     * Get mtoretenimp
     *
     * @return string 
     */
    public function getMtoretenimp()
    {
        return $this->mtoretenimp;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Saetar
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
     * Set mtototreten
     *
     * @param string $mtototreten
     * @return Saetar
     */
    public function setMtototreten($mtototreten)
    {
        $this->mtototreten = $mtototreten;

        return $this;
    }

    /**
     * Get mtototreten
     *
     * @return string 
     */
    public function getMtototreten()
    {
        return $this->mtototreten;
    }

    /**
     * Set mtotips
     *
     * @param string $mtotips
     * @return Saetar
     */
    public function setMtotips($mtotips)
    {
        $this->mtotips = $mtotips;

        return $this;
    }

    /**
     * Get mtotips
     *
     * @return string 
     */
    public function getMtotips()
    {
        return $this->mtotips;
    }

    /**
     * Set mtoingreso
     *
     * @param string $mtoingreso
     * @return Saetar
     */
    public function setMtoingreso($mtoingreso)
    {
        $this->mtoingreso = $mtoingreso;

        return $this;
    }

    /**
     * Get mtoingreso
     *
     * @return string 
     */
    public function getMtoingreso()
    {
        return $this->mtoingreso;
    }

    /**
     * Set mtocompra
     *
     * @param string $mtocompra
     * @return Saetar
     */
    public function setMtocompra($mtocompra)
    {
        $this->mtocompra = $mtocompra;

        return $this;
    }

    /**
     * Get mtocompra
     *
     * @return string 
     */
    public function getMtocompra()
    {
        return $this->mtocompra;
    }
}
