<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacfac
 *
 * @ORM\Table(name="SACFAC")
 * @ORM\Entity
 */
class Sacfac
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
     * @var string
     *
     * @ORM\Column(name="TipoTra", type="string", length=2, nullable=false)
     */
    private $tipotra;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=true)
     */
    private $numerod;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaT", type="datetime", nullable=true)
     */
    private $fechat;



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
     * Set tipotra
     *
     * @param string $tipotra
     * @return Sacfac
     */
    public function setTipotra($tipotra)
    {
        $this->tipotra = $tipotra;

        return $this;
    }

    /**
     * Get tipotra
     *
     * @return string 
     */
    public function getTipotra()
    {
        return $this->tipotra;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sacfac
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
     * Set codesta
     *
     * @param string $codesta
     * @return Sacfac
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
     * @return Sacfac
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sacfac
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
     * Set fechat
     *
     * @param \DateTime $fechat
     * @return Sacfac
     */
    public function setFechat($fechat)
    {
        $this->fechat = $fechat;

        return $this;
    }

    /**
     * Get fechat
     *
     * @return \DateTime 
     */
    public function getFechat()
    {
        return $this->fechat;
    }
}
