<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sainiti
 *
 * @ORM\Table(name="SAINITI")
 * @ORM\Entity
 */
class Sainiti
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprod;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codubic;

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
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExInicial", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exinicial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExUndIni", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exundini = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExFinal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exfinal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExUndFinal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exundfinal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CostoFinal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costofinal = '0';



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Sainiti
     */
    public function setCodprod($codprod)
    {
        $this->codprod = $codprod;

        return $this;
    }

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
     * Set codubic
     *
     * @param string $codubic
     * @return Sainiti
     */
    public function setCodubic($codubic)
    {
        $this->codubic = $codubic;

        return $this;
    }

    /**
     * Get codubic
     *
     * @return string 
     */
    public function getCodubic()
    {
        return $this->codubic;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Sainiti
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
     * Set costo
     *
     * @param string $costo
     * @return Sainiti
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
     * Set exinicial
     *
     * @param string $exinicial
     * @return Sainiti
     */
    public function setExinicial($exinicial)
    {
        $this->exinicial = $exinicial;

        return $this;
    }

    /**
     * Get exinicial
     *
     * @return string 
     */
    public function getExinicial()
    {
        return $this->exinicial;
    }

    /**
     * Set exundini
     *
     * @param string $exundini
     * @return Sainiti
     */
    public function setExundini($exundini)
    {
        $this->exundini = $exundini;

        return $this;
    }

    /**
     * Get exundini
     *
     * @return string 
     */
    public function getExundini()
    {
        return $this->exundini;
    }

    /**
     * Set exfinal
     *
     * @param string $exfinal
     * @return Sainiti
     */
    public function setExfinal($exfinal)
    {
        $this->exfinal = $exfinal;

        return $this;
    }

    /**
     * Get exfinal
     *
     * @return string 
     */
    public function getExfinal()
    {
        return $this->exfinal;
    }

    /**
     * Set exundfinal
     *
     * @param string $exundfinal
     * @return Sainiti
     */
    public function setExundfinal($exundfinal)
    {
        $this->exundfinal = $exundfinal;

        return $this;
    }

    /**
     * Get exundfinal
     *
     * @return string 
     */
    public function getExundfinal()
    {
        return $this->exundfinal;
    }

    /**
     * Set costofinal
     *
     * @param string $costofinal
     * @return Sainiti
     */
    public function setCostofinal($costofinal)
    {
        $this->costofinal = $costofinal;

        return $this;
    }

    /**
     * Get costofinal
     *
     * @return string 
     */
    public function getCostofinal()
    {
        return $this->costofinal;
    }
}
