<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitemopi
 *
 * @ORM\Table(name="SAITEMOPI")
 * @ORM\Entity
 */
class Saitemopi
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoOpI", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoopi;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
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
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=true)
     */
    private $coditem;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=true)
     */
    private $codubic;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic2", type="string", length=10, nullable=true)
     */
    private $codubic2;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip1", type="string", length=40, nullable=true)
     */
    private $descrip1;

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
     * @ORM\Column(name="Descrip4", type="string", length=40, nullable=true)
     */
    private $descrip4;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip5", type="string", length=40, nullable=true)
     */
    private $descrip5;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip6", type="string", length=40, nullable=true)
     */
    private $descrip6;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip7", type="string", length=40, nullable=true)
     */
    private $descrip7;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip8", type="string", length=40, nullable=true)
     */
    private $descrip8;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip9", type="string", length=40, nullable=true)
     */
    private $descrip9;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip10", type="string", length=40, nullable=true)
     */
    private $descrip10;

    /**
     * @var string
     *
     * @ORM\Column(name="Refere", type="string", length=15, nullable=true)
     */
    private $refere;

    /**
     * @var integer
     *
     * @ORM\Column(name="Signo", type="smallint", nullable=false)
     */
    private $signo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tara", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tara = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadO", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExistAntU", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existantu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExistAnt", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExistAntU2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existantu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExistAnt2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existant2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadU", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadUA", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadua = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=true)
     */
    private $codmeca;

    /**
     * @var string
     *
     * @ORM\Column(name="TotalItem", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $totalitem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnicoL", type="integer", nullable=false)
     */
    private $nrounicol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NroLote", type="string", length=20, nullable=true)
     */
    private $nrolote;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaL", type="datetime", nullable=true)
     */
    private $fechal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

    /**
     * @var integer
     *
     * @ORM\Column(name="EsServ", type="smallint", nullable=false)
     */
    private $esserv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsUnid", type="smallint", nullable=false)
     */
    private $esunid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsFreeP", type="smallint", nullable=false)
     */
    private $esfreep = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPesa", type="smallint", nullable=false)
     */
    private $espesa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsExento", type="smallint", nullable=false)
     */
    private $esexento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UsaServ", type="smallint", nullable=false)
     */
    private $usaserv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsLote", type="smallint", nullable=false)
     */
    private $deslote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsSeri", type="smallint", nullable=false)
     */
    private $desseri = '0';

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
     * Set tipoopi
     *
     * @param string $tipoopi
     * @return Saitemopi
     */
    public function setTipoopi($tipoopi)
    {
        $this->tipoopi = $tipoopi;

        return $this;
    }

    /**
     * Get tipoopi
     *
     * @return string 
     */
    public function getTipoopi()
    {
        return $this->tipoopi;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saitemopi
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
     * @return Saitemopi
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
     * Set status
     *
     * @param string $status
     * @return Saitemopi
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set coditem
     *
     * @param string $coditem
     * @return Saitemopi
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
     * Set codubic
     *
     * @param string $codubic
     * @return Saitemopi
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
     * Set codubic2
     *
     * @param string $codubic2
     * @return Saitemopi
     */
    public function setCodubic2($codubic2)
    {
        $this->codubic2 = $codubic2;

        return $this;
    }

    /**
     * Get codubic2
     *
     * @return string 
     */
    public function getCodubic2()
    {
        return $this->codubic2;
    }

    /**
     * Set descrip1
     *
     * @param string $descrip1
     * @return Saitemopi
     */
    public function setDescrip1($descrip1)
    {
        $this->descrip1 = $descrip1;

        return $this;
    }

    /**
     * Get descrip1
     *
     * @return string 
     */
    public function getDescrip1()
    {
        return $this->descrip1;
    }

    /**
     * Set descrip2
     *
     * @param string $descrip2
     * @return Saitemopi
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
     * @return Saitemopi
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
     * Set descrip4
     *
     * @param string $descrip4
     * @return Saitemopi
     */
    public function setDescrip4($descrip4)
    {
        $this->descrip4 = $descrip4;

        return $this;
    }

    /**
     * Get descrip4
     *
     * @return string 
     */
    public function getDescrip4()
    {
        return $this->descrip4;
    }

    /**
     * Set descrip5
     *
     * @param string $descrip5
     * @return Saitemopi
     */
    public function setDescrip5($descrip5)
    {
        $this->descrip5 = $descrip5;

        return $this;
    }

    /**
     * Get descrip5
     *
     * @return string 
     */
    public function getDescrip5()
    {
        return $this->descrip5;
    }

    /**
     * Set descrip6
     *
     * @param string $descrip6
     * @return Saitemopi
     */
    public function setDescrip6($descrip6)
    {
        $this->descrip6 = $descrip6;

        return $this;
    }

    /**
     * Get descrip6
     *
     * @return string 
     */
    public function getDescrip6()
    {
        return $this->descrip6;
    }

    /**
     * Set descrip7
     *
     * @param string $descrip7
     * @return Saitemopi
     */
    public function setDescrip7($descrip7)
    {
        $this->descrip7 = $descrip7;

        return $this;
    }

    /**
     * Get descrip7
     *
     * @return string 
     */
    public function getDescrip7()
    {
        return $this->descrip7;
    }

    /**
     * Set descrip8
     *
     * @param string $descrip8
     * @return Saitemopi
     */
    public function setDescrip8($descrip8)
    {
        $this->descrip8 = $descrip8;

        return $this;
    }

    /**
     * Get descrip8
     *
     * @return string 
     */
    public function getDescrip8()
    {
        return $this->descrip8;
    }

    /**
     * Set descrip9
     *
     * @param string $descrip9
     * @return Saitemopi
     */
    public function setDescrip9($descrip9)
    {
        $this->descrip9 = $descrip9;

        return $this;
    }

    /**
     * Get descrip9
     *
     * @return string 
     */
    public function getDescrip9()
    {
        return $this->descrip9;
    }

    /**
     * Set descrip10
     *
     * @param string $descrip10
     * @return Saitemopi
     */
    public function setDescrip10($descrip10)
    {
        $this->descrip10 = $descrip10;

        return $this;
    }

    /**
     * Get descrip10
     *
     * @return string 
     */
    public function getDescrip10()
    {
        return $this->descrip10;
    }

    /**
     * Set refere
     *
     * @param string $refere
     * @return Saitemopi
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
     * Set signo
     *
     * @param integer $signo
     * @return Saitemopi
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return integer 
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set tara
     *
     * @param string $tara
     * @return Saitemopi
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saitemopi
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
     * Set cantidado
     *
     * @param string $cantidado
     * @return Saitemopi
     */
    public function setCantidado($cantidado)
    {
        $this->cantidado = $cantidado;

        return $this;
    }

    /**
     * Get cantidado
     *
     * @return string 
     */
    public function getCantidado()
    {
        return $this->cantidado;
    }

    /**
     * Set existantu
     *
     * @param string $existantu
     * @return Saitemopi
     */
    public function setExistantu($existantu)
    {
        $this->existantu = $existantu;

        return $this;
    }

    /**
     * Get existantu
     *
     * @return string 
     */
    public function getExistantu()
    {
        return $this->existantu;
    }

    /**
     * Set existant
     *
     * @param string $existant
     * @return Saitemopi
     */
    public function setExistant($existant)
    {
        $this->existant = $existant;

        return $this;
    }

    /**
     * Get existant
     *
     * @return string 
     */
    public function getExistant()
    {
        return $this->existant;
    }

    /**
     * Set existantu2
     *
     * @param string $existantu2
     * @return Saitemopi
     */
    public function setExistantu2($existantu2)
    {
        $this->existantu2 = $existantu2;

        return $this;
    }

    /**
     * Get existantu2
     *
     * @return string 
     */
    public function getExistantu2()
    {
        return $this->existantu2;
    }

    /**
     * Set existant2
     *
     * @param string $existant2
     * @return Saitemopi
     */
    public function setExistant2($existant2)
    {
        $this->existant2 = $existant2;

        return $this;
    }

    /**
     * Get existant2
     *
     * @return string 
     */
    public function getExistant2()
    {
        return $this->existant2;
    }

    /**
     * Set cantidadc
     *
     * @param string $cantidadc
     * @return Saitemopi
     */
    public function setCantidadc($cantidadc)
    {
        $this->cantidadc = $cantidadc;

        return $this;
    }

    /**
     * Get cantidadc
     *
     * @return string 
     */
    public function getCantidadc()
    {
        return $this->cantidadc;
    }

    /**
     * Set cantidadu
     *
     * @param string $cantidadu
     * @return Saitemopi
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
     * Set cantidada
     *
     * @param string $cantidada
     * @return Saitemopi
     */
    public function setCantidada($cantidada)
    {
        $this->cantidada = $cantidada;

        return $this;
    }

    /**
     * Get cantidada
     *
     * @return string 
     */
    public function getCantidada()
    {
        return $this->cantidada;
    }

    /**
     * Set cantidadua
     *
     * @param string $cantidadua
     * @return Saitemopi
     */
    public function setCantidadua($cantidadua)
    {
        $this->cantidadua = $cantidadua;

        return $this;
    }

    /**
     * Get cantidadua
     *
     * @return string 
     */
    public function getCantidadua()
    {
        return $this->cantidadua;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Saitemopi
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
     * Set descto
     *
     * @param string $descto
     * @return Saitemopi
     */
    public function setDescto($descto)
    {
        $this->descto = $descto;

        return $this;
    }

    /**
     * Get descto
     *
     * @return string 
     */
    public function getDescto()
    {
        return $this->descto;
    }

    /**
     * Set codmeca
     *
     * @param string $codmeca
     * @return Saitemopi
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
     * Set totalitem
     *
     * @param string $totalitem
     * @return Saitemopi
     */
    public function setTotalitem($totalitem)
    {
        $this->totalitem = $totalitem;

        return $this;
    }

    /**
     * Get totalitem
     *
     * @return string 
     */
    public function getTotalitem()
    {
        return $this->totalitem;
    }

    /**
     * Set nrounicol
     *
     * @param integer $nrounicol
     * @return Saitemopi
     */
    public function setNrounicol($nrounicol)
    {
        $this->nrounicol = $nrounicol;

        return $this;
    }

    /**
     * Get nrounicol
     *
     * @return integer 
     */
    public function getNrounicol()
    {
        return $this->nrounicol;
    }

    /**
     * Set nrolote
     *
     * @param string $nrolote
     * @return Saitemopi
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
     * Set precio
     *
     * @param string $precio
     * @return Saitemopi
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
     * @return Saitemopi
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saitemopi
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
     * Set fechal
     *
     * @param \DateTime $fechal
     * @return Saitemopi
     */
    public function setFechal($fechal)
    {
        $this->fechal = $fechal;

        return $this;
    }

    /**
     * Get fechal
     *
     * @return \DateTime 
     */
    public function getFechal()
    {
        return $this->fechal;
    }

    /**
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Saitemopi
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
     * Set esserv
     *
     * @param integer $esserv
     * @return Saitemopi
     */
    public function setEsserv($esserv)
    {
        $this->esserv = $esserv;

        return $this;
    }

    /**
     * Get esserv
     *
     * @return integer 
     */
    public function getEsserv()
    {
        return $this->esserv;
    }

    /**
     * Set esunid
     *
     * @param integer $esunid
     * @return Saitemopi
     */
    public function setEsunid($esunid)
    {
        $this->esunid = $esunid;

        return $this;
    }

    /**
     * Get esunid
     *
     * @return integer 
     */
    public function getEsunid()
    {
        return $this->esunid;
    }

    /**
     * Set esfreep
     *
     * @param integer $esfreep
     * @return Saitemopi
     */
    public function setEsfreep($esfreep)
    {
        $this->esfreep = $esfreep;

        return $this;
    }

    /**
     * Get esfreep
     *
     * @return integer 
     */
    public function getEsfreep()
    {
        return $this->esfreep;
    }

    /**
     * Set espesa
     *
     * @param integer $espesa
     * @return Saitemopi
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
     * Set esexento
     *
     * @param integer $esexento
     * @return Saitemopi
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
     * Set usaserv
     *
     * @param integer $usaserv
     * @return Saitemopi
     */
    public function setUsaserv($usaserv)
    {
        $this->usaserv = $usaserv;

        return $this;
    }

    /**
     * Get usaserv
     *
     * @return integer 
     */
    public function getUsaserv()
    {
        return $this->usaserv;
    }

    /**
     * Set deslote
     *
     * @param integer $deslote
     * @return Saitemopi
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
     * Set desseri
     *
     * @param integer $desseri
     * @return Saitemopi
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saitemopi
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
     * @return Saitemopi
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
