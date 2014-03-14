<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitfl
 *
 * @ORM\Table(name="SAITFL", indexes={@ORM\Index(name="SAITFL_IX1", columns={"CodItem", "CodFacL"})})
 * @ORM\Entity
 */
class Saitfl
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodFacL", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codfacl;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

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
     * @var string
     *
     * @ORM\Column(name="CodItem", type="string", length=15, nullable=false)
     */
    private $coditem;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $precio = '0';



    /**
     * Set codfacl
     *
     * @param string $codfacl
     * @return Saitfl
     */
    public function setCodfacl($codfacl)
    {
        $this->codfacl = $codfacl;

        return $this;
    }

    /**
     * Get codfacl
     *
     * @return string 
     */
    public function getCodfacl()
    {
        return $this->codfacl;
    }

    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saitfl
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
     * Set esserv
     *
     * @param integer $esserv
     * @return Saitfl
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
     * @return Saitfl
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
     * Set coditem
     *
     * @param string $coditem
     * @return Saitfl
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saitfl
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
     * Set precio
     *
     * @param string $precio
     * @return Saitfl
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
}
