<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saprod
 *
 * @ORM\Table(name="SAPROD", indexes={@ORM\Index(name="SAPROD_IX1", columns={"Descrip"}), @ORM\Index(name="SAPROD_IX2", columns={"Refere"})})
 * @ORM\Entity
 */
class Saprod
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
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodInst", type="integer", nullable=false)
     */
    private $codinst = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip2", type="string", length=40, nullable=true)
     */
    private $descrip2;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip3", type="string", length=40, nullable=true)
     */
    private $descrip3;

    /**
     * @var string
     *
     * @ORM\Column(name="Refere", type="string", length=15, nullable=true)
     */
    private $refere;

    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=20, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Unidad", type="string", length=3, nullable=true)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="UndEmpaq", type="string", length=3, nullable=true)
     */
    private $undempaq;

    /**
     * @var string
     *
     * @ORM\Column(name="CantEmpaq", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantempaq = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio1", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU2", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $preciou2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio3", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU3", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $preciou3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioU", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $preciou = '0';

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
     * @ORM\Column(name="Existen", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existen = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExUnidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exunidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExistenCon", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existencon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExUnidadCon", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exunidadcon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Compro", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $compro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Pedido", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $pedido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Minimo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $minimo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Maximo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $maximo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tara", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tara = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsComp", type="smallint", nullable=false)
     */
    private $descomp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsComi", type="smallint", nullable=false)
     */
    private $descomi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsSeri", type="smallint", nullable=false)
     */
    private $desseri = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsLote", type="smallint", nullable=false)
     */
    private $deslote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsVence", type="smallint", nullable=false)
     */
    private $desvence = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="EdoABP", type="string", length=5, nullable=true)
     */
    private $edoabp;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPublish", type="smallint", nullable=false)
     */
    private $espublish = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsImport", type="smallint", nullable=false)
     */
    private $esimport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsExento", type="smallint", nullable=false)
     */
    private $esexento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsEnser", type="smallint", nullable=false)
     */
    private $esenser = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsOferta", type="smallint", nullable=false)
     */
    private $esoferta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPesa", type="smallint", nullable=false)
     */
    private $espesa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsEmpaque", type="smallint", nullable=false)
     */
    private $esempaque = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ExDecimal", type="smallint", nullable=false)
     */
    private $exdecimal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasEntr", type="integer", nullable=false)
     */
    private $diasentr = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUV", type="datetime", nullable=true)
     */
    private $fechauv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUC", type="datetime", nullable=true)
     */
    private $fechauc;

    /**
     * @var string
     *
     * @ORM\Column(name="Peso", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $peso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Volumen", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $volumen = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UndVol", type="string", length=3, nullable=true)
     */
    private $undvol;



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
     * Set descrip
     *
     * @param string $descrip
     * @return Saprod
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set codinst
     *
     * @param integer $codinst
     * @return Saprod
     */
    public function setCodinst($codinst)
    {
        $this->codinst = $codinst;

        return $this;
    }

    /**
     * Get codinst
     *
     * @return integer 
     */
    public function getCodinst()
    {
        return $this->codinst;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Saprod
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set descrip2
     *
     * @param string $descrip2
     * @return Saprod
     */
    public function setDescrip2($descrip2)
    {
        $this->descrip2 = $descrip2;

        return $this;
    }

    /**
     * Get descrip2
     *
     * @return string 
     */
    public function getDescrip2()
    {
        return $this->descrip2;
    }

    /**
     * Set descrip3
     *
     * @param string $descrip3
     * @return Saprod
     */
    public function setDescrip3($descrip3)
    {
        $this->descrip3 = $descrip3;

        return $this;
    }

    /**
     * Get descrip3
     *
     * @return string 
     */
    public function getDescrip3()
    {
        return $this->descrip3;
    }

    /**
     * Set refere
     *
     * @param string $refere
     * @return Saprod
     */
    public function setRefere($refere)
    {
        $this->refere = $refere;

        return $this;
    }

    /**
     * Get refere
     *
     * @return string 
     */
    public function getRefere()
    {
        return $this->refere;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Saprod
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return Saprod
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set undempaq
     *
     * @param string $undempaq
     * @return Saprod
     */
    public function setUndempaq($undempaq)
    {
        $this->undempaq = $undempaq;

        return $this;
    }

    /**
     * Get undempaq
     *
     * @return string 
     */
    public function getUndempaq()
    {
        return $this->undempaq;
    }

    /**
     * Set cantempaq
     *
     * @param string $cantempaq
     * @return Saprod
     */
    public function setCantempaq($cantempaq)
    {
        $this->cantempaq = $cantempaq;

        return $this;
    }

    /**
     * Get cantempaq
     *
     * @return string 
     */
    public function getCantempaq()
    {
        return $this->cantempaq;
    }

    /**
     * Set precio1
     *
     * @param string $precio1
     * @return Saprod
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
     * @return Saprod
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
     * @return Saprod
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
     * @return Saprod
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
     * @return Saprod
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
     * Set preciou
     *
     * @param string $preciou
     * @return Saprod
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
     * Set costact
     *
     * @param string $costact
     * @return Saprod
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
     * @return Saprod
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
     * @return Saprod
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
     * Set existen
     *
     * @param string $existen
     * @return Saprod
     */
    public function setExisten($existen)
    {
        $this->existen = $existen;

        return $this;
    }

    /**
     * Get existen
     *
     * @return string 
     */
    public function getExisten()
    {
        return $this->existen;
    }

    /**
     * Set exunidad
     *
     * @param string $exunidad
     * @return Saprod
     */
    public function setExunidad($exunidad)
    {
        $this->exunidad = $exunidad;

        return $this;
    }

    /**
     * Get exunidad
     *
     * @return string 
     */
    public function getExunidad()
    {
        return $this->exunidad;
    }

    /**
     * Set existencon
     *
     * @param string $existencon
     * @return Saprod
     */
    public function setExistencon($existencon)
    {
        $this->existencon = $existencon;

        return $this;
    }

    /**
     * Get existencon
     *
     * @return string 
     */
    public function getExistencon()
    {
        return $this->existencon;
    }

    /**
     * Set exunidadcon
     *
     * @param string $exunidadcon
     * @return Saprod
     */
    public function setExunidadcon($exunidadcon)
    {
        $this->exunidadcon = $exunidadcon;

        return $this;
    }

    /**
     * Get exunidadcon
     *
     * @return string 
     */
    public function getExunidadcon()
    {
        return $this->exunidadcon;
    }

    /**
     * Set compro
     *
     * @param string $compro
     * @return Saprod
     */
    public function setCompro($compro)
    {
        $this->compro = $compro;

        return $this;
    }

    /**
     * Get compro
     *
     * @return string 
     */
    public function getCompro()
    {
        return $this->compro;
    }

    /**
     * Set pedido
     *
     * @param string $pedido
     * @return Saprod
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return string 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set minimo
     *
     * @param string $minimo
     * @return Saprod
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     * @return Saprod
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string 
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set tara
     *
     * @param string $tara
     * @return Saprod
     */
    public function setTara($tara)
    {
        $this->tara = $tara;

        return $this;
    }

    /**
     * Get tara
     *
     * @return string 
     */
    public function getTara()
    {
        return $this->tara;
    }

    /**
     * Set descomp
     *
     * @param integer $descomp
     * @return Saprod
     */
    public function setDescomp($descomp)
    {
        $this->descomp = $descomp;

        return $this;
    }

    /**
     * Get descomp
     *
     * @return integer 
     */
    public function getDescomp()
    {
        return $this->descomp;
    }

    /**
     * Set descomi
     *
     * @param integer $descomi
     * @return Saprod
     */
    public function setDescomi($descomi)
    {
        $this->descomi = $descomi;

        return $this;
    }

    /**
     * Get descomi
     *
     * @return integer 
     */
    public function getDescomi()
    {
        return $this->descomi;
    }

    /**
     * Set desseri
     *
     * @param integer $desseri
     * @return Saprod
     */
    public function setDesseri($desseri)
    {
        $this->desseri = $desseri;

        return $this;
    }

    /**
     * Get desseri
     *
     * @return integer 
     */
    public function getDesseri()
    {
        return $this->desseri;
    }

    /**
     * Set esreten
     *
     * @param integer $esreten
     * @return Saprod
     */
    public function setEsreten($esreten)
    {
        $this->esreten = $esreten;

        return $this;
    }

    /**
     * Get esreten
     *
     * @return integer 
     */
    public function getEsreten()
    {
        return $this->esreten;
    }

    /**
     * Set deslote
     *
     * @param integer $deslote
     * @return Saprod
     */
    public function setDeslote($deslote)
    {
        $this->deslote = $deslote;

        return $this;
    }

    /**
     * Get deslote
     *
     * @return integer 
     */
    public function getDeslote()
    {
        return $this->deslote;
    }

    /**
     * Set desvence
     *
     * @param integer $desvence
     * @return Saprod
     */
    public function setDesvence($desvence)
    {
        $this->desvence = $desvence;

        return $this;
    }

    /**
     * Get desvence
     *
     * @return integer 
     */
    public function getDesvence()
    {
        return $this->desvence;
    }

    /**
     * Set edoabp
     *
     * @param string $edoabp
     * @return Saprod
     */
    public function setEdoabp($edoabp)
    {
        $this->edoabp = $edoabp;

        return $this;
    }

    /**
     * Get edoabp
     *
     * @return string 
     */
    public function getEdoabp()
    {
        return $this->edoabp;
    }

    /**
     * Set espublish
     *
     * @param integer $espublish
     * @return Saprod
     */
    public function setEspublish($espublish)
    {
        $this->espublish = $espublish;

        return $this;
    }

    /**
     * Get espublish
     *
     * @return integer 
     */
    public function getEspublish()
    {
        return $this->espublish;
    }

    /**
     * Set esimport
     *
     * @param integer $esimport
     * @return Saprod
     */
    public function setEsimport($esimport)
    {
        $this->esimport = $esimport;

        return $this;
    }

    /**
     * Get esimport
     *
     * @return integer 
     */
    public function getEsimport()
    {
        return $this->esimport;
    }

    /**
     * Set esexento
     *
     * @param integer $esexento
     * @return Saprod
     */
    public function setEsexento($esexento)
    {
        $this->esexento = $esexento;

        return $this;
    }

    /**
     * Get esexento
     *
     * @return integer 
     */
    public function getEsexento()
    {
        return $this->esexento;
    }

    /**
     * Set esenser
     *
     * @param integer $esenser
     * @return Saprod
     */
    public function setEsenser($esenser)
    {
        $this->esenser = $esenser;

        return $this;
    }

    /**
     * Get esenser
     *
     * @return integer 
     */
    public function getEsenser()
    {
        return $this->esenser;
    }

    /**
     * Set esoferta
     *
     * @param integer $esoferta
     * @return Saprod
     */
    public function setEsoferta($esoferta)
    {
        $this->esoferta = $esoferta;

        return $this;
    }

    /**
     * Get esoferta
     *
     * @return integer 
     */
    public function getEsoferta()
    {
        return $this->esoferta;
    }

    /**
     * Set espesa
     *
     * @param integer $espesa
     * @return Saprod
     */
    public function setEspesa($espesa)
    {
        $this->espesa = $espesa;

        return $this;
    }

    /**
     * Get espesa
     *
     * @return integer 
     */
    public function getEspesa()
    {
        return $this->espesa;
    }

    /**
     * Set esempaque
     *
     * @param integer $esempaque
     * @return Saprod
     */
    public function setEsempaque($esempaque)
    {
        $this->esempaque = $esempaque;

        return $this;
    }

    /**
     * Get esempaque
     *
     * @return integer 
     */
    public function getEsempaque()
    {
        return $this->esempaque;
    }

    /**
     * Set exdecimal
     *
     * @param integer $exdecimal
     * @return Saprod
     */
    public function setExdecimal($exdecimal)
    {
        $this->exdecimal = $exdecimal;

        return $this;
    }

    /**
     * Get exdecimal
     *
     * @return integer 
     */
    public function getExdecimal()
    {
        return $this->exdecimal;
    }

    /**
     * Set diasentr
     *
     * @param integer $diasentr
     * @return Saprod
     */
    public function setDiasentr($diasentr)
    {
        $this->diasentr = $diasentr;

        return $this;
    }

    /**
     * Get diasentr
     *
     * @return integer 
     */
    public function getDiasentr()
    {
        return $this->diasentr;
    }

    /**
     * Set fechauv
     *
     * @param \DateTime $fechauv
     * @return Saprod
     */
    public function setFechauv($fechauv)
    {
        $this->fechauv = $fechauv;

        return $this;
    }

    /**
     * Get fechauv
     *
     * @return \DateTime 
     */
    public function getFechauv()
    {
        return $this->fechauv;
    }

    /**
     * Set fechauc
     *
     * @param \DateTime $fechauc
     * @return Saprod
     */
    public function setFechauc($fechauc)
    {
        $this->fechauc = $fechauc;

        return $this;
    }

    /**
     * Get fechauc
     *
     * @return \DateTime 
     */
    public function getFechauc()
    {
        return $this->fechauc;
    }

    /**
     * Set peso
     *
     * @param string $peso
     * @return Saprod
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set volumen
     *
     * @param string $volumen
     * @return Saprod
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }

    /**
     * Get volumen
     *
     * @return string 
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set undvol
     *
     * @param string $undvol
     * @return Saprod
     */
    public function setUndvol($undvol)
    {
        $this->undvol = $undvol;

        return $this;
    }

    /**
     * Get undvol
     *
     * @return string 
     */
    public function getUndvol()
    {
        return $this->undvol;
    }
}
