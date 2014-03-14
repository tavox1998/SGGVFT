<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saecli
 *
 * @ORM\Table(name="SAECLI")
 * @ORM\Entity
 */
class Saecli
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
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDevol", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodevol = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroDevol", type="integer", nullable=false)
     */
    private $nrodevol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoPagos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtopagos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroPagos", type="integer", nullable=false)
     */
    private $nropagos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoNDebito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtondebito = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroNDebito", type="integer", nullable=false)
     */
    private $nrondebito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoNCredito", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoncredito = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroNCredito", type="integer", nullable=false)
     */
    private $nroncredito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoRetenImp", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoretenimp = '0';



    /**
     * Set codclie
     *
     * @param string $codclie
     * @return Saecli
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
     * @return Saecli
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
     * @return Saecli
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
     * @return Saecli
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
     * @return Saecli
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
     * Set descto
     *
     * @param string $descto
     * @return Saecli
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
     * Set costo
     *
     * @param string $costo
     * @return Saecli
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
     * Set mtodevol
     *
     * @param string $mtodevol
     * @return Saecli
     */
    public function setMtodevol($mtodevol)
    {
        $this->mtodevol = $mtodevol;

        return $this;
    }

    /**
     * Get mtodevol
     *
     * @return string 
     */
    public function getMtodevol()
    {
        return $this->mtodevol;
    }

    /**
     * Set nrodevol
     *
     * @param integer $nrodevol
     * @return Saecli
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

    /**
     * Set mtopagos
     *
     * @param string $mtopagos
     * @return Saecli
     */
    public function setMtopagos($mtopagos)
    {
        $this->mtopagos = $mtopagos;

        return $this;
    }

    /**
     * Get mtopagos
     *
     * @return string 
     */
    public function getMtopagos()
    {
        return $this->mtopagos;
    }

    /**
     * Set nropagos
     *
     * @param integer $nropagos
     * @return Saecli
     */
    public function setNropagos($nropagos)
    {
        $this->nropagos = $nropagos;

        return $this;
    }

    /**
     * Get nropagos
     *
     * @return integer 
     */
    public function getNropagos()
    {
        return $this->nropagos;
    }

    /**
     * Set mtondebito
     *
     * @param string $mtondebito
     * @return Saecli
     */
    public function setMtondebito($mtondebito)
    {
        $this->mtondebito = $mtondebito;

        return $this;
    }

    /**
     * Get mtondebito
     *
     * @return string 
     */
    public function getMtondebito()
    {
        return $this->mtondebito;
    }

    /**
     * Set nrondebito
     *
     * @param integer $nrondebito
     * @return Saecli
     */
    public function setNrondebito($nrondebito)
    {
        $this->nrondebito = $nrondebito;

        return $this;
    }

    /**
     * Get nrondebito
     *
     * @return integer 
     */
    public function getNrondebito()
    {
        return $this->nrondebito;
    }

    /**
     * Set mtoncredito
     *
     * @param string $mtoncredito
     * @return Saecli
     */
    public function setMtoncredito($mtoncredito)
    {
        $this->mtoncredito = $mtoncredito;

        return $this;
    }

    /**
     * Get mtoncredito
     *
     * @return string 
     */
    public function getMtoncredito()
    {
        return $this->mtoncredito;
    }

    /**
     * Set nroncredito
     *
     * @param integer $nroncredito
     * @return Saecli
     */
    public function setNroncredito($nroncredito)
    {
        $this->nroncredito = $nroncredito;

        return $this;
    }

    /**
     * Get nroncredito
     *
     * @return integer 
     */
    public function getNroncredito()
    {
        return $this->nroncredito;
    }

    /**
     * Set mtoretenimp
     *
     * @param string $mtoretenimp
     * @return Saecli
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
}
