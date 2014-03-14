<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saofer
 *
 * @ORM\Table(name="SAOFER", indexes={@ORM\Index(name="SAOFER_IX1", columns={"Descrip"})})
 * @ORM\Entity
 */
class Saofer
{
    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=true)
     */
    private $codesta;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=true)
     */
    private $codusua;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOfe", type="smallint", nullable=false)
     */
    private $tipoofe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

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
     * @var string
     *
     * @ORM\Column(name="Frecuencia", type="string", length=7, nullable=true)
     */
    private $frecuencia;



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
     * @return Saofer
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
     * Set codesta
     *
     * @param string $codesta
     * @return Saofer
     */
    public function setCodesta($codesta)
    {
        $this->codesta = $codesta;

        return $this;
    }

    /**
     * Get codesta
     *
     * @return string 
     */
    public function getCodesta()
    {
        return $this->codesta;
    }

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Saofer
     */
    public function setCodusua($codusua)
    {
        $this->codusua = $codusua;

        return $this;
    }

    /**
     * Get codusua
     *
     * @return string 
     */
    public function getCodusua()
    {
        return $this->codusua;
    }

    /**
     * Set tipoofe
     *
     * @param integer $tipoofe
     * @return Saofer
     */
    public function setTipoofe($tipoofe)
    {
        $this->tipoofe = $tipoofe;

        return $this;
    }

    /**
     * Get tipoofe
     *
     * @return integer 
     */
    public function getTipoofe()
    {
        return $this->tipoofe;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Saofer
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

    /**
     * Set autori
     *
     * @param string $autori
     * @return Saofer
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
     * @return Saofer
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
     * @return Saofer
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
     * @return Saofer
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
     * @param string $frecuencia
     * @return Saofer
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;

        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return string 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }
}
