<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacorrelsis
 *
 * @ORM\Table(name="SACORRELSIS")
 * @ORM\Entity
 */
class Sacorrelsis
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldName", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=true)
     */
    private $codesta;

    /**
     * @var string
     *
     * @ORM\Column(name="ValueStr", type="string", length=40, nullable=true)
     */
    private $valuestr;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValueInt", type="integer", nullable=false)
     */
    private $valueint = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ValueDec", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $valuedec = '0';



    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sacorrelsis
     */
    public function setCodsucu($codsucu)
    {
        $this->codsucu = $codsucu;

        return $this;
    }

    /**
     * Get codsucu
     *
     * @return string 
     */
    public function getCodsucu()
    {
        return $this->codsucu;
    }

    /**
     * Get fieldname
     *
     * @return string 
     */
    public function getFieldname()
    {
        return $this->fieldname;
    }

    /**
     * Set codesta
     *
     * @param string $codesta
     * @return Sacorrelsis
     */
    public function setCodesta($codesta)
    {
        $this->codesta = $codesta;

        return $this;
    }

    /**
     * Get codesta
     *
     * @return string 
     */
    public function getCodesta()
    {
        return $this->codesta;
    }

    /**
     * Set valuestr
     *
     * @param string $valuestr
     * @return Sacorrelsis
     */
    public function setValuestr($valuestr)
    {
        $this->valuestr = $valuestr;

        return $this;
    }

    /**
     * Get valuestr
     *
     * @return string 
     */
    public function getValuestr()
    {
        return $this->valuestr;
    }

    /**
     * Set valueint
     *
     * @param integer $valueint
     * @return Sacorrelsis
     */
    public function setValueint($valueint)
    {
        $this->valueint = $valueint;

        return $this;
    }

    /**
     * Get valueint
     *
     * @return integer 
     */
    public function getValueint()
    {
        return $this->valueint;
    }

    /**
     * Set valuedec
     *
     * @param string $valuedec
     * @return Sacorrelsis
     */
    public function setValuedec($valuedec)
    {
        $this->valuedec = $valuedec;

        return $this;
    }

    /**
     * Get valuedec
     *
     * @return string 
     */
    public function getValuedec()
    {
        return $this->valuedec;
    }
}
