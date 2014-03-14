<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sapart
 *
 * @ORM\Table(name="SAPART")
 * @ORM\Entity
 */
class Sapart
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
     * @ORM\Column(name="CodAlte", type="string", length=15, nullable=true)
     */
    private $codalte;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsUnid", type="integer", nullable=false)
     */
    private $esunid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsServ", type="integer", nullable=false)
     */
    private $esserv = '0';



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Sapart
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sapart
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
     * Set codalte
     *
     * @param string $codalte
     * @return Sapart
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Sapart
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
     * @return Sapart
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
     * Set esserv
     *
     * @param integer $esserv
     * @return Sapart
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
}
