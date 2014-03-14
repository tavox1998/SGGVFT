<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbopdpag
 *
 * @ORM\Table(name="SBOPDPAG")
 * @ORM\Entity
 */
class Sbopdpag
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
     * @ORM\Column(name="NroOPago", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUCxP", type="integer", nullable=false)
     */
    private $nroucxp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCxP", type="string", length=5, nullable=false)
     */
    private $tipocxp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=false)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=false)
     */
    private $fechav;

    /**
     * @var string
     *
     * @ORM\Column(name="Document", type="string", length=50, nullable=false)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=15, nullable=false)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoreten = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sbopdpag
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
     * Set nroopago
     *
     * @param string $nroopago
     * @return Sbopdpag
     */
    public function setNroopago($nroopago)
    {
        $this->nroopago = $nroopago;

        return $this;
    }

    /**
     * Get nroopago
     *
     * @return string 
     */
    public function getNroopago()
    {
        return $this->nroopago;
    }

    /**
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Sbopdpag
     */
    public function setNrolinea($nrolinea)
    {
        $this->nrolinea = $nrolinea;

        return $this;
    }

    /**
     * Get nrolinea
     *
     * @return integer 
     */
    public function getNrolinea()
    {
        return $this->nrolinea;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Sbopdpag
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set nroucxp
     *
     * @param integer $nroucxp
     * @return Sbopdpag
     */
    public function setNroucxp($nroucxp)
    {
        $this->nroucxp = $nroucxp;

        return $this;
    }

    /**
     * Get nroucxp
     *
     * @return integer 
     */
    public function getNroucxp()
    {
        return $this->nroucxp;
    }

    /**
     * Set tipocxp
     *
     * @param string $tipocxp
     * @return Sbopdpag
     */
    public function setTipocxp($tipocxp)
    {
        $this->tipocxp = $tipocxp;

        return $this;
    }

    /**
     * Get tipocxp
     *
     * @return string 
     */
    public function getTipocxp()
    {
        return $this->tipocxp;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sbopdpag
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

    /**
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Sbopdpag
     */
    public function setFechav($fechav)
    {
        $this->fechav = $fechav;

        return $this;
    }

    /**
     * Get fechav
     *
     * @return \DateTime 
     */
    public function getFechav()
    {
        return $this->fechav;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Sbopdpag
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sbopdpag
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
     * Set saldo
     *
     * @param string $saldo
     * @return Sbopdpag
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbopdpag
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
     * Set mtoreten
     *
     * @param string $mtoreten
     * @return Sbopdpag
     */
    public function setMtoreten($mtoreten)
    {
        $this->mtoreten = $mtoreten;

        return $this;
    }

    /**
     * Get mtoreten
     *
     * @return string 
     */
    public function getMtoreten()
    {
        return $this->mtoreten;
    }
}
