<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SGGVFT\CajachicaBundle\Entity
 *
 * @ORM\Table(name="componente_gastos")
 * @ORM\Entity
 */
class Componente_gastos
{
	/**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
	protected $cod_Gasto;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $cod_Prod_Serv;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $desc_Prod_Serv;


    /**
     * Set cod_Gasto
     *
     * @param integer $codGasto
     * @return Componente_gastos
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
     * Set cod_Prod_Serv
     *
     * @param integer $codProdServ
     * @return Componente_gastos
     */
    public function setCodProdServ($codProdServ)
    {
        $this->cod_Prod_Serv = $codProdServ;

        return $this;
    }

    /**
     * Get cod_Prod_Serv
     *
     * @return integer 
     */
    public function getCodProdServ()
    {
        return $this->cod_Prod_Serv;
    }

    /**
     * Set desc_Prod_Serv
     *
     * @param integer $descProdServ
     * @return Componente_gastos
     */
    public function setDescProdServ($descProdServ)
    {
        $this->desc_Prod_Serv = $descProdServ;

        return $this;
    }

    /**
     * Get desc_Prod_Serv
     *
     * @return integer 
     */
    public function getDescProdServ()
    {
        return $this->desc_Prod_Serv;
    }
}
