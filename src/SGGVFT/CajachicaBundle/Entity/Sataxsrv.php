<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sataxsrv
 *
 * @ORM\Table(name="SATAXSRV")
 * @ORM\Entity
 */
class Sataxsrv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodServ", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codserv;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTaxs", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codtaxs;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPorct", type="smallint", nullable=false)
     */
    private $esporct = '0';



    /**
     * Set codserv
     *
     * @param string $codserv
     * @return Sataxsrv
     */
    public function setCodserv($codserv)
    {
        $this->codserv = $codserv;

        return $this;
    }

    /**
     * Get codserv
     *
     * @return string 
     */
    public function getCodserv()
    {
        return $this->codserv;
    }

    /**
     * Set codtaxs
     *
     * @param string $codtaxs
     * @return Sataxsrv
     */
    public function setCodtaxs($codtaxs)
    {
        $this->codtaxs = $codtaxs;

        return $this;
    }

    /**
     * Get codtaxs
     *
     * @return string 
     */
    public function getCodtaxs()
    {
        return $this->codtaxs;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sataxsrv
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
     * Set esporct
     *
     * @param integer $esporct
     * @return Sataxsrv
     */
    public function setEsporct($esporct)
    {
        $this->esporct = $esporct;

        return $this;
    }

    /**
     * Get esporct
     *
     * @return integer 
     */
    public function getEsporct()
    {
        return $this->esporct;
    }
}
