<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sasericon
 *
 * @ORM\Table(name="SASERICON")
 * @ORM\Entity
 */
class Sasericon
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprod;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codubic;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroRegi", type="integer", nullable=false)
     */
    private $nroregi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NroSerial", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroserial;



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Sasericon
     */
    public function setCodprod($codprod)
    {
        $this->codprod = $codprod;

        return $this;
    }

    /**
     * Get codprod
     *
     * @return string 
     */
    public function getCodprod()
    {
        return $this->codprod;
    }

    /**
     * Set codubic
     *
     * @param string $codubic
     * @return Sasericon
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
     * Set nroregi
     *
     * @param integer $nroregi
     * @return Sasericon
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
     * Set nroserial
     *
     * @param string $nroserial
     * @return Sasericon
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
}
