<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saeprd
 *
 * @ORM\Table(name="SAEPRD")
 * @ORM\Entity
 */
class Saeprd
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
     * @ORM\Column(name="Periodo", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="CntInicial", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cntinicial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExInicial", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exinicial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCompra", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocompra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CntCompra", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cntcompra = '0';

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
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCargos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocargos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CntCargos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cntcargos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDescarg", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodescarg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CntDescarg", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cntdescarg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExFinal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exfinal = '0';

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
     * @return Saeprd
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
     * Set periodo
     *
     * @param string $periodo
     * @return Saeprd
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
     * Set cntinicial
     *
     * @param string $cntinicial
     * @return Saeprd
     */
    public function setCntinicial($cntinicial)
    {
        $this->cntinicial = $cntinicial;

        return $this;
    }

    /**
     * Get cntinicial
     *
     * @return string 
     */
    public function getCntinicial()
    {
        return $this->cntinicial;
    }

    /**
     * Set exinicial
     *
     * @param string $exinicial
     * @return Saeprd
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
     * Set mtocompra
     *
     * @param string $mtocompra
     * @return Saeprd
     */
    public function setMtocompra($mtocompra)
    {
        $this->mtocompra = $mtocompra;

        return $this;
    }

    /**
     * Get mtocompra
     *
     * @return string 
     */
    public function getMtocompra()
    {
        return $this->mtocompra;
    }

    /**
     * Set cntcompra
     *
     * @param string $cntcompra
     * @return Saeprd
     */
    public function setCntcompra($cntcompra)
    {
        $this->cntcompra = $cntcompra;

        return $this;
    }

    /**
     * Get cntcompra
     *
     * @return string 
     */
    public function getCntcompra()
    {
        return $this->cntcompra;
    }

    /**
     * Set mtoventas
     *
     * @param string $mtoventas
     * @return Saeprd
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
     * @return Saeprd
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
     * Set costo
     *
     * @param string $costo
     * @return Saeprd
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
     * Set mtocargos
     *
     * @param string $mtocargos
     * @return Saeprd
     */
    public function setMtocargos($mtocargos)
    {
        $this->mtocargos = $mtocargos;

        return $this;
    }

    /**
     * Get mtocargos
     *
     * @return string 
     */
    public function getMtocargos()
    {
        return $this->mtocargos;
    }

    /**
     * Set cntcargos
     *
     * @param string $cntcargos
     * @return Saeprd
     */
    public function setCntcargos($cntcargos)
    {
        $this->cntcargos = $cntcargos;

        return $this;
    }

    /**
     * Get cntcargos
     *
     * @return string 
     */
    public function getCntcargos()
    {
        return $this->cntcargos;
    }

    /**
     * Set mtodescarg
     *
     * @param string $mtodescarg
     * @return Saeprd
     */
    public function setMtodescarg($mtodescarg)
    {
        $this->mtodescarg = $mtodescarg;

        return $this;
    }

    /**
     * Get mtodescarg
     *
     * @return string 
     */
    public function getMtodescarg()
    {
        return $this->mtodescarg;
    }

    /**
     * Set cntdescarg
     *
     * @param string $cntdescarg
     * @return Saeprd
     */
    public function setCntdescarg($cntdescarg)
    {
        $this->cntdescarg = $cntdescarg;

        return $this;
    }

    /**
     * Get cntdescarg
     *
     * @return string 
     */
    public function getCntdescarg()
    {
        return $this->cntdescarg;
    }

    /**
     * Set exfinal
     *
     * @param string $exfinal
     * @return Saeprd
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
     * Set costofinal
     *
     * @param string $costofinal
     * @return Saeprd
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
