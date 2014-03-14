<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saeven
 *
 * @ORM\Table(name="SAEVEN")
 * @ORM\Entity
 */
class Saeven
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codvend;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoVentas", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoventas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoIngreso", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoingreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoComiVta", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomivta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoComiCob", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocomicob = '0';



    /**
     * Set codvend
     *
     * @param string $codvend
     * @return Saeven
     */
    public function setCodvend($codvend)
    {
        $this->codvend = $codvend;

        return $this;
    }

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
     * Set periodo
     *
     * @param string $periodo
     * @return Saeven
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set mtoventas
     *
     * @param string $mtoventas
     * @return Saeven
     */
    public function setMtoventas($mtoventas)
    {
        $this->mtoventas = $mtoventas;

        return $this;
    }

    /**
     * Get mtoventas
     *
     * @return string 
     */
    public function getMtoventas()
    {
        return $this->mtoventas;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Saeven
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set mtoingreso
     *
     * @param string $mtoingreso
     * @return Saeven
     */
    public function setMtoingreso($mtoingreso)
    {
        $this->mtoingreso = $mtoingreso;

        return $this;
    }

    /**
     * Get mtoingreso
     *
     * @return string 
     */
    public function getMtoingreso()
    {
        return $this->mtoingreso;
    }

    /**
     * Set mtocomivta
     *
     * @param string $mtocomivta
     * @return Saeven
     */
    public function setMtocomivta($mtocomivta)
    {
        $this->mtocomivta = $mtocomivta;

        return $this;
    }

    /**
     * Get mtocomivta
     *
     * @return string 
     */
    public function getMtocomivta()
    {
        return $this->mtocomivta;
    }

    /**
     * Set mtocomicob
     *
     * @param string $mtocomicob
     * @return Saeven
     */
    public function setMtocomicob($mtocomicob)
    {
        $this->mtocomicob = $mtocomicob;

        return $this;
    }

    /**
     * Get mtocomicob
     *
     * @return string 
     */
    public function getMtocomicob()
    {
        return $this->mtocomicob;
    }
}
