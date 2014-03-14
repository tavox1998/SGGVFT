<?php

	namespace SGGVFT\CajachicaBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Validator\Constraints as Assert;

	/**
 	 * SGGVFT\CajachicaBundle\Entity
 	 *
	 * @ORM\Table(name="componente_Solicitud")
	 * @ORM\Entity
     */
	class Componente_solicitud
	{
	    /**
         * @ORM\Id
	     * @ORM\Column(type="integer")
	  	 */
	    protected $cod_Solicitud;
	    /**
	     * @ORM\Column(type="integer")
	     */
	    protected $cod_Gasto;
	    /**
	     * @ORM\Column(type="integer")
	     */
	    protected $cantidad;
	    /**
	     * @ORM\Column(type="integer")
	     */
	    protected $monto_Unit;
	    /**
	     * @ORM\Column(type="integer")
	     */
	    protected $total;

    /**
     * Set cod_Solicitud
     *
     * @param integer $codSolicitud
     * @return Componente_solicitud
     */
    public function setCodSolicitud($codSolicitud)
    {
        $this->cod_Solicitud = $codSolicitud;

        return $this;
    }

    /**
     * Get cod_Solicitud
     *
     * @return integer
     */
    public function getCodSolicitud()
    {
        return $this->cod_Solicitud;
    }

    /**
     * Set cod_Gasto
     *
     * @param integer $codGasto
     * @return Componente_solicitud
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Componente_solicitud
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set monto_Unit
     *
     * @param integer $montoUnit
     * @return Componente_solicitud
     */
    public function setMontoUnit($montoUnit)
    {
        $this->monto_Unit = $montoUnit;

        return $this;
    }

    /**
     * Get monto_Unit
     *
     * @return integer
     */
    public function getMontoUnit()
    {
        return $this->monto_Unit;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Componente_solicitud
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }
}
