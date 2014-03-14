<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saipavta
 *
 * @ORM\Table(name="SAIPAVTA")
 * @ORM\Entity
 */
class Saipavta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoFac", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipofac;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoPag", type="integer", nullable=false)
     */
    private $tipopag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodPago", type="string", length=10, nullable=true)
     */
    private $codpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Propina", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $propina = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $impuesto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetencT", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $retenct = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip1", type="string", length=30, nullable=true)
     */
    private $descrip1;

    /**
     * @var string
     *
     * @ORM\Column(name="Cuenta", type="string", length=20, nullable=true)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NroLote", type="string", length=5, nullable=true)
     */
    private $nrolote;

    /**
     * @var string
     *
     * @ORM\Column(name="Afiliado", type="string", length=15, nullable=true)
     */
    private $afiliado;

    /**
     * @var string
     *
     * @ORM\Column(name="Terminal", type="string", length=5, nullable=true)
     */
    private $terminal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var string
     *
     * @ORM\Column(name="Aprobado", type="string", length=10, nullable=true)
     */
    private $aprobado;

    /**
     * @var string
     *
     * @ORM\Column(name="Refere", type="string", length=10, nullable=true)
     */
    private $refere;

    /**
     * @var string
     *
     * @ORM\Column(name="Traza", type="string", length=10, nullable=true)
     */
    private $traza;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saipavta
     */
    public function setNrounico($nrounico)
    {
        $this->nrounico = $nrounico;

        return $this;
    }

    /**
     * Get nrounico
     *
     * @return integer 
     */
    public function getNrounico()
    {
        return $this->nrounico;
    }

    /**
     * Set tipofac
     *
     * @param string $tipofac
     * @return Saipavta
     */
    public function setTipofac($tipofac)
    {
        $this->tipofac = $tipofac;

        return $this;
    }

    /**
     * Get tipofac
     *
     * @return string 
     */
    public function getTipofac()
    {
        return $this->tipofac;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saipavta
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
     * Set tipopag
     *
     * @param integer $tipopag
     * @return Saipavta
     */
    public function setTipopag($tipopag)
    {
        $this->tipopag = $tipopag;

        return $this;
    }

    /**
     * Get tipopag
     *
     * @return integer 
     */
    public function getTipopag()
    {
        return $this->tipopag;
    }

    /**
     * Set codpago
     *
     * @param string $codpago
     * @return Saipavta
     */
    public function setCodpago($codpago)
    {
        $this->codpago = $codpago;

        return $this;
    }

    /**
     * Get codpago
     *
     * @return string 
     */
    public function getCodpago()
    {
        return $this->codpago;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saipavta
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
     * Set monto
     *
     * @param string $monto
     * @return Saipavta
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
     * Set propina
     *
     * @param string $propina
     * @return Saipavta
     */
    public function setPropina($propina)
    {
        $this->propina = $propina;

        return $this;
    }

    /**
     * Get propina
     *
     * @return string 
     */
    public function getPropina()
    {
        return $this->propina;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Saipavta
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
     * Set retenct
     *
     * @param string $retenct
     * @return Saipavta
     */
    public function setRetenct($retenct)
    {
        $this->retenct = $retenct;

        return $this;
    }

    /**
     * Get retenct
     *
     * @return string 
     */
    public function getRetenct()
    {
        return $this->retenct;
    }

    /**
     * Set descrip1
     *
     * @param string $descrip1
     * @return Saipavta
     */
    public function setDescrip1($descrip1)
    {
        $this->descrip1 = $descrip1;

        return $this;
    }

    /**
     * Get descrip1
     *
     * @return string 
     */
    public function getDescrip1()
    {
        return $this->descrip1;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return Saipavta
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set nrolote
     *
     * @param string $nrolote
     * @return Saipavta
     */
    public function setNrolote($nrolote)
    {
        $this->nrolote = $nrolote;

        return $this;
    }

    /**
     * Get nrolote
     *
     * @return string 
     */
    public function getNrolote()
    {
        return $this->nrolote;
    }

    /**
     * Set afiliado
     *
     * @param string $afiliado
     * @return Saipavta
     */
    public function setAfiliado($afiliado)
    {
        $this->afiliado = $afiliado;

        return $this;
    }

    /**
     * Get afiliado
     *
     * @return string 
     */
    public function getAfiliado()
    {
        return $this->afiliado;
    }

    /**
     * Set terminal
     *
     * @param string $terminal
     * @return Saipavta
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Get terminal
     *
     * @return string 
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saipavta
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
     * Set aprobado
     *
     * @param string $aprobado
     * @return Saipavta
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return string 
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set refere
     *
     * @param string $refere
     * @return Saipavta
     */
    public function setRefere($refere)
    {
        $this->refere = $refere;

        return $this;
    }

    /**
     * Get refere
     *
     * @return string 
     */
    public function getRefere()
    {
        return $this->refere;
    }

    /**
     * Set traza
     *
     * @param string $traza
     * @return Saipavta
     */
    public function setTraza($traza)
    {
        $this->traza = $traza;

        return $this;
    }

    /**
     * Get traza
     *
     * @return string 
     */
    public function getTraza()
    {
        return $this->traza;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saipavta
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
}
