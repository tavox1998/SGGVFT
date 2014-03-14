<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saevta
 *
 * @ORM\Table(name="SAEVTA")
 * @ORM\Entity
 */
class Saevta
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
     * @ORM\Column(name="MtoVentas", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoventas = '0';

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
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

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
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroFacts", type="integer", nullable=false)
     */
    private $nrofacts = '0';

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
     * @return Saevta
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
     * Set mtoventas
     *
     * @param string $mtoventas
     * @return Saevta
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
     * Set descto
     *
     * @param string $descto
     * @return Saevta
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
     * @return Saevta
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
     * Set mtotax
     *
     * @param string $mtotax
     * @return Saevta
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
     * Set contado
     *
     * @param string $contado
     * @return Saevta
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
     * @return Saevta
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
     * Set costo
     *
     * @param string $costo
     * @return Saevta
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set nrofacts
     *
     * @param integer $nrofacts
     * @return Saevta
     */
    public function setNrofacts($nrofacts)
    {
        $this->nrofacts = $nrofacts;

        return $this;
    }

    /**
     * Get nrofacts
     *
     * @return integer 
     */
    public function getNrofacts()
    {
        return $this->nrofacts;
    }

    /**
     * Set nrodevol
     *
     * @param integer $nrodevol
     * @return Saevta
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
