<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saiven
 *
 * @ORM\Table(name="SAIVEN")
 * @ORM\Entity
 */
class Saiven
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=16, nullable=true)
     */
    private $imagen;



    /**
     * Get codvend
     *
     * @return string 
     */
    public function getCodvend()
    {
        return $this->codvend;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Saiven
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
