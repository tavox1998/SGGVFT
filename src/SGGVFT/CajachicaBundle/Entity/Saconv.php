<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saconv
 *
 * @ORM\Table(name="SACONV", indexes={@ORM\Index(name="SACONV_IX1", columns={"Descrip"})})
 * @ORM\Entity
 */
class Saconv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodConv", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codconv;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="Autori", type="string", length=40, nullable=true)
     */
    private $autori;

    /**
     * @var string
     *
     * @ORM\Column(name="Respon", type="string", length=40, nullable=true)
     */
    private $respon;

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
     * @var integer
     *
     * @ORM\Column(name="Frecuencia", type="integer", nullable=false)
     */
    private $frecuencia = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUC", type="datetime", nullable=true)
     */
    private $fechauc;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsFijo", type="smallint", nullable=false)
     */
    private $esfijo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoCnv", type="smallint", nullable=false)
     */
    private $tipocnv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsBase", type="smallint", nullable=false)
     */
    private $esbase = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';



    /**
     * Get codconv
     *
     * @return string 
     */
    public function getCodconv()
    {
        return $this->codconv;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saconv
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
     * Set autori
     *
     * @param string $autori
     * @return Saconv
     */
    public function setAutori($autori)
    {
        $this->autori = $autori;

        return $this;
    }

    /**
     * Get autori
     *
     * @return string 
     */
    public function getAutori()
    {
        return $this->autori;
    }

    /**
     * Set respon
     *
     * @param string $respon
     * @return Saconv
     */
    public function setRespon($respon)
    {
        $this->respon = $respon;

        return $this;
    }

    /**
     * Get respon
     *
     * @return string 
     */
    public function getRespon()
    {
        return $this->respon;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saconv
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
     * @return Saconv
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
     * Set frecuencia
     *
     * @param integer $frecuencia
     * @return Saconv
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;

        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return integer 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * Set fechauc
     *
     * @param \DateTime $fechauc
     * @return Saconv
     */
    public function setFechauc($fechauc)
    {
        $this->fechauc = $fechauc;

        return $this;
    }

    /**
     * Get fechauc
     *
     * @return \DateTime 
     */
    public function getFechauc()
    {
        return $this->fechauc;
    }

    /**
     * Set esfijo
     *
     * @param integer $esfijo
     * @return Saconv
     */
    public function setEsfijo($esfijo)
    {
        $this->esfijo = $esfijo;

        return $this;
    }

    /**
     * Get esfijo
     *
     * @return integer 
     */
    public function getEsfijo()
    {
        return $this->esfijo;
    }

    /**
     * Set tipocnv
     *
     * @param integer $tipocnv
     * @return Saconv
     */
    public function setTipocnv($tipocnv)
    {
        $this->tipocnv = $tipocnv;

        return $this;
    }

    /**
     * Get tipocnv
     *
     * @return integer 
     */
    public function getTipocnv()
    {
        return $this->tipocnv;
    }

    /**
     * Set esbase
     *
     * @param integer $esbase
     * @return Saconv
     */
    public function setEsbase($esbase)
    {
        $this->esbase = $esbase;

        return $this;
    }

    /**
     * Get esbase
     *
     * @return integer 
     */
    public function getEsbase()
    {
        return $this->esbase;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Saconv
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
