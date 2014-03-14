<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saptoscliente
 *
 * @ORM\Table(name="SAPTOSCLIENTE")
 * @ORM\Entity
 */
class Saptoscliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codclie;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $periodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroFacts", type="integer", nullable=false)
     */
    private $nrofacts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Credito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $credito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Contado", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $contado = '0';

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
     * @ORM\Column(name="ValorPtos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $valorptos = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;



    /**
     * Set codclie
     *
     * @param string $codclie
     * @return Saptoscliente
     */
    public function setCodclie($codclie)
    {
        $this->codclie = $codclie;

        return $this;
    }

    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Saptoscliente
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
     * Set nrofacts
     *
     * @param integer $nrofacts
     * @return Saptoscliente
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
     * Set credito
     *
     * @param string $credito
     * @return Saptoscliente
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
     * Set contado
     *
     * @param string $contado
     * @return Saptoscliente
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
     * Set mtoventas
     *
     * @param string $mtoventas
     * @return Saptoscliente
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
     * @return Saptoscliente
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
     * Set valorptos
     *
     * @param string $valorptos
     * @return Saptoscliente
     */
    public function setValorptos($valorptos)
    {
        $this->valorptos = $valorptos;

        return $this;
    }

    /**
     * Get valorptos
     *
     * @return string 
     */
    public function getValorptos()
    {
        return $this->valorptos;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saptoscliente
     */
    public function setFechae($fechae)
    {
        $this->fechae = $fechae;

        return $this;
    }

    /**
     * Get fechae
     *
     * @return \DateTime 
     */
    public function getFechae()
    {
        return $this->fechae;
    }
}
