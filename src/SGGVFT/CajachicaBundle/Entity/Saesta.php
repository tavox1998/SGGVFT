<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saesta
 *
 * @ORM\Table(name="SAESTA")
 * @ORM\Entity
 */
class Saesta
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codesta;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=50, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codsucu = '00000';

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=false)
     */
    private $codusua = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AutSRI", type="string", length=10, nullable=true)
     */
    private $autsri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaSRI", type="datetime", nullable=true)
     */
    private $fechasri;

    /**
     * @var string
     *
     * @ORM\Column(name="PtoEmision", type="string", length=10, nullable=true)
     */
    private $ptoemision;



    /**
     * Set codesta
     *
     * @param string $codesta
     * @return Saesta
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
     * Set descrip
     *
     * @param string $descrip
     * @return Saesta
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saesta
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

    /**
     * Set codusua
     *
     * @param string $codusua
     * @return Saesta
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
     * Set autsri
     *
     * @param string $autsri
     * @return Saesta
     */
    public function setAutsri($autsri)
    {
        $this->autsri = $autsri;

        return $this;
    }

    /**
     * Get autsri
     *
     * @return string 
     */
    public function getAutsri()
    {
        return $this->autsri;
    }

    /**
     * Set fechasri
     *
     * @param \DateTime $fechasri
     * @return Saesta
     */
    public function setFechasri($fechasri)
    {
        $this->fechasri = $fechasri;

        return $this;
    }

    /**
     * Get fechasri
     *
     * @return \DateTime 
     */
    public function getFechasri()
    {
        return $this->fechasri;
    }

    /**
     * Set ptoemision
     *
     * @param string $ptoemision
     * @return Saesta
     */
    public function setPtoemision($ptoemision)
    {
        $this->ptoemision = $ptoemision;

        return $this;
    }

    /**
     * Get ptoemision
     *
     * @return string 
     */
    public function getPtoemision()
    {
        return $this->ptoemision;
    }
}
