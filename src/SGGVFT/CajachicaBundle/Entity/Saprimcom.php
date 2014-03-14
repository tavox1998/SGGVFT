<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saprimcom
 *
 * @ORM\Table(name="SAPRIMCOM")
 * @ORM\Entity
 */
class Saprimcom
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoCom", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipocom;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DocImpo", type="string", length=20, nullable=true)
     */
    private $docimpo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=true)
     */
    private $coditem;

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
     * @ORM\Column(name="FechaI", type="datetime", nullable=true)
     */
    private $fechai;

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
     * @ORM\Column(name="PrecioI1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precioi1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioI2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precioi2 = '0';

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
     * @ORM\Column(name="PrecioI3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precioi3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $preciou3 = '0';

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
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLineaC", type="integer", nullable=false)
     */
    private $nrolineac = '0';



    /**
     * Set codprov
     *
     * @param string $codprov
     * @return Saprimcom
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
     * Set tipocom
     *
     * @param string $tipocom
     * @return Saprimcom
     */
    public function setTipocom($tipocom)
    {
        $this->tipocom = $tipocom;

        return $this;
    }

    /**
     * Get tipocom
     *
     * @return string 
     */
    public function getTipocom()
    {
        return $this->tipocom;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saprimcom
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
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Saprimcom
     */
    public function setNrolinea($nrolinea)
    {
        $this->nrolinea = $nrolinea;

        return $this;
    }

    /**
     * Get nrolinea
     *
     * @return integer 
     */
    public function getNrolinea()
    {
        return $this->nrolinea;
    }

    /**
     * Set docimpo
     *
     * @param string $docimpo
     * @return Saprimcom
     */
    public function setDocimpo($docimpo)
    {
        $this->docimpo = $docimpo;

        return $this;
    }

    /**
     * Get docimpo
     *
     * @return string 
     */
    public function getDocimpo()
    {
        return $this->docimpo;
    }

    /**
     * Set coditem
     *
     * @param string $coditem
     * @return Saprimcom
     */
    public function setCoditem($coditem)
    {
        $this->coditem = $coditem;

        return $this;
    }

    /**
     * Get coditem
     *
     * @return string 
     */
    public function getCoditem()
    {
        return $this->coditem;
    }

    /**
     * Set factor
     *
     * @param string $factor
     * @return Saprimcom
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
     * @return Saprimcom
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
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return Saprimcom
     */
    public function setFechai($fechai)
    {
        $this->fechai = $fechai;

        return $this;
    }

    /**
     * Get fechai
     *
     * @return \DateTime 
     */
    public function getFechai()
    {
        return $this->fechai;
    }

    /**
     * Set preciou
     *
     * @param string $preciou
     * @return Saprimcom
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
     * @return Saprimcom
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
     * Set precioi1
     *
     * @param string $precioi1
     * @return Saprimcom
     */
    public function setPrecioi1($precioi1)
    {
        $this->precioi1 = $precioi1;

        return $this;
    }

    /**
     * Get precioi1
     *
     * @return string 
     */
    public function getPrecioi1()
    {
        return $this->precioi1;
    }

    /**
     * Set precio2
     *
     * @param string $precio2
     * @return Saprimcom
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
     * Set precioi2
     *
     * @param string $precioi2
     * @return Saprimcom
     */
    public function setPrecioi2($precioi2)
    {
        $this->precioi2 = $precioi2;

        return $this;
    }

    /**
     * Get precioi2
     *
     * @return string 
     */
    public function getPrecioi2()
    {
        return $this->precioi2;
    }

    /**
     * Set preciou2
     *
     * @param string $preciou2
     * @return Saprimcom
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
     * @return Saprimcom
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
     * Set precioi3
     *
     * @param string $precioi3
     * @return Saprimcom
     */
    public function setPrecioi3($precioi3)
    {
        $this->precioi3 = $precioi3;

        return $this;
    }

    /**
     * Get precioi3
     *
     * @return string 
     */
    public function getPrecioi3()
    {
        return $this->precioi3;
    }

    /**
     * Set preciou3
     *
     * @param string $preciou3
     * @return Saprimcom
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
     * Set costo1
     *
     * @param string $costo1
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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
     * @return Saprimcom
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

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saprimcom
     */
    public function setCodsucu($codsucu)
    {
        $this->codsucu = $codsucu;

        return $this;
    }

    /**
     * Get codsucu
     *
     * @return string 
     */
    public function getCodsucu()
    {
        return $this->codsucu;
    }

    /**
     * Set nrolineac
     *
     * @param integer $nrolineac
     * @return Saprimcom
     */
    public function setNrolineac($nrolineac)
    {
        $this->nrolineac = $nrolineac;

        return $this;
    }

    /**
     * Get nrolineac
     *
     * @return integer 
     */
    public function getNrolineac()
    {
        return $this->nrolineac;
    }
}
