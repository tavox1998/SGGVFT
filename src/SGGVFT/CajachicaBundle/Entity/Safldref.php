<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Safldref
 *
 * @ORM\Table(name="SAFLDREF")
 * @ORM\Entity
 */
class Safldref
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tabla", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabla;

    /**
     * @var integer
     *
     * @ORM\Column(name="NCampo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ncampo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoC", type="integer", nullable=false)
     */
    private $tipoc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=70, nullable=true)
     */
    private $descrip;



    /**
     * Set tabla
     *
     * @param string $tabla
     * @return Safldref
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string 
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set ncampo
     *
     * @param integer $ncampo
     * @return Safldref
     */
    public function setNcampo($ncampo)
    {
        $this->ncampo = $ncampo;

        return $this;
    }

    /**
     * Get ncampo
     *
     * @return integer 
     */
    public function getNcampo()
    {
        return $this->ncampo;
    }

    /**
     * Set tipoc
     *
     * @param integer $tipoc
     * @return Safldref
     */
    public function setTipoc($tipoc)
    {
        $this->tipoc = $tipoc;

        return $this;
    }

    /**
     * Get tipoc
     *
     * @return integer 
     */
    public function getTipoc()
    {
        return $this->tipoc;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Safldref
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }
}
