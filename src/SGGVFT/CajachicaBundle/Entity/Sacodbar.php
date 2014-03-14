<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacodbar
 *
 * @ORM\Table(name="SACODBAR", indexes={@ORM\Index(name="SACODBAR_IX1", columns={"CodProd"})})
 * @ORM\Entity
 */
class Sacodbar
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodAlte", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codalte;

    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     */
    private $codprod;



    /**
     * Get codalte
     *
     * @return string 
     */
    public function getCodalte()
    {
        return $this->codalte;
    }

    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Sacodbar
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
}
