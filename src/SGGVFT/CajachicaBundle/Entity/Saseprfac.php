<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saseprfac
 *
 * @ORM\Table(name="SASEPRFAC")
 * @ORM\Entity
 */
class Saseprfac
{
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
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLineaC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolineac = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NroSerial", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroserial;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=true)
     */
    private $coditem;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=true)
     */
    private $codubic;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsConsig", type="smallint", nullable=false)
     */
    private $esconsig = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set tipofac
     *
     * @param string $tipofac
     * @return Saseprfac
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
     * @return Saseprfac
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
     * @return Saseprfac
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
     * Set nrolineac
     *
     * @param integer $nrolineac
     * @return Saseprfac
     */
    public function setNrolineac($nrolineac)
    {
        $this->nrolineac = $nrolineac;

        return $this;
    }

    /**
     * Get nrolineac
     *
     * @return integer 
     */
    public function getNrolineac()
    {
        return $this->nrolineac;
    }

    /**
     * Set nroserial
     *
     * @param string $nroserial
     * @return Saseprfac
     */
    public function setNroserial($nroserial)
    {
        $this->nroserial = $nroserial;

        return $this;
    }

    /**
     * Get nroserial
     *
     * @return string 
     */
    public function getNroserial()
    {
        return $this->nroserial;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Saseprfac
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set coditem
     *
     * @param string $coditem
     * @return Saseprfac
     */
    public function setCoditem($coditem)
    {
        $this->coditem = $coditem;

        return $this;
    }

    /**
     * Get coditem
     *
     * @return string 
     */
    public function getCoditem()
    {
        return $this->coditem;
    }

    /**
     * Set codubic
     *
     * @param string $codubic
     * @return Saseprfac
     */
    public function setCodubic($codubic)
    {
        $this->codubic = $codubic;

        return $this;
    }

    /**
     * Get codubic
     *
     * @return string 
     */
    public function getCodubic()
    {
        return $this->codubic;
    }

    /**
     * Set esconsig
     *
     * @param integer $esconsig
     * @return Saseprfac
     */
    public function setEsconsig($esconsig)
    {
        $this->esconsig = $esconsig;

        return $this;
    }

    /**
     * Get esconsig
     *
     * @return integer 
     */
    public function getEsconsig()
    {
        return $this->esconsig;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saseprfac
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
