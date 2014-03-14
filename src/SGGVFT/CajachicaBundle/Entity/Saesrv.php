<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saesrv
 *
 * @ORM\Table(name="SAESRV")
 * @ORM\Entity
 */
class Saesrv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodServ", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codserv;

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
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

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
     * Set codserv
     *
     * @param string $codserv
     * @return Saesrv
     */
    public function setCodserv($codserv)
    {
        $this->codserv = $codserv;

        return $this;
    }

    /**
     * Get codserv
     *
     * @return string 
     */
    public function getCodserv()
    {
        return $this->codserv;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Saesrv
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
     * @return Saesrv
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
     * @return Saesrv
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
     * @return Saesrv
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
     * Set mtocompra
     *
     * @param string $mtocompra
     * @return Saesrv
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
     * @return Saesrv
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
}
