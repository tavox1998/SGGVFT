<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saemec
 *
 * @ORM\Table(name="SAEMEC")
 * @ORM\Entity
 */
class Saemec
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codmeca;

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
     * @ORM\Column(name="CntVentas", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cntventas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comision = '0';



    /**
     * Set codmeca
     *
     * @param string $codmeca
     * @return Saemec
     */
    public function setCodmeca($codmeca)
    {
        $this->codmeca = $codmeca;

        return $this;
    }

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
     * Set periodo
     *
     * @param string $periodo
     * @return Saemec
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
     * @return Saemec
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
     * Set cntventas
     *
     * @param string $cntventas
     * @return Saemec
     */
    public function setCntventas($cntventas)
    {
        $this->cntventas = $cntventas;

        return $this;
    }

    /**
     * Get cntventas
     *
     * @return string 
     */
    public function getCntventas()
    {
        return $this->cntventas;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Saemec
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }
}
