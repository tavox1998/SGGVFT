<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saeopi
 *
 * @ORM\Table(name="SAEOPI")
 * @ORM\Entity
 */
class Saeopi
{
    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=true)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoCargos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtocargos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoDescarg", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtodescarg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTraslad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotraslad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CntCargos", type="integer", nullable=false)
     */
    private $cntcargos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CntDescarg", type="integer", nullable=false)
     */
    private $cntdescarg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CntTraslad", type="integer", nullable=false)
     */
    private $cnttraslad = '0';



    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saeopi
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
     * Set mtocargos
     *
     * @param string $mtocargos
     * @return Saeopi
     */
    public function setMtocargos($mtocargos)
    {
        $this->mtocargos = $mtocargos;

        return $this;
    }

    /**
     * Get mtocargos
     *
     * @return string 
     */
    public function getMtocargos()
    {
        return $this->mtocargos;
    }

    /**
     * Set mtodescarg
     *
     * @param string $mtodescarg
     * @return Saeopi
     */
    public function setMtodescarg($mtodescarg)
    {
        $this->mtodescarg = $mtodescarg;

        return $this;
    }

    /**
     * Get mtodescarg
     *
     * @return string 
     */
    public function getMtodescarg()
    {
        return $this->mtodescarg;
    }

    /**
     * Set mtotraslad
     *
     * @param string $mtotraslad
     * @return Saeopi
     */
    public function setMtotraslad($mtotraslad)
    {
        $this->mtotraslad = $mtotraslad;

        return $this;
    }

    /**
     * Get mtotraslad
     *
     * @return string 
     */
    public function getMtotraslad()
    {
        return $this->mtotraslad;
    }

    /**
     * Set cntcargos
     *
     * @param integer $cntcargos
     * @return Saeopi
     */
    public function setCntcargos($cntcargos)
    {
        $this->cntcargos = $cntcargos;

        return $this;
    }

    /**
     * Get cntcargos
     *
     * @return integer 
     */
    public function getCntcargos()
    {
        return $this->cntcargos;
    }

    /**
     * Set cntdescarg
     *
     * @param integer $cntdescarg
     * @return Saeopi
     */
    public function setCntdescarg($cntdescarg)
    {
        $this->cntdescarg = $cntdescarg;

        return $this;
    }

    /**
     * Get cntdescarg
     *
     * @return integer 
     */
    public function getCntdescarg()
    {
        return $this->cntdescarg;
    }

    /**
     * Set cnttraslad
     *
     * @param integer $cnttraslad
     * @return Saeopi
     */
    public function setCnttraslad($cnttraslad)
    {
        $this->cnttraslad = $cnttraslad;

        return $this;
    }

    /**
     * Get cnttraslad
     *
     * @return integer 
     */
    public function getCnttraslad()
    {
        return $this->cnttraslad;
    }
}
