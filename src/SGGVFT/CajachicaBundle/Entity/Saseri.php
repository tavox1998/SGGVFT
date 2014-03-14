<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saseri
 *
 * @ORM\Table(name="SASERI")
 * @ORM\Entity
 */
class Saseri
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
     * @return Saseri
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
     * @return Saseri
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
     * Set nroserial
     *
     * @param string $nroserial
     * @return Saseri
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
