<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salote
 *
 * @ORM\Table(name="SALOTE", indexes={@ORM\Index(name="SALOTE_IX1", columns={"CodProd", "CodUbic", "NroLote"}), @ORM\Index(name="SALOTE_IX2", columns={"CodProd", "CodUbic", "FechaE"})})
 * @ORM\Entity
 */
class Salote
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
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=true)
     */
    private $codubic;

    /**
     * @var string
     *
     * @ORM\Column(name="NroLote", type="string", length=20, nullable=true)
     */
    private $nrolote;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $preciou = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $preciou1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $preciou2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $preciou3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadU", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadu = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

    /**
     * @var string
     *
     * @ORM\Column(name="PuestoI", type="string", length=10, nullable=true)
     */
    private $puestoi;



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Salote
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Salote
     */
    public function setNrounico($nrounico)
    {
        $this->nrounico = $nrounico;

        return $this;
    }

    /**
     * Get nrounico
     *
     * @return integer 
     */
    public function getNrounico()
    {
        return $this->nrounico;
    }

    /**
     * Set codubic
     *
     * @param string $codubic
     * @return Salote
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
     * Set nrolote
     *
     * @param string $nrolote
     * @return Salote
     */
    public function setNrolote($nrolote)
    {
        $this->nrolote = $nrolote;

        return $this;
    }

    /**
     * Get nrolote
     *
     * @return string 
     */
    public function getNrolote()
    {
        return $this->nrolote;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Salote
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
     * Set precio
     *
     * @param string $precio
     * @return Salote
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set preciou
     *
     * @param string $preciou
     * @return Salote
     */
    public function setPreciou($preciou)
    {
        $this->preciou = $preciou;

        return $this;
    }

    /**
     * Get preciou
     *
     * @return string 
     */
    public function getPreciou()
    {
        return $this->preciou;
    }

    /**
     * Set precio1
     *
     * @param string $precio1
     * @return Salote
     */
    public function setPrecio1($precio1)
    {
        $this->precio1 = $precio1;

        return $this;
    }

    /**
     * Get precio1
     *
     * @return string 
     */
    public function getPrecio1()
    {
        return $this->precio1;
    }

    /**
     * Set preciou1
     *
     * @param string $preciou1
     * @return Salote
     */
    public function setPreciou1($preciou1)
    {
        $this->preciou1 = $preciou1;

        return $this;
    }

    /**
     * Get preciou1
     *
     * @return string 
     */
    public function getPreciou1()
    {
        return $this->preciou1;
    }

    /**
     * Set precio2
     *
     * @param string $precio2
     * @return Salote
     */
    public function setPrecio2($precio2)
    {
        $this->precio2 = $precio2;

        return $this;
    }

    /**
     * Get precio2
     *
     * @return string 
     */
    public function getPrecio2()
    {
        return $this->precio2;
    }

    /**
     * Set preciou2
     *
     * @param string $preciou2
     * @return Salote
     */
    public function setPreciou2($preciou2)
    {
        $this->preciou2 = $preciou2;

        return $this;
    }

    /**
     * Get preciou2
     *
     * @return string 
     */
    public function getPreciou2()
    {
        return $this->preciou2;
    }

    /**
     * Set precio3
     *
     * @param string $precio3
     * @return Salote
     */
    public function setPrecio3($precio3)
    {
        $this->precio3 = $precio3;

        return $this;
    }

    /**
     * Get precio3
     *
     * @return string 
     */
    public function getPrecio3()
    {
        return $this->precio3;
    }

    /**
     * Set preciou3
     *
     * @param string $preciou3
     * @return Salote
     */
    public function setPreciou3($preciou3)
    {
        $this->preciou3 = $preciou3;

        return $this;
    }

    /**
     * Get preciou3
     *
     * @return string 
     */
    public function getPreciou3()
    {
        return $this->preciou3;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Salote
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set cantidadu
     *
     * @param string $cantidadu
     * @return Salote
     */
    public function setCantidadu($cantidadu)
    {
        $this->cantidadu = $cantidadu;

        return $this;
    }

    /**
     * Get cantidadu
     *
     * @return string 
     */
    public function getCantidadu()
    {
        return $this->cantidadu;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Salote
     */
    public function setFechae($fechae)
    {
        $this->fechae = $fechae;

        return $this;
    }

    /**
     * Get fechae
     *
     * @return \DateTime 
     */
    public function getFechae()
    {
        return $this->fechae;
    }

    /**
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Salote
     */
    public function setFechav($fechav)
    {
        $this->fechav = $fechav;

        return $this;
    }

    /**
     * Get fechav
     *
     * @return \DateTime 
     */
    public function getFechav()
    {
        return $this->fechav;
    }

    /**
     * Set puestoi
     *
     * @param string $puestoi
     * @return Salote
     */
    public function setPuestoi($puestoi)
    {
        $this->puestoi = $puestoi;

        return $this;
    }

    /**
     * Get puestoi
     *
     * @return string 
     */
    public function getPuestoi()
    {
        return $this->puestoi;
    }
}
