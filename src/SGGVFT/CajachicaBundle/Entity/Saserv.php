<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saserv
 *
 * @ORM\Table(name="SASERV", indexes={@ORM\Index(name="SASERV_IX1", columns={"Descrip"}), @ORM\Index(name="SASERV_IX2", columns={"Clase"})})
 * @ORM\Entity
 */
class Saserv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodServ", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codserv;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodInst", type="integer", nullable=false)
     */
    private $codinst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

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
     * @ORM\Column(name="Clase", type="string", length=10, nullable=true)
     */
    private $clase;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Unidad", type="string", length=6, nullable=true)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio1", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioI1", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precioi1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio2", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioI2", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precioi2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio3", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precio3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PrecioI3", type="decimal", precision=28, scale=5, nullable=true)
     */
    private $precioi3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $costo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsExento", type="smallint", nullable=false)
     */
    private $esexento = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsReten", type="smallint", nullable=false)
     */
    private $esreten = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPorCost", type="smallint", nullable=false)
     */
    private $esporcost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UsaServ", type="smallint", nullable=false)
     */
    private $usaserv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comision", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $comision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsPorComi", type="smallint", nullable=false)
     */
    private $esporcomi = '0';

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
     * @var integer
     *
     * @ORM\Column(name="EsImport", type="smallint", nullable=false)
     */
    private $esimport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsVenta", type="smallint", nullable=false)
     */
    private $esventa = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsCompra", type="smallint", nullable=false)
     */
    private $escompra = '1';



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
     * Set codinst
     *
     * @param integer $codinst
     * @return Saserv
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
     * Set descrip
     *
     * @param string $descrip
     * @return Saserv
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
     * Set descrip2
     *
     * @param string $descrip2
     * @return Saserv
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
     * @return Saserv
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
     * Set clase
     *
     * @param string $clase
     * @return Saserv
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Saserv
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
     * Set unidad
     *
     * @param string $unidad
     * @return Saserv
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
     * Set precio1
     *
     * @param string $precio1
     * @return Saserv
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
     * @return Saserv
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
     * @return Saserv
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
     * @return Saserv
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
     * Set precio3
     *
     * @param string $precio3
     * @return Saserv
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
     * @return Saserv
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
     * Set costo
     *
     * @param string $costo
     * @return Saserv
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
     * Set esexento
     *
     * @param integer $esexento
     * @return Saserv
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
     * Set esreten
     *
     * @param integer $esreten
     * @return Saserv
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
     * Set esporcost
     *
     * @param integer $esporcost
     * @return Saserv
     */
    public function setEsporcost($esporcost)
    {
        $this->esporcost = $esporcost;

        return $this;
    }

    /**
     * Get esporcost
     *
     * @return integer 
     */
    public function getEsporcost()
    {
        return $this->esporcost;
    }

    /**
     * Set usaserv
     *
     * @param integer $usaserv
     * @return Saserv
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
     * Set comision
     *
     * @param string $comision
     * @return Saserv
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

    /**
     * Set esporcomi
     *
     * @param integer $esporcomi
     * @return Saserv
     */
    public function setEsporcomi($esporcomi)
    {
        $this->esporcomi = $esporcomi;

        return $this;
    }

    /**
     * Get esporcomi
     *
     * @return integer 
     */
    public function getEsporcomi()
    {
        return $this->esporcomi;
    }

    /**
     * Set fechauv
     *
     * @param \DateTime $fechauv
     * @return Saserv
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
     * @return Saserv
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
     * Set esimport
     *
     * @param integer $esimport
     * @return Saserv
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
     * Set esventa
     *
     * @param integer $esventa
     * @return Saserv
     */
    public function setEsventa($esventa)
    {
        $this->esventa = $esventa;

        return $this;
    }

    /**
     * Get esventa
     *
     * @return integer 
     */
    public function getEsventa()
    {
        return $this->esventa;
    }

    /**
     * Set escompra
     *
     * @param integer $escompra
     * @return Saserv
     */
    public function setEscompra($escompra)
    {
        $this->escompra = $escompra;

        return $this;
    }

    /**
     * Get escompra
     *
     * @return integer 
     */
    public function getEscompra()
    {
        return $this->escompra;
    }
}
