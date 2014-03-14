<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saicli
 *
 * @ORM\Table(name="SAICLI")
 * @ORM\Entity
 */
class Saicli
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codclie;

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=16, nullable=true)
     */
    private $imagen;



    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Saicli
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
}
