<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saclilot
 *
 * @ORM\Table(name="SACLILOT")
 * @ORM\Entity
 */
class Saclilot
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodFacL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codfacl;

    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codclie;



    /**
     * Set codfacl
     *
     * @param string $codfacl
     * @return Saclilot
     */
    public function setCodfacl($codfacl)
    {
        $this->codfacl = $codfacl;

        return $this;
    }

    /**
     * Get codfacl
     *
     * @return string 
     */
    public function getCodfacl()
    {
        return $this->codfacl;
    }

    /**
     * Set codclie
     *
     * @param string $codclie
     * @return Saclilot
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
