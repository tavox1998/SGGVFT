<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saclicnv
 *
 * @ORM\Table(name="SACLICNV")
 * @ORM\Entity
 */
class Saclicnv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodConv", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codconv;

    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codclie;



    /**
     * Set codconv
     *
     * @param string $codconv
     * @return Saclicnv
     */
    public function setCodconv($codconv)
    {
        $this->codconv = $codconv;

        return $this;
    }

    /**
     * Get codconv
     *
     * @return string 
     */
    public function getCodconv()
    {
        return $this->codconv;
    }

    /**
     * Set codclie
     *
     * @param string $codclie
     * @return Saclicnv
     */
    public function setCodclie($codclie)
    {
        $this->codclie = $codclie;

        return $this;
    }

    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }
}
