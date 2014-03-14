<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saequi
 *
 * @ORM\Table(name="SAEQUI")
 * @ORM\Entity
 */
class Saequi
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
     * @ORM\Column(name="CodAlte", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codalte;



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Saequi
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
     * Set codalte
     *
     * @param string $codalte
     * @return Saequi
     */
    public function setCodalte($codalte)
    {
        $this->codalte = $codalte;

        return $this;
    }

    /**
     * Get codalte
     *
     * @return string 
     */
    public function getCodalte()
    {
        return $this->codalte;
    }
}
