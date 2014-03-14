<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitemplani
 *
 * @ORM\Table(name="SAITEMPLANI")
 * @ORM\Entity
 */
class Saitemplani
{
    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

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
     * @ORM\Column(name="NroRegi", type="integer", nullable=false)
     */
    private $nroregi = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCxc", type="string", length=2, nullable=true)
     */
    private $tipocxc;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroC", type="string", length=15, nullable=false)
     */
    private $numeroc;

    /**
     * @var string
     *
     * @ORM\Column(name="Document", type="string", length=40, nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Saldo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $saldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelI", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $canceli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancela = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelE", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancele = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CancelG", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cancelg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DetalChq", type="string", length=40, nullable=true)
     */
    private $detalchq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PrxVisita", type="datetime", nullable=true)
     */
    private $prxvisita;



    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saitemplani
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
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Saitemplani
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
     * Set nroregi
     *
     * @param integer $nroregi
     * @return Saitemplani
     */
    public function setNroregi($nroregi)
    {
        $this->nroregi = $nroregi;

        return $this;
    }

    /**
     * Get nroregi
     *
     * @return integer 
     */
    public function getNroregi()
    {
        return $this->nroregi;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saitemplani
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
     * @return Saitemplani
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
     * Set tipocxc
     *
     * @param string $tipocxc
     * @return Saitemplani
     */
    public function setTipocxc($tipocxc)
    {
        $this->tipocxc = $tipocxc;

        return $this;
    }

    /**
     * Get tipocxc
     *
     * @return string 
     */
    public function getTipocxc()
    {
        return $this->tipocxc;
    }

    /**
     * Set numeroc
     *
     * @param string $numeroc
     * @return Saitemplani
     */
    public function setNumeroc($numeroc)
    {
        $this->numeroc = $numeroc;

        return $this;
    }

    /**
     * Get numeroc
     *
     * @return string 
     */
    public function getNumeroc()
    {
        return $this->numeroc;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Saitemplani
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
     * Set monto
     *
     * @param string $monto
     * @return Saitemplani
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
     * Set saldo
     *
     * @param string $saldo
     * @return Saitemplani
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
     * Set canceli
     *
     * @param string $canceli
     * @return Saitemplani
     */
    public function setCanceli($canceli)
    {
        $this->canceli = $canceli;

        return $this;
    }

    /**
     * Get canceli
     *
     * @return string 
     */
    public function getCanceli()
    {
        return $this->canceli;
    }

    /**
     * Set cancela
     *
     * @param string $cancela
     * @return Saitemplani
     */
    public function setCancela($cancela)
    {
        $this->cancela = $cancela;

        return $this;
    }

    /**
     * Get cancela
     *
     * @return string 
     */
    public function getCancela()
    {
        return $this->cancela;
    }

    /**
     * Set cancele
     *
     * @param string $cancele
     * @return Saitemplani
     */
    public function setCancele($cancele)
    {
        $this->cancele = $cancele;

        return $this;
    }

    /**
     * Get cancele
     *
     * @return string 
     */
    public function getCancele()
    {
        return $this->cancele;
    }

    /**
     * Set cancelc
     *
     * @param string $cancelc
     * @return Saitemplani
     */
    public function setCancelc($cancelc)
    {
        $this->cancelc = $cancelc;

        return $this;
    }

    /**
     * Get cancelc
     *
     * @return string 
     */
    public function getCancelc()
    {
        return $this->cancelc;
    }

    /**
     * Set cancelt
     *
     * @param string $cancelt
     * @return Saitemplani
     */
    public function setCancelt($cancelt)
    {
        $this->cancelt = $cancelt;

        return $this;
    }

    /**
     * Get cancelt
     *
     * @return string 
     */
    public function getCancelt()
    {
        return $this->cancelt;
    }

    /**
     * Set cancelg
     *
     * @param string $cancelg
     * @return Saitemplani
     */
    public function setCancelg($cancelg)
    {
        $this->cancelg = $cancelg;

        return $this;
    }

    /**
     * Get cancelg
     *
     * @return string 
     */
    public function getCancelg()
    {
        return $this->cancelg;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Saitemplani
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
     * Set detalchq
     *
     * @param string $detalchq
     * @return Saitemplani
     */
    public function setDetalchq($detalchq)
    {
        $this->detalchq = $detalchq;

        return $this;
    }

    /**
     * Get detalchq
     *
     * @return string 
     */
    public function getDetalchq()
    {
        return $this->detalchq;
    }

    /**
     * Set prxvisita
     *
     * @param \DateTime $prxvisita
     * @return Saitemplani
     */
    public function setPrxvisita($prxvisita)
    {
        $this->prxvisita = $prxvisita;

        return $this;
    }

    /**
     * Get prxvisita
     *
     * @return \DateTime 
     */
    public function getPrxvisita()
    {
        return $this->prxvisita;
    }
}
