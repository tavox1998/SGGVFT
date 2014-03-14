<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saeprv
 *
 * @ORM\Table(name="SAEPRV")
 * @ORM\Entity
 */
class Saeprv
{
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
     * @ORM\Column(name="Periodo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $periodo;

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
     * @var integer
     *
     * @ORM\Column(name="NroComps", type="integer", nullable=false)
     */
    private $nrocomps = '0';

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
     * Set codprov
     *
     * @param string $codprov
     * @return Saeprv
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
     * Set periodo
     *
     * @param string $periodo
     * @return Saeprv
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
     * Set credito
     *
     * @param string $credito
     * @return Saeprv
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
     * @return Saeprv
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
     * Set nrocomps
     *
     * @param integer $nrocomps
     * @return Saeprv
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
     * Set mtodevol
     *
     * @param string $mtodevol
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
     * @return Saeprv
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
