<?php 

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SGGVFT\CajachicaBundle\Entity
 *
 * @ORM\Table(name="solicitud_anticipo")
 * @ORM\Entity
 */
class SolicitudesAnticipo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $cod_Solicitud;
    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_Solicitud;
    /**
     * @ORM\Column(type="integer")
     */
    protected $cod_Ciudad;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $desc;
    /**
     * @ORM\Column(type="date")
     */
    protected $fecha_Creacion;
   /**
    * @ORM\Column(type="string", length=255)
    */
    protected $cod_Usu;

   /**
     * @ORM\OneToMany(targetEntity="Componente_solicitud", mappedBy="cod_Solicitud", cascade={"persist", "remove"})
     */

    /**
     * Set cod_Solicitud
     *
     * @param integer $codSolicitud
     * @return Solicitudes_Anticipo
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
     * Set fecha_Solicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return Solicitudes_Anticipo
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fecha_Solicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fecha_Solicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fecha_Solicitud;
    }

    /**
     * Set cod_Ciudad
     *
     * @param integer $codCiudad
     * @return Solicitudes_Anticipo
     */
    public function setCodCiudad($codCiudad)
    {
        $this->cod_Ciudad = $codCiudad;

        return $this;
    }

    /**
     * Get cod_Ciudad
     *
     * @return integer 
     */
    public function getCodCiudad()
    {
        return $this->cod_Ciudad;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Solicitudes_Anticipo
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
     * Set fecha_Creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Solicitudes_Anticipo
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
     * Set cod_Usu
     *
     * @param integer $codUsu
     * @return Solicitudes_Anticipo
     */
    public function setCodUsu($codUsu)
    {
        $this->cod_Usu = $codUsu;

        return $this;
    }

    /**
     * Get cod_Usu
     *
     * @return integer 
     */
    public function getCodUsu()
    {
        return $this->cod_Usu;
    }
}
