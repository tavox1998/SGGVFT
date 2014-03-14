<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitor
 *
 * @ORM\Table(name="SAITOR")
 * @ORM\Entity
 */
class Saitor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TipoTra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipotra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroK", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerok;

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
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     */
    private $codprod;

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
     * @ORM\Column(name="TipoOpI", type="string", length=1, nullable=true)
     */
    private $tipoopi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax4", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax5", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax5 = '0';



    /**
     * Set tipotra
     *
     * @param integer $tipotra
     * @return Saitor
     */
    public function setTipotra($tipotra)
    {
        $this->tipotra = $tipotra;

        return $this;
    }

    /**
     * Get tipotra
     *
     * @return integer 
     */
    public function getTipotra()
    {
        return $this->tipotra;
    }

    /**
     * Set numerok
     *
     * @param string $numerok
     * @return Saitor
     */
    public function setNumerok($numerok)
    {
        $this->numerok = $numerok;

        return $this;
    }

    /**
     * Get numerok
     *
     * @return string 
     */
    public function getNumerok()
    {
        return $this->numerok;
    }

    /**
     * Set codubic
     *
     * @param string $codubic
     * @return Saitor
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
     * Set codprod
     *
     * @param string $codprod
     * @return Saitor
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
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Saitor
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
     * Set tipoopi
     *
     * @param string $tipoopi
     * @return Saitor
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
     * Set status
     *
     * @param integer $status
     * @return Saitor
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Saitor
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saitor
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
     * Set descto
     *
     * @param string $descto
     * @return Saitor
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
     * Set mtotax1
     *
     * @param string $mtotax1
     * @return Saitor
     */
    public function setMtotax1($mtotax1)
    {
        $this->mtotax1 = $mtotax1;

        return $this;
    }

    /**
     * Get mtotax1
     *
     * @return string 
     */
    public function getMtotax1()
    {
        return $this->mtotax1;
    }

    /**
     * Set mtotax2
     *
     * @param string $mtotax2
     * @return Saitor
     */
    public function setMtotax2($mtotax2)
    {
        $this->mtotax2 = $mtotax2;

        return $this;
    }

    /**
     * Get mtotax2
     *
     * @return string 
     */
    public function getMtotax2()
    {
        return $this->mtotax2;
    }

    /**
     * Set mtotax3
     *
     * @param string $mtotax3
     * @return Saitor
     */
    public function setMtotax3($mtotax3)
    {
        $this->mtotax3 = $mtotax3;

        return $this;
    }

    /**
     * Get mtotax3
     *
     * @return string 
     */
    public function getMtotax3()
    {
        return $this->mtotax3;
    }

    /**
     * Set mtotax4
     *
     * @param string $mtotax4
     * @return Saitor
     */
    public function setMtotax4($mtotax4)
    {
        $this->mtotax4 = $mtotax4;

        return $this;
    }

    /**
     * Get mtotax4
     *
     * @return string 
     */
    public function getMtotax4()
    {
        return $this->mtotax4;
    }

    /**
     * Set mtotax5
     *
     * @param string $mtotax5
     * @return Saitor
     */
    public function setMtotax5($mtotax5)
    {
        $this->mtotax5 = $mtotax5;

        return $this;
    }

    /**
     * Get mtotax5
     *
     * @return string 
     */
    public function getMtotax5()
    {
        return $this->mtotax5;
    }
}
