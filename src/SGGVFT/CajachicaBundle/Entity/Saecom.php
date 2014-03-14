<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saecom
 *
 * @ORM\Table(name="SAECOM")
 * @ORM\Entity
 */
class Saecom
{
    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=true)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCompra", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fletes", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $fletes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Contado", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $contado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Credito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $credito = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroComps", type="integer", nullable=false)
     */
    private $nrocomps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroDevol", type="integer", nullable=false)
     */
    private $nrodevol = '0';



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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saecom
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
     * Set mtocompra
     *
     * @param string $mtocompra
     * @return Saecom
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

    /**
     * Set mtotax
     *
     * @param string $mtotax
     * @return Saecom
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
     * Set descto
     *
     * @param string $descto
     * @return Saecom
     */
    public function setDescto($descto)
    {
        $this->descto = $descto;

        return $this;
    }

    /**
     * Get descto
     *
     * @return string 
     */
    public function getDescto()
    {
        return $this->descto;
    }

    /**
     * Set fletes
     *
     * @param string $fletes
     * @return Saecom
     */
    public function setFletes($fletes)
    {
        $this->fletes = $fletes;

        return $this;
    }

    /**
     * Get fletes
     *
     * @return string 
     */
    public function getFletes()
    {
        return $this->fletes;
    }

    /**
     * Set contado
     *
     * @param string $contado
     * @return Saecom
     */
    public function setContado($contado)
    {
        $this->contado = $contado;

        return $this;
    }

    /**
     * Get contado
     *
     * @return string 
     */
    public function getContado()
    {
        return $this->contado;
    }

    /**
     * Set credito
     *
     * @param string $credito
     * @return Saecom
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return string 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set nrocomps
     *
     * @param integer $nrocomps
     * @return Saecom
     */
    public function setNrocomps($nrocomps)
    {
        $this->nrocomps = $nrocomps;

        return $this;
    }

    /**
     * Get nrocomps
     *
     * @return integer 
     */
    public function getNrocomps()
    {
        return $this->nrocomps;
    }

    /**
     * Set nrodevol
     *
     * @param integer $nrodevol
     * @return Saecom
     */
    public function setNrodevol($nrodevol)
    {
        $this->nrodevol = $nrodevol;

        return $this;
    }

    /**
     * Get nrodevol
     *
     * @return integer 
     */
    public function getNrodevol()
    {
        return $this->nrodevol;
    }
}
