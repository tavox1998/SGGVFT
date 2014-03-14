<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saiprd
 *
 * @ORM\Table(name="SAIPRD")
 * @ORM\Entity
 */
class Saiprd
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codprod;

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=16, nullable=true)
     */
    private $imagen;



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
     * Set imagen
     *
     * @param string $imagen
     * @return Saiprd
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
