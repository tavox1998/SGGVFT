<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sapagcxp
 *
 * @ORM\Table(name="SAPAGCXP")
 * @ORM\Entity
 */
class Sapagcxp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroPpal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroppal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroRegi", type="integer", nullable=false)
     */
    private $nroregi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCxP", type="string", length=2, nullable=true)
     */
    private $tipocxp;

    /**
     * @var string
     *
     * @ORM\Column(name="MontoDocA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $montodoca = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaO", type="datetime", nullable=true)
     */
    private $fechao;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BaseReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $basereten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var string
     *
     * @ORM\Column(name="CodRete", type="string", length=10, nullable=true)
     */
    private $codrete;

    /**
     * @var string
     *
     * @ORM\Column(name="BaseImpo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $baseimpo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TExento", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $texento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RetenIVA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $reteniva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Sustraendo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $sustraendo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set nroppal
     *
     * @param integer $nroppal
     * @return Sapagcxp
     */
    public function setNroppal($nroppal)
    {
        $this->nroppal = $nroppal;

        return $this;
    }

    /**
     * Get nroppal
     *
     * @return integer 
     */
    public function getNroppal()
    {
        return $this->nroppal;
    }

    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sapagcxp
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
     * Set nroregi
     *
     * @param integer $nroregi
     * @return Sapagcxp
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
     * Set tipocxp
     *
     * @param string $tipocxp
     * @return Sapagcxp
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
     * Set montodoca
     *
     * @param string $montodoca
     * @return Sapagcxp
     */
    public function setMontodoca($montodoca)
    {
        $this->montodoca = $montodoca;

        return $this;
    }

    /**
     * Get montodoca
     *
     * @return string 
     */
    public function getMontodoca()
    {
        return $this->montodoca;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sapagcxp
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
     * Set numerod
     *
     * @param string $numerod
     * @return Sapagcxp
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
     * Set descrip
     *
     * @param string $descrip
     * @return Sapagcxp
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sapagcxp
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
     * Set fechao
     *
     * @param \DateTime $fechao
     * @return Sapagcxp
     */
    public function setFechao($fechao)
    {
        $this->fechao = $fechao;

        return $this;
    }

    /**
     * Get fechao
     *
     * @return \DateTime 
     */
    public function getFechao()
    {
        return $this->fechao;
    }

    /**
     * Set esreten
     *
     * @param integer $esreten
     * @return Sapagcxp
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
     * Set basereten
     *
     * @param string $basereten
     * @return Sapagcxp
     */
    public function setBasereten($basereten)
    {
        $this->basereten = $basereten;

        return $this;
    }

    /**
     * Get basereten
     *
     * @return string 
     */
    public function getBasereten()
    {
        return $this->basereten;
    }

    /**
     * Set codoper
     *
     * @param string $codoper
     * @return Sapagcxp
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
     * Set codrete
     *
     * @param string $codrete
     * @return Sapagcxp
     */
    public function setCodrete($codrete)
    {
        $this->codrete = $codrete;

        return $this;
    }

    /**
     * Get codrete
     *
     * @return string 
     */
    public function getCodrete()
    {
        return $this->codrete;
    }

    /**
     * Set baseimpo
     *
     * @param string $baseimpo
     * @return Sapagcxp
     */
    public function setBaseimpo($baseimpo)
    {
        $this->baseimpo = $baseimpo;

        return $this;
    }

    /**
     * Get baseimpo
     *
     * @return string 
     */
    public function getBaseimpo()
    {
        return $this->baseimpo;
    }

    /**
     * Set texento
     *
     * @param string $texento
     * @return Sapagcxp
     */
    public function setTexento($texento)
    {
        $this->texento = $texento;

        return $this;
    }

    /**
     * Get texento
     *
     * @return string 
     */
    public function getTexento()
    {
        return $this->texento;
    }

    /**
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sapagcxp
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
     * Set reteniva
     *
     * @param string $reteniva
     * @return Sapagcxp
     */
    public function setReteniva($reteniva)
    {
        $this->reteniva = $reteniva;

        return $this;
    }

    /**
     * Get reteniva
     *
     * @return string 
     */
    public function getReteniva()
    {
        return $this->reteniva;
    }

    /**
     * Set sustraendo
     *
     * @param string $sustraendo
     * @return Sapagcxp
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

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sapagcxp
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
