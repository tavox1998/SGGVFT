<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitemfac
 *
 * @ORM\Table(name="SAITEMFAC")
 * @ORM\Entity
 */
class Saitemfac
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoFac", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipofac;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="OTipo", type="string", length=1, nullable=true)
     */
    private $otipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ONumero", type="string", length=10, nullable=true)
     */
    private $onumero;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroE", type="string", length=10, nullable=true)
     */
    private $numeroe;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolinea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLineaC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrolineac = '0';

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
     * @ORM\Column(name="CodMeca", type="string", length=10, nullable=true)
     */
    private $codmeca;

    /**
     * @var string
     *
     * @ORM\Column(name="CodVend", type="string", length=10, nullable=true)
     */
    private $codvend;

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
     * @ORM\Column(name="CantMayor", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantmayor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=5, nullable=true)
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
     * @ORM\Column(name="Tara", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tara = '0';

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
     * @ORM\Column(name="CantidadU", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadC", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidadc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadA", type="decimal", precision=28, scale=5, nullable=true)
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
     * @ORM\Column(name="TotalItem", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $totalitem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $costo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $descto = '0';

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
     * @var integer
     *
     * @ORM\Column(name="DEsComp", type="smallint", nullable=false)
     */
    private $descomp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu = '00000';



    /**
     * Set tipofac
     *
     * @param string $tipofac
     * @return Saitemfac
     */
    public function setTipofac($tipofac)
    {
        $this->tipofac = $tipofac;

        return $this;
    }

    /**
     * Get tipofac
     *
     * @return string 
     */
    public function getTipofac()
    {
        return $this->tipofac;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saitemfac
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
     * Set otipo
     *
     * @param string $otipo
     * @return Saitemfac
     */
    public function setOtipo($otipo)
    {
        $this->otipo = $otipo;

        return $this;
    }

    /**
     * Get otipo
     *
     * @return string 
     */
    public function getOtipo()
    {
        return $this->otipo;
    }

    /**
     * Set onumero
     *
     * @param string $onumero
     * @return Saitemfac
     */
    public function setOnumero($onumero)
    {
        $this->onumero = $onumero;

        return $this;
    }

    /**
     * Get onumero
     *
     * @return string 
     */
    public function getOnumero()
    {
        return $this->onumero;
    }

    /**
     * Set numeroe
     *
     * @param string $numeroe
     * @return Saitemfac
     */
    public function setNumeroe($numeroe)
    {
        $this->numeroe = $numeroe;

        return $this;
    }

    /**
     * Get numeroe
     *
     * @return string 
     */
    public function getNumeroe()
    {
        return $this->numeroe;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Saitemfac
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
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Saitemfac
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
     * Set nrolineac
     *
     * @param integer $nrolineac
     * @return Saitemfac
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

    /**
     * Set coditem
     *
     * @param string $coditem
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set codmeca
     *
     * @param string $codmeca
     * @return Saitemfac
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
     * Set codvend
     *
     * @param string $codvend
     * @return Saitemfac
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
     * Set descrip1
     *
     * @param string $descrip1
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set cantmayor
     *
     * @param string $cantmayor
     * @return Saitemfac
     */
    public function setCantmayor($cantmayor)
    {
        $this->cantmayor = $cantmayor;

        return $this;
    }

    /**
     * Get cantmayor
     *
     * @return string 
     */
    public function getCantmayor()
    {
        return $this->cantmayor;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set tara
     *
     * @param string $tara
     * @return Saitemfac
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
     * Set existantu
     *
     * @param string $existantu
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set cantidadu
     *
     * @param string $cantidadu
     * @return Saitemfac
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
     * Set cantidadc
     *
     * @param string $cantidadc
     * @return Saitemfac
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
     * Set cantidada
     *
     * @param string $cantidada
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set totalitem
     *
     * @param string $totalitem
     * @return Saitemfac
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
     * Set costo
     *
     * @param string $costo
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set descto
     *
     * @param string $descto
     * @return Saitemfac
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
     * Set nrounicol
     *
     * @param integer $nrounicol
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * @return Saitemfac
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
     * Set descomp
     *
     * @param integer $descomp
     * @return Saitemfac
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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saitemfac
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
}