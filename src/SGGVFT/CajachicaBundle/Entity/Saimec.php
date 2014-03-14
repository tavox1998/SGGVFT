<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saimec
 *
 * @ORM\Table(name="SAIMEC")
 * @ORM\Entity
 */
class Saimec
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmeca;

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=16, nullable=true)
     */
    private $imagen;



    /**
     * Get codmeca
     *
     * @return string 
     */
    public function getCodmeca()
    {
        return $this->codmeca;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Saimec
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
