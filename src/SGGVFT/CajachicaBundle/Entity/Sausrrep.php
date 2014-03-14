<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sausrrep
 *
 * @ORM\Table(name="SAUSRREP", indexes={@ORM\Index(name="SAUSRREP_IX1", columns={"SisSnt", "CodMenu", "NroRpt"})})
 * @ORM\Entity
 */
class Sausrrep
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrounico;

    /**
     * @var integer
     *
     * @ORM\Column(name="SisSnt", type="integer", nullable=false)
     */
    private $sissnt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodMenu", type="string", length=10, nullable=false)
     */
    private $codmenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroRpt", type="integer", nullable=false)
     */
    private $nrorpt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=70, nullable=false)
     */
    private $descrip;



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
     * Set sissnt
     *
     * @param integer $sissnt
     * @return Sausrrep
     */
    public function setSissnt($sissnt)
    {
        $this->sissnt = $sissnt;

        return $this;
    }

    /**
     * Get sissnt
     *
     * @return integer 
     */
    public function getSissnt()
    {
        return $this->sissnt;
    }

    /**
     * Set codmenu
     *
     * @param string $codmenu
     * @return Sausrrep
     */
    public function setCodmenu($codmenu)
    {
        $this->codmenu = $codmenu;

        return $this;
    }

    /**
     * Get codmenu
     *
     * @return string 
     */
    public function getCodmenu()
    {
        return $this->codmenu;
    }

    /**
     * Set nrorpt
     *
     * @param integer $nrorpt
     * @return Sausrrep
     */
    public function setNrorpt($nrorpt)
    {
        $this->nrorpt = $nrorpt;

        return $this;
    }

    /**
     * Get nrorpt
     *
     * @return integer 
     */
    public function getNrorpt()
    {
        return $this->nrorpt;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Sausrrep
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
}
