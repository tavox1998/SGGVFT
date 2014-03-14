<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sapais
 *
 * @ORM\Table(name="SAPAIS")
 * @ORM\Entity
 */
class Sapais
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
     * @ORM\Column(name="Pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="SPais", type="string", length=30, nullable=true)
     */
    private $spais;

    /**
     * @var string
     *
     * @ORM\Column(name="SEstado", type="string", length=30, nullable=true)
     */
    private $sestado;

    /**
     * @var string
     *
     * @ORM\Column(name="SCiudad", type="string", length=30, nullable=true)
     */
    private $sciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="SMunicipio", type="string", length=30, nullable=true)
     */
    private $smunicipio;



    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sapais
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
     * Set pais
     *
     * @param integer $pais
     * @return Sapais
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

    /**
     * Set spais
     *
     * @param string $spais
     * @return Sapais
     */
    public function setSpais($spais)
    {
        $this->spais = $spais;

        return $this;
    }

    /**
     * Get spais
     *
     * @return string 
     */
    public function getSpais()
    {
        return $this->spais;
    }

    /**
     * Set sestado
     *
     * @param string $sestado
     * @return Sapais
     */
    public function setSestado($sestado)
    {
        $this->sestado = $sestado;

        return $this;
    }

    /**
     * Get sestado
     *
     * @return string 
     */
    public function getSestado()
    {
        return $this->sestado;
    }

    /**
     * Set sciudad
     *
     * @param string $sciudad
     * @return Sapais
     */
    public function setSciudad($sciudad)
    {
        $this->sciudad = $sciudad;

        return $this;
    }

    /**
     * Get sciudad
     *
     * @return string 
     */
    public function getSciudad()
    {
        return $this->sciudad;
    }

    /**
     * Set smunicipio
     *
     * @param string $smunicipio
     * @return Sapais
     */
    public function setSmunicipio($smunicipio)
    {
        $this->smunicipio = $smunicipio;

        return $this;
    }

    /**
     * Get smunicipio
     *
     * @return string 
     */
    public function getSmunicipio()
    {
        return $this->smunicipio;
    }
}
