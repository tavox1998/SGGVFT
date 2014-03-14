<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saprim
 *
 * @ORM\Table(name="SAPRIM")
 * @ORM\Entity
 */
class Saprim
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=true)
     */
    private $codprov;

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
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $factor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=10, nullable=true)
     */
    private $moneda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var string
     *
     * @ORM\Column(name="CostAct", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CostPro", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costpro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CostAnt", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo4", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo5", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo6", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo7", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo7 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo8", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo8 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo9", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo9 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo10", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo10 = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Saprim
     */
    public function setCodprov($codprov)
    {
        $this->codprov = $codprov;

        return $this;
    }

    /**
     * Get codprov
     *
     * @return string 
     */
    public function getCodprov()
    {
        return $this->codprov;
    }

    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Saprim
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
     * @return Saprim
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
     * Set numerod
     *
     * @param string $numerod
     * @return Saprim
     */
    public function setNumerod($numerod)
    {
        $this->numerod = $numerod;

        return $this;
    }

    /**
     * Get numerod
     *
     * @return string 
     */
    public function getNumerod()
    {
        return $this->numerod;
    }

    /**
     * Set factor
     *
     * @param string $factor
     * @return Saprim
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return string 
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Saprim
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saprim
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
     * Set costact
     *
     * @param string $costact
     * @return Saprim
     */
    public function setCostact($costact)
    {
        $this->costact = $costact;

        return $this;
    }

    /**
     * Get costact
     *
     * @return string 
     */
    public function getCostact()
    {
        return $this->costact;
    }

    /**
     * Set costpro
     *
     * @param string $costpro
     * @return Saprim
     */
    public function setCostpro($costpro)
    {
        $this->costpro = $costpro;

        return $this;
    }

    /**
     * Get costpro
     *
     * @return string 
     */
    public function getCostpro()
    {
        return $this->costpro;
    }

    /**
     * Set costant
     *
     * @param string $costant
     * @return Saprim
     */
    public function setCostant($costant)
    {
        $this->costant = $costant;

        return $this;
    }

    /**
     * Get costant
     *
     * @return string 
     */
    public function getCostant()
    {
        return $this->costant;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saprim
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
     * Set precio1
     *
     * @param string $precio1
     * @return Saprim
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
     * Set precio2
     *
     * @param string $precio2
     * @return Saprim
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
     * Set precio3
     *
     * @param string $precio3
     * @return Saprim
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
     * Set costo1
     *
     * @param string $costo1
     * @return Saprim
     */
    public function setCosto1($costo1)
    {
        $this->costo1 = $costo1;

        return $this;
    }

    /**
     * Get costo1
     *
     * @return string 
     */
    public function getCosto1()
    {
        return $this->costo1;
    }

    /**
     * Set costo2
     *
     * @param string $costo2
     * @return Saprim
     */
    public function setCosto2($costo2)
    {
        $this->costo2 = $costo2;

        return $this;
    }

    /**
     * Get costo2
     *
     * @return string 
     */
    public function getCosto2()
    {
        return $this->costo2;
    }

    /**
     * Set costo3
     *
     * @param string $costo3
     * @return Saprim
     */
    public function setCosto3($costo3)
    {
        $this->costo3 = $costo3;

        return $this;
    }

    /**
     * Get costo3
     *
     * @return string 
     */
    public function getCosto3()
    {
        return $this->costo3;
    }

    /**
     * Set costo4
     *
     * @param string $costo4
     * @return Saprim
     */
    public function setCosto4($costo4)
    {
        $this->costo4 = $costo4;

        return $this;
    }

    /**
     * Get costo4
     *
     * @return string 
     */
    public function getCosto4()
    {
        return $this->costo4;
    }

    /**
     * Set costo5
     *
     * @param string $costo5
     * @return Saprim
     */
    public function setCosto5($costo5)
    {
        $this->costo5 = $costo5;

        return $this;
    }

    /**
     * Get costo5
     *
     * @return string 
     */
    public function getCosto5()
    {
        return $this->costo5;
    }

    /**
     * Set costo6
     *
     * @param string $costo6
     * @return Saprim
     */
    public function setCosto6($costo6)
    {
        $this->costo6 = $costo6;

        return $this;
    }

    /**
     * Get costo6
     *
     * @return string 
     */
    public function getCosto6()
    {
        return $this->costo6;
    }

    /**
     * Set costo7
     *
     * @param string $costo7
     * @return Saprim
     */
    public function setCosto7($costo7)
    {
        $this->costo7 = $costo7;

        return $this;
    }

    /**
     * Get costo7
     *
     * @return string 
     */
    public function getCosto7()
    {
        return $this->costo7;
    }

    /**
     * Set costo8
     *
     * @param string $costo8
     * @return Saprim
     */
    public function setCosto8($costo8)
    {
        $this->costo8 = $costo8;

        return $this;
    }

    /**
     * Get costo8
     *
     * @return string 
     */
    public function getCosto8()
    {
        return $this->costo8;
    }

    /**
     * Set costo9
     *
     * @param string $costo9
     * @return Saprim
     */
    public function setCosto9($costo9)
    {
        $this->costo9 = $costo9;

        return $this;
    }

    /**
     * Get costo9
     *
     * @return string 
     */
    public function getCosto9()
    {
        return $this->costo9;
    }

    /**
     * Set costo10
     *
     * @param string $costo10
     * @return Saprim
     */
    public function setCosto10($costo10)
    {
        $this->costo10 = $costo10;

        return $this;
    }

    /**
     * Get costo10
     *
     * @return string 
     */
    public function getCosto10()
    {
        return $this->costo10;
    }
}
