<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sacortez
 *
 * @ORM\Table(name="SACORTEZ")
 * @ORM\Entity
 */
class Sacortez
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
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=false)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=false)
     */
    private $codesta;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUsua", type="string", length=10, nullable=true)
     */
    private $codusua;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroP", type="string", length=15, nullable=true)
     */
    private $numerop;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroC", type="string", length=10, nullable=true)
     */
    private $numeroc;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroZ", type="string", length=10, nullable=true)
     */
    private $numeroz;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotal", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroF", type="string", length=10, nullable=true)
     */
    private $numerof;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroFacts", type="integer", nullable=false)
     */
    private $nrofacts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroR", type="string", length=10, nullable=true)
     */
    private $numeror;

    /**
     * @var string
     *
     * @ORM\Column(name="TExento", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $texento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotal1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototal1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotal2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototal2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTotal3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtototal3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoTax3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtotax3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TDevExento", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $tdevexento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTotal1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtototal1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTax1", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtotax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTotal2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtototal2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTax2", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtotax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTotal3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtototal3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DevMtoTax3", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $devmtotax3 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=true)
     */
    private $fechae;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroDevol", type="integer", nullable=false)
     */
    private $nrodevol = '0';



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
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sacortez
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
     * Set codesta
     *
     * @param string $codesta
     * @return Sacortez
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
     * Set codusua
     *
     * @param string $codusua
     * @return Sacortez
     */
    public function setCodusua($codusua)
    {
        $this->codusua = $codusua;

        return $this;
    }

    /**
     * Get codusua
     *
     * @return string 
     */
    public function getCodusua()
    {
        return $this->codusua;
    }

    /**
     * Set numerop
     *
     * @param string $numerop
     * @return Sacortez
     */
    public function setNumerop($numerop)
    {
        $this->numerop = $numerop;

        return $this;
    }

    /**
     * Get numerop
     *
     * @return string 
     */
    public function getNumerop()
    {
        return $this->numerop;
    }

    /**
     * Set numeroc
     *
     * @param string $numeroc
     * @return Sacortez
     */
    public function setNumeroc($numeroc)
    {
        $this->numeroc = $numeroc;

        return $this;
    }

    /**
     * Get numeroc
     *
     * @return string 
     */
    public function getNumeroc()
    {
        return $this->numeroc;
    }

    /**
     * Set numeroz
     *
     * @param string $numeroz
     * @return Sacortez
     */
    public function setNumeroz($numeroz)
    {
        $this->numeroz = $numeroz;

        return $this;
    }

    /**
     * Get numeroz
     *
     * @return string 
     */
    public function getNumeroz()
    {
        return $this->numeroz;
    }

    /**
     * Set mtototal
     *
     * @param string $mtototal
     * @return Sacortez
     */
    public function setMtototal($mtototal)
    {
        $this->mtototal = $mtototal;

        return $this;
    }

    /**
     * Get mtototal
     *
     * @return string 
     */
    public function getMtototal()
    {
        return $this->mtototal;
    }

    /**
     * Set numerof
     *
     * @param string $numerof
     * @return Sacortez
     */
    public function setNumerof($numerof)
    {
        $this->numerof = $numerof;

        return $this;
    }

    /**
     * Get numerof
     *
     * @return string 
     */
    public function getNumerof()
    {
        return $this->numerof;
    }

    /**
     * Set nrofacts
     *
     * @param integer $nrofacts
     * @return Sacortez
     */
    public function setNrofacts($nrofacts)
    {
        $this->nrofacts = $nrofacts;

        return $this;
    }

    /**
     * Get nrofacts
     *
     * @return integer 
     */
    public function getNrofacts()
    {
        return $this->nrofacts;
    }

    /**
     * Set numeror
     *
     * @param string $numeror
     * @return Sacortez
     */
    public function setNumeror($numeror)
    {
        $this->numeror = $numeror;

        return $this;
    }

    /**
     * Get numeror
     *
     * @return string 
     */
    public function getNumeror()
    {
        return $this->numeror;
    }

    /**
     * Set texento
     *
     * @param string $texento
     * @return Sacortez
     */
    public function setTexento($texento)
    {
        $this->texento = $texento;

        return $this;
    }

    /**
     * Get texento
     *
     * @return string 
     */
    public function getTexento()
    {
        return $this->texento;
    }

    /**
     * Set mtotax
     *
     * @param string $mtotax
     * @return Sacortez
     */
    public function setMtotax($mtotax)
    {
        $this->mtotax = $mtotax;

        return $this;
    }

    /**
     * Get mtotax
     *
     * @return string 
     */
    public function getMtotax()
    {
        return $this->mtotax;
    }

    /**
     * Set mtototal1
     *
     * @param string $mtototal1
     * @return Sacortez
     */
    public function setMtototal1($mtototal1)
    {
        $this->mtototal1 = $mtototal1;

        return $this;
    }

    /**
     * Get mtototal1
     *
     * @return string 
     */
    public function getMtototal1()
    {
        return $this->mtototal1;
    }

    /**
     * Set mtotax1
     *
     * @param string $mtotax1
     * @return Sacortez
     */
    public function setMtotax1($mtotax1)
    {
        $this->mtotax1 = $mtotax1;

        return $this;
    }

    /**
     * Get mtotax1
     *
     * @return string 
     */
    public function getMtotax1()
    {
        return $this->mtotax1;
    }

    /**
     * Set mtototal2
     *
     * @param string $mtototal2
     * @return Sacortez
     */
    public function setMtototal2($mtototal2)
    {
        $this->mtototal2 = $mtototal2;

        return $this;
    }

    /**
     * Get mtototal2
     *
     * @return string 
     */
    public function getMtototal2()
    {
        return $this->mtototal2;
    }

    /**
     * Set mtotax2
     *
     * @param string $mtotax2
     * @return Sacortez
     */
    public function setMtotax2($mtotax2)
    {
        $this->mtotax2 = $mtotax2;

        return $this;
    }

    /**
     * Get mtotax2
     *
     * @return string 
     */
    public function getMtotax2()
    {
        return $this->mtotax2;
    }

    /**
     * Set mtototal3
     *
     * @param string $mtototal3
     * @return Sacortez
     */
    public function setMtototal3($mtototal3)
    {
        $this->mtototal3 = $mtototal3;

        return $this;
    }

    /**
     * Get mtototal3
     *
     * @return string 
     */
    public function getMtototal3()
    {
        return $this->mtototal3;
    }

    /**
     * Set mtotax3
     *
     * @param string $mtotax3
     * @return Sacortez
     */
    public function setMtotax3($mtotax3)
    {
        $this->mtotax3 = $mtotax3;

        return $this;
    }

    /**
     * Get mtotax3
     *
     * @return string 
     */
    public function getMtotax3()
    {
        return $this->mtotax3;
    }

    /**
     * Set tdevexento
     *
     * @param string $tdevexento
     * @return Sacortez
     */
    public function setTdevexento($tdevexento)
    {
        $this->tdevexento = $tdevexento;

        return $this;
    }

    /**
     * Get tdevexento
     *
     * @return string 
     */
    public function getTdevexento()
    {
        return $this->tdevexento;
    }

    /**
     * Set devmtototal1
     *
     * @param string $devmtototal1
     * @return Sacortez
     */
    public function setDevmtototal1($devmtototal1)
    {
        $this->devmtototal1 = $devmtototal1;

        return $this;
    }

    /**
     * Get devmtototal1
     *
     * @return string 
     */
    public function getDevmtototal1()
    {
        return $this->devmtototal1;
    }

    /**
     * Set devmtotax1
     *
     * @param string $devmtotax1
     * @return Sacortez
     */
    public function setDevmtotax1($devmtotax1)
    {
        $this->devmtotax1 = $devmtotax1;

        return $this;
    }

    /**
     * Get devmtotax1
     *
     * @return string 
     */
    public function getDevmtotax1()
    {
        return $this->devmtotax1;
    }

    /**
     * Set devmtototal2
     *
     * @param string $devmtototal2
     * @return Sacortez
     */
    public function setDevmtototal2($devmtototal2)
    {
        $this->devmtototal2 = $devmtototal2;

        return $this;
    }

    /**
     * Get devmtototal2
     *
     * @return string 
     */
    public function getDevmtototal2()
    {
        return $this->devmtototal2;
    }

    /**
     * Set devmtotax2
     *
     * @param string $devmtotax2
     * @return Sacortez
     */
    public function setDevmtotax2($devmtotax2)
    {
        $this->devmtotax2 = $devmtotax2;

        return $this;
    }

    /**
     * Get devmtotax2
     *
     * @return string 
     */
    public function getDevmtotax2()
    {
        return $this->devmtotax2;
    }

    /**
     * Set devmtototal3
     *
     * @param string $devmtototal3
     * @return Sacortez
     */
    public function setDevmtototal3($devmtototal3)
    {
        $this->devmtototal3 = $devmtototal3;

        return $this;
    }

    /**
     * Get devmtototal3
     *
     * @return string 
     */
    public function getDevmtototal3()
    {
        return $this->devmtototal3;
    }

    /**
     * Set devmtotax3
     *
     * @param string $devmtotax3
     * @return Sacortez
     */
    public function setDevmtotax3($devmtotax3)
    {
        $this->devmtotax3 = $devmtotax3;

        return $this;
    }

    /**
     * Get devmtotax3
     *
     * @return string 
     */
    public function getDevmtotax3()
    {
        return $this->devmtotax3;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sacortez
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
     * Set nrodevol
     *
     * @param integer $nrodevol
     * @return Sacortez
     */
    public function setNrodevol($nrodevol)
    {
        $this->nrodevol = $nrodevol;

        return $this;
    }

    /**
     * Get nrodevol
     *
     * @return integer 
     */
    public function getNrodevol()
    {
        return $this->nrodevol;
    }
}
