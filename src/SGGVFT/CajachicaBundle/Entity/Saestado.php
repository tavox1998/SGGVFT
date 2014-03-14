<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saestado
 *
 * @ORM\Table(name="SAESTADO")
 * @ORM\Entity
 */
class Saestado
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pais", type="integer", nullable=false)
     */
    private $pais = '0';



    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Saestado
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

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Saestado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param integer $pais
     * @return Saestado
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return integer 
     */
    public function getPais()
    {
        return $this->pais;
    }
}
