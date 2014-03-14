<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbopdcts
 *
 * @ORM\Table(name="SBOPDCTS")
 * @ORM\Entity
 */
class Sbopdcts
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
     * @var string
     *
     * @ORM\Column(name="CodCta", type="string", length=30, nullable=false)
     */
    private $codcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCenCto", type="string", length=30, nullable=false)
     */
    private $codcencto;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTercero", type="string", length=30, nullable=false)
     */
    private $codtercero;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDb", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCr", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocr = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Sbopdcts
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
     * @return Sbopdcts
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
     * @return Sbopdcts
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
     * @return Sbopdcts
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
     * Set codcta
     *
     * @param string $codcta
     * @return Sbopdcts
     */
    public function setCodcta($codcta)
    {
        $this->codcta = $codcta;

        return $this;
    }

    /**
     * Get codcta
     *
     * @return string 
     */
    public function getCodcta()
    {
        return $this->codcta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbopdcts
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set codcencto
     *
     * @param string $codcencto
     * @return Sbopdcts
     */
    public function setCodcencto($codcencto)
    {
        $this->codcencto = $codcencto;

        return $this;
    }

    /**
     * Get codcencto
     *
     * @return string 
     */
    public function getCodcencto()
    {
        return $this->codcencto;
    }

    /**
     * Set codtercero
     *
     * @param string $codtercero
     * @return Sbopdcts
     */
    public function setCodtercero($codtercero)
    {
        $this->codtercero = $codtercero;

        return $this;
    }

    /**
     * Get codtercero
     *
     * @return string 
     */
    public function getCodtercero()
    {
        return $this->codtercero;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbopdcts
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
     * Set mtodb
     *
     * @param string $mtodb
     * @return Sbopdcts
     */
    public function setMtodb($mtodb)
    {
        $this->mtodb = $mtodb;

        return $this;
    }

    /**
     * Get mtodb
     *
     * @return string 
     */
    public function getMtodb()
    {
        return $this->mtodb;
    }

    /**
     * Set mtocr
     *
     * @param string $mtocr
     * @return Sbopdcts
     */
    public function setMtocr($mtocr)
    {
        $this->mtocr = $mtocr;

        return $this;
    }

    /**
     * Get mtocr
     *
     * @return string 
     */
    public function getMtocr()
    {
        return $this->mtocr;
    }
}
