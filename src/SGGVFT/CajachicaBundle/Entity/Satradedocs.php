<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Satradedocs
 *
 * @ORM\Table(name="SATRADEDOCS")
 * @ORM\Entity
 */
class Satradedocs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pending", type="smallint", nullable=false)
     */
    private $pending = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TradeDoc", type="text", length=16, nullable=true)
     */
    private $tradedoc;



    /**
     * Get nrounico
     *
     * @return integer 
     */
    public function getNrounico()
    {
        return $this->nrounico;
    }

    /**
     * Set pending
     *
     * @param integer $pending
     * @return Satradedocs
     */
    public function setPending($pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * Get pending
     *
     * @return integer 
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set tradedoc
     *
     * @param string $tradedoc
     * @return Satradedocs
     */
    public function setTradedoc($tradedoc)
    {
        $this->tradedoc = $tradedoc;

        return $this;
    }

    /**
     * Get tradedoc
     *
     * @return string 
     */
    public function getTradedoc()
    {
        return $this->tradedoc;
    }
}
