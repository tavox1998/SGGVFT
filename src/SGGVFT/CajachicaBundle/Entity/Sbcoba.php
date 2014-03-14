<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbcoba
 *
 * @ORM\Table(name="SBCOBA")
 * @ORM\Entity
 */
class Sbcoba
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codbanc;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoDoc", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipodoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValueInt", type="integer", nullable=false)
     */
    private $valueint = '0';



    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbcoba
     */
    public function setCodbanc($codbanc)
    {
        $this->codbanc = $codbanc;

        return $this;
    }

    /**
     * Get codbanc
     *
     * @return string 
     */
    public function getCodbanc()
    {
        return $this->codbanc;
    }

    /**
     * Set tipodoc
     *
     * @param string $tipodoc
     * @return Sbcoba
     */
    public function setTipodoc($tipodoc)
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }

    /**
     * Get tipodoc
     *
     * @return string 
     */
    public function getTipodoc()
    {
        return $this->tipodoc;
    }

    /**
     * Set valueint
     *
     * @param integer $valueint
     * @return Sbcoba
     */
    public function setValueint($valueint)
    {
        $this->valueint = $valueint;

        return $this;
    }

    /**
     * Get valueint
     *
     * @return integer 
     */
    public function getValueint()
    {
        return $this->valueint;
    }
}
