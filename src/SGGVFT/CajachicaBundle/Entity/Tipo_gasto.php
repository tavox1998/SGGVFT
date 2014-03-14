<?php 

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SGGVFT\CajachicaBundle\Entity
 *
 * @ORM\Table(name="tipo_gasto")
 * @ORM\Entity
 */
class Tipo_gasto
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $cod_Gasto;
   	/**
   	 * @ORM\Column(type="string", length=255)
   	 */
    protected $desc;
    /**
     * @ORM\Column(type="integer")
     */
    protected $precio;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $status;
    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_Creacion;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $cod_usu;

    /**
     * @ORM\OneToMany(targetEntity="Componente_gastos", mappedBy="cod_Gasto", cascade={"persist", "remove"})
     */


    /**
     * Set cod_Gasto
     *
     * @param integer $codGasto
     * @return Tipo_gasto
     */
    public function setCodGasto($codGasto)
    {
        $this->cod_Gasto = $codGasto;

        return $this;
    }

    /**
     * Get cod_Gasto
     *
     * @return integer 
     */
    public function getCodGasto()
    {
        return $this->cod_Gasto;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Tipo_gasto
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Tipo_gasto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Tipo_gasto
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
     * Set fecha_Creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Tipo_gasto
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_Creacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fecha_Creacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_Creacion;
    }

    /**
     * Set cod_usu
     *
     * @param integer $codUsu
     * @return Tipo_gasto
     */
    public function setCodUsu($codUsu)
    {
        $this->cod_usu = $codUsu;

        return $this;
    }

    /**
     * Get cod_usu
     *
     * @return integer 
     */
    public function getCodUsu()
    {
        return $this->cod_usu;
    }
}
