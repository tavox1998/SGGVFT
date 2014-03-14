<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbfdcdet
 *
 * @ORM\Table(name="SBFDCDET", indexes={@ORM\Index(name="SBFDCDET_IX1", columns={"NLinea"})})
 * @ORM\Entity
 */
class Sbfdcdet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="NLinea", type="integer", nullable=false)
     */
    private $nlinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoOpe", type="integer", nullable=false)
     */
    private $tipoope = '0';

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
     * @var integer
     *
     * @ORM\Column(name="TDC", type="integer", nullable=false)
     */
    private $tdc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ReqBan", type="text", length=16, nullable=false)
     */
    private $reqban;

    /**
     * @var string
     *
     * @ORM\Column(name="ReqCts", type="text", length=16, nullable=false)
     */
    private $reqcts;

    /**
     * @var string
     *
     * @ORM\Column(name="ReqOpe", type="text", length=16, nullable=false)
     */
    private $reqope;

    /**
     * @var string
     *
     * @ORM\Column(name="StCDCD", type="string", length=10, nullable=false)
     */
    private $stcdcd;



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
     * Set nlinea
     *
     * @param integer $nlinea
     * @return Sbfdcdet
     */
    public function setNlinea($nlinea)
    {
        $this->nlinea = $nlinea;

        return $this;
    }

    /**
     * Get nlinea
     *
     * @return integer 
     */
    public function getNlinea()
    {
        return $this->nlinea;
    }

    /**
     * Set tipoope
     *
     * @param integer $tipoope
     * @return Sbfdcdet
     */
    public function setTipoope($tipoope)
    {
        $this->tipoope = $tipoope;

        return $this;
    }

    /**
     * Get tipoope
     *
     * @return integer 
     */
    public function getTipoope()
    {
        return $this->tipoope;
    }

    /**
     * Set codcta
     *
     * @param string $codcta
     * @return Sbfdcdet
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
     * @return Sbfdcdet
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
     * Set tdc
     *
     * @param integer $tdc
     * @return Sbfdcdet
     */
    public function setTdc($tdc)
    {
        $this->tdc = $tdc;

        return $this;
    }

    /**
     * Get tdc
     *
     * @return integer 
     */
    public function getTdc()
    {
        return $this->tdc;
    }

    /**
     * Set reqban
     *
     * @param string $reqban
     * @return Sbfdcdet
     */
    public function setReqban($reqban)
    {
        $this->reqban = $reqban;

        return $this;
    }

    /**
     * Get reqban
     *
     * @return string 
     */
    public function getReqban()
    {
        return $this->reqban;
    }

    /**
     * Set reqcts
     *
     * @param string $reqcts
     * @return Sbfdcdet
     */
    public function setReqcts($reqcts)
    {
        $this->reqcts = $reqcts;

        return $this;
    }

    /**
     * Get reqcts
     *
     * @return string 
     */
    public function getReqcts()
    {
        return $this->reqcts;
    }

    /**
     * Set reqope
     *
     * @param string $reqope
     * @return Sbfdcdet
     */
    public function setReqope($reqope)
    {
        $this->reqope = $reqope;

        return $this;
    }

    /**
     * Get reqope
     *
     * @return string 
     */
    public function getReqope()
    {
        return $this->reqope;
    }

    /**
     * Set stcdcd
     *
     * @param string $stcdcd
     * @return Sbfdcdet
     */
    public function setStcdcd($stcdcd)
    {
        $this->stcdcd = $stcdcd;

        return $this;
    }

    /**
     * Get stcdcd
     *
     * @return string 
     */
    public function getStcdcd()
    {
        return $this->stcdcd;
    }
}
