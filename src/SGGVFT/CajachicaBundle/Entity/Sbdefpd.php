<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbdefpd
 *
 * @ORM\Table(name="SBDEFPD")
 * @ORM\Entity
 */
class Sbdefpd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NDefAPP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ndefapp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoCDT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipocdt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nlinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NCampo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncampo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoDat", type="integer", nullable=false)
     */
    private $tipodat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Data", type="string", length=100, nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="Formato", type="string", length=50, nullable=false)
     */
    private $formato;



    /**
     * Set ndefapp
     *
     * @param integer $ndefapp
     * @return Sbdefpd
     */
    public function setNdefapp($ndefapp)
    {
        $this->ndefapp = $ndefapp;

        return $this;
    }

    /**
     * Get ndefapp
     *
     * @return integer 
     */
    public function getNdefapp()
    {
        return $this->ndefapp;
    }

    /**
     * Set tipocdt
     *
     * @param integer $tipocdt
     * @return Sbdefpd
     */
    public function setTipocdt($tipocdt)
    {
        $this->tipocdt = $tipocdt;

        return $this;
    }

    /**
     * Get tipocdt
     *
     * @return integer 
     */
    public function getTipocdt()
    {
        return $this->tipocdt;
    }

    /**
     * Set nlinea
     *
     * @param integer $nlinea
     * @return Sbdefpd
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
     * Set ncampo
     *
     * @param integer $ncampo
     * @return Sbdefpd
     */
    public function setNcampo($ncampo)
    {
        $this->ncampo = $ncampo;

        return $this;
    }

    /**
     * Get ncampo
     *
     * @return integer 
     */
    public function getNcampo()
    {
        return $this->ncampo;
    }

    /**
     * Set tipodat
     *
     * @param integer $tipodat
     * @return Sbdefpd
     */
    public function setTipodat($tipodat)
    {
        $this->tipodat = $tipodat;

        return $this;
    }

    /**
     * Get tipodat
     *
     * @return integer 
     */
    public function getTipodat()
    {
        return $this->tipodat;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Sbdefpd
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return Sbdefpd
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }
}
