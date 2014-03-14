<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saexiscon
 *
 * @ORM\Table(name="SAEXISCON")
 * @ORM\Entity
 */
class Saexiscon
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodProd", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprod;

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
     * @ORM\Column(name="CodAlte", type="string", length=10, nullable=false)
     */
    private $codalte;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoTra", type="string", length=1, nullable=true)
     */
    private $tipotra;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=true)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroK", type="string", length=10, nullable=true)
     */
    private $numerok;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsUnid", type="smallint", nullable=false)
     */
    private $esunid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaV", type="datetime", nullable=true)
     */
    private $fechav;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroLinea", type="integer", nullable=false)
     */
    private $nrolinea = '0';



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Saexiscon
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
     * Set codubic
     *
     * @param string $codubic
     * @return Saexiscon
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
     * Set codalte
     *
     * @param string $codalte
     * @return Saexiscon
     */
    public function setCodalte($codalte)
    {
        $this->codalte = $codalte;

        return $this;
    }

    /**
     * Get codalte
     *
     * @return string 
     */
    public function getCodalte()
    {
        return $this->codalte;
    }

    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saexiscon
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
     * Set tipotra
     *
     * @param string $tipotra
     * @return Saexiscon
     */
    public function setTipotra($tipotra)
    {
        $this->tipotra = $tipotra;

        return $this;
    }

    /**
     * Get tipotra
     *
     * @return string 
     */
    public function getTipotra()
    {
        return $this->tipotra;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saexiscon
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
     * Set numerok
     *
     * @param string $numerok
     * @return Saexiscon
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Saexiscon
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
     * Set esunid
     *
     * @param integer $esunid
     * @return Saexiscon
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saexiscon
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
     * Set fechav
     *
     * @param \DateTime $fechav
     * @return Saexiscon
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
     * Set monto
     *
     * @param string $monto
     * @return Saexiscon
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set nrolinea
     *
     * @param integer $nrolinea
     * @return Saexiscon
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
}
