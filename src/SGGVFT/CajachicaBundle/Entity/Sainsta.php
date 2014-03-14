<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sainsta
 *
 * @ORM\Table(name="SAINSTA", indexes={@ORM\Index(name="SAINSTA_IX1", columns={"CodAlte"})})
 * @ORM\Entity
 */
class Sainsta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodInst", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codinst;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip", type="string", length=40, nullable=true)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAlte", type="string", length=200, nullable=true)
     */
    private $codalte;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="integer", nullable=false)
     */
    private $nivel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="InsPadre", type="integer", nullable=false)
     */
    private $inspadre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Descto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $descto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsComp", type="smallint", nullable=false)
     */
    private $descomp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsSeri", type="smallint", nullable=false)
     */
    private $desseri = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsLote", type="smallint", nullable=false)
     */
    private $deslote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsComi", type="smallint", nullable=false)
     */
    private $descomi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsCorrel", type="smallint", nullable=false)
     */
    private $descorrel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DigitosC", type="smallint", nullable=false)
     */
    private $digitosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DEsTabla", type="smallint", nullable=false)
     */
    private $destabla = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoIns", type="smallint", nullable=false)
     */
    private $tipoins = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="EdoKC", type="string", length=3, nullable=true)
     */
    private $edokc;



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
     * @return Sainsta
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
     * Set codalte
     *
     * @param string $codalte
     * @return Sainsta
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
     * Set nivel
     *
     * @param integer $nivel
     * @return Sainsta
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set inspadre
     *
     * @param integer $inspadre
     * @return Sainsta
     */
    public function setInspadre($inspadre)
    {
        $this->inspadre = $inspadre;

        return $this;
    }

    /**
     * Get inspadre
     *
     * @return integer 
     */
    public function getInspadre()
    {
        return $this->inspadre;
    }

    /**
     * Set descto
     *
     * @param string $descto
     * @return Sainsta
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
     * Set descomp
     *
     * @param integer $descomp
     * @return Sainsta
     */
    public function setDescomp($descomp)
    {
        $this->descomp = $descomp;

        return $this;
    }

    /**
     * Get descomp
     *
     * @return integer 
     */
    public function getDescomp()
    {
        return $this->descomp;
    }

    /**
     * Set desseri
     *
     * @param integer $desseri
     * @return Sainsta
     */
    public function setDesseri($desseri)
    {
        $this->desseri = $desseri;

        return $this;
    }

    /**
     * Get desseri
     *
     * @return integer 
     */
    public function getDesseri()
    {
        return $this->desseri;
    }

    /**
     * Set deslote
     *
     * @param integer $deslote
     * @return Sainsta
     */
    public function setDeslote($deslote)
    {
        $this->deslote = $deslote;

        return $this;
    }

    /**
     * Get deslote
     *
     * @return integer 
     */
    public function getDeslote()
    {
        return $this->deslote;
    }

    /**
     * Set descomi
     *
     * @param integer $descomi
     * @return Sainsta
     */
    public function setDescomi($descomi)
    {
        $this->descomi = $descomi;

        return $this;
    }

    /**
     * Get descomi
     *
     * @return integer 
     */
    public function getDescomi()
    {
        return $this->descomi;
    }

    /**
     * Set descorrel
     *
     * @param integer $descorrel
     * @return Sainsta
     */
    public function setDescorrel($descorrel)
    {
        $this->descorrel = $descorrel;

        return $this;
    }

    /**
     * Get descorrel
     *
     * @return integer 
     */
    public function getDescorrel()
    {
        return $this->descorrel;
    }

    /**
     * Set digitosc
     *
     * @param integer $digitosc
     * @return Sainsta
     */
    public function setDigitosc($digitosc)
    {
        $this->digitosc = $digitosc;

        return $this;
    }

    /**
     * Get digitosc
     *
     * @return integer 
     */
    public function getDigitosc()
    {
        return $this->digitosc;
    }

    /**
     * Set destabla
     *
     * @param integer $destabla
     * @return Sainsta
     */
    public function setDestabla($destabla)
    {
        $this->destabla = $destabla;

        return $this;
    }

    /**
     * Get destabla
     *
     * @return integer 
     */
    public function getDestabla()
    {
        return $this->destabla;
    }

    /**
     * Set tipoins
     *
     * @param integer $tipoins
     * @return Sainsta
     */
    public function setTipoins($tipoins)
    {
        $this->tipoins = $tipoins;

        return $this;
    }

    /**
     * Get tipoins
     *
     * @return integer 
     */
    public function getTipoins()
    {
        return $this->tipoins;
    }

    /**
     * Set edokc
     *
     * @param string $edokc
     * @return Sainsta
     */
    public function setEdokc($edokc)
    {
        $this->edokc = $edokc;

        return $this;
    }

    /**
     * Get edokc
     *
     * @return string 
     */
    public function getEdokc()
    {
        return $this->edokc;
    }
}
