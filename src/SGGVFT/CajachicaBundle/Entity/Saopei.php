<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saopei
 *
 * @ORM\Table(name="SAOPEI", indexes={@ORM\Index(name="SAOPEI_IX1", columns={"TipoOpI", "Autori"}), @ORM\Index(name="SAOPEI_IX2", columns={"TipoOpI", "Respon"})})
 * @ORM\Entity
 */
class Saopei
{
    /**
     * @var string
     *
     * @ORM\Column(name="TipoOpI", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoopi;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numerod;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUnico", type="integer", nullable=false)
     */
    private $nrounico;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=2, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSucu", type="string", length=5, nullable=true)
     */
    private $codsucu;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEsta", type="string", length=10, nullable=true)
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
     * @ORM\Column(name="CodUbic", type="string", length=10, nullable=true)
     */
    private $codubic;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUbic2", type="string", length=10, nullable=true)
     */
    private $codubic2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Signo", type="smallint", nullable=false)
     */
    private $signo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaT", type="datetime", nullable=true)
     */
    private $fechat;

    /**
     * @var string
     *
     * @ORM\Column(name="OTipo", type="string", length=1, nullable=true)
     */
    private $otipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ONumero", type="string", length=10, nullable=true)
     */
    private $onumero;

    /**
     * @var string
     *
     * @ORM\Column(name="Autori", type="string", length=40, nullable=true)
     */
    private $autori;

    /**
     * @var string
     *
     * @ORM\Column(name="Respon", type="string", length=40, nullable=true)
     */
    private $respon;

    /**
     * @var string
     *
     * @ORM\Column(name="UsoMat", type="string", length=40, nullable=true)
     */
    private $usomat;

    /**
     * @var string
     *
     * @ORM\Column(name="OrdenC", type="string", length=30, nullable=true)
     */
    private $ordenc;

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

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
     * @ORM\Column(name="CodOper", type="string", length=10, nullable=true)
     */
    private $codoper;

    /**
     * @var integer
     *
     * @ORM\Column(name="UsoInterno", type="smallint", nullable=false)
     */
    private $usointerno = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EsConsig", type="smallint", nullable=false)
     */
    private $esconsig = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Notas1", type="string", length=60, nullable=true)
     */
    private $notas1;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas2", type="string", length=60, nullable=true)
     */
    private $notas2;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas3", type="string", length=60, nullable=true)
     */
    private $notas3;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas4", type="string", length=60, nullable=true)
     */
    private $notas4;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas5", type="string", length=60, nullable=true)
     */
    private $notas5;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas6", type="string", length=60, nullable=true)
     */
    private $notas6;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas7", type="string", length=60, nullable=true)
     */
    private $notas7;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas8", type="string", length=60, nullable=true)
     */
    private $notas8;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas9", type="string", length=60, nullable=true)
     */
    private $notas9;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas10", type="string", length=60, nullable=true)
     */
    private $notas10;



    /**
     * Set tipoopi
     *
     * @param string $tipoopi
     * @return Saopei
     */
    public function setTipoopi($tipoopi)
    {
        $this->tipoopi = $tipoopi;

        return $this;
    }

    /**
     * Get tipoopi
     *
     * @return string 
     */
    public function getTipoopi()
    {
        return $this->tipoopi;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Saopei
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
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Saopei
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
     * Set status
     *
     * @param string $status
     * @return Saopei
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Saopei
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
     * @return Saopei
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
     * @return Saopei
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
     * Set codubic
     *
     * @param string $codubic
     * @return Saopei
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
     * Set codubic2
     *
     * @param string $codubic2
     * @return Saopei
     */
    public function setCodubic2($codubic2)
    {
        $this->codubic2 = $codubic2;

        return $this;
    }

    /**
     * Get codubic2
     *
     * @return string 
     */
    public function getCodubic2()
    {
        return $this->codubic2;
    }

    /**
     * Set signo
     *
     * @param integer $signo
     * @return Saopei
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return integer 
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set fechat
     *
     * @param \DateTime $fechat
     * @return Saopei
     */
    public function setFechat($fechat)
    {
        $this->fechat = $fechat;

        return $this;
    }

    /**
     * Get fechat
     *
     * @return \DateTime 
     */
    public function getFechat()
    {
        return $this->fechat;
    }

    /**
     * Set otipo
     *
     * @param string $otipo
     * @return Saopei
     */
    public function setOtipo($otipo)
    {
        $this->otipo = $otipo;

        return $this;
    }

    /**
     * Get otipo
     *
     * @return string 
     */
    public function getOtipo()
    {
        return $this->otipo;
    }

    /**
     * Set onumero
     *
     * @param string $onumero
     * @return Saopei
     */
    public function setOnumero($onumero)
    {
        $this->onumero = $onumero;

        return $this;
    }

    /**
     * Get onumero
     *
     * @return string 
     */
    public function getOnumero()
    {
        return $this->onumero;
    }

    /**
     * Set autori
     *
     * @param string $autori
     * @return Saopei
     */
    public function setAutori($autori)
    {
        $this->autori = $autori;

        return $this;
    }

    /**
     * Get autori
     *
     * @return string 
     */
    public function getAutori()
    {
        return $this->autori;
    }

    /**
     * Set respon
     *
     * @param string $respon
     * @return Saopei
     */
    public function setRespon($respon)
    {
        $this->respon = $respon;

        return $this;
    }

    /**
     * Get respon
     *
     * @return string 
     */
    public function getRespon()
    {
        return $this->respon;
    }

    /**
     * Set usomat
     *
     * @param string $usomat
     * @return Saopei
     */
    public function setUsomat($usomat)
    {
        $this->usomat = $usomat;

        return $this;
    }

    /**
     * Get usomat
     *
     * @return string 
     */
    public function getUsomat()
    {
        return $this->usomat;
    }

    /**
     * Set ordenc
     *
     * @param string $ordenc
     * @return Saopei
     */
    public function setOrdenc($ordenc)
    {
        $this->ordenc = $ordenc;

        return $this;
    }

    /**
     * Get ordenc
     *
     * @return string 
     */
    public function getOrdenc()
    {
        return $this->ordenc;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Saopei
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
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Saopei
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
     * @return Saopei
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
     * Set codoper
     *
     * @param string $codoper
     * @return Saopei
     */
    public function setCodoper($codoper)
    {
        $this->codoper = $codoper;

        return $this;
    }

    /**
     * Get codoper
     *
     * @return string 
     */
    public function getCodoper()
    {
        return $this->codoper;
    }

    /**
     * Set usointerno
     *
     * @param integer $usointerno
     * @return Saopei
     */
    public function setUsointerno($usointerno)
    {
        $this->usointerno = $usointerno;

        return $this;
    }

    /**
     * Get usointerno
     *
     * @return integer 
     */
    public function getUsointerno()
    {
        return $this->usointerno;
    }

    /**
     * Set esconsig
     *
     * @param integer $esconsig
     * @return Saopei
     */
    public function setEsconsig($esconsig)
    {
        $this->esconsig = $esconsig;

        return $this;
    }

    /**
     * Get esconsig
     *
     * @return integer 
     */
    public function getEsconsig()
    {
        return $this->esconsig;
    }

    /**
     * Set notas1
     *
     * @param string $notas1
     * @return Saopei
     */
    public function setNotas1($notas1)
    {
        $this->notas1 = $notas1;

        return $this;
    }

    /**
     * Get notas1
     *
     * @return string 
     */
    public function getNotas1()
    {
        return $this->notas1;
    }

    /**
     * Set notas2
     *
     * @param string $notas2
     * @return Saopei
     */
    public function setNotas2($notas2)
    {
        $this->notas2 = $notas2;

        return $this;
    }

    /**
     * Get notas2
     *
     * @return string 
     */
    public function getNotas2()
    {
        return $this->notas2;
    }

    /**
     * Set notas3
     *
     * @param string $notas3
     * @return Saopei
     */
    public function setNotas3($notas3)
    {
        $this->notas3 = $notas3;

        return $this;
    }

    /**
     * Get notas3
     *
     * @return string 
     */
    public function getNotas3()
    {
        return $this->notas3;
    }

    /**
     * Set notas4
     *
     * @param string $notas4
     * @return Saopei
     */
    public function setNotas4($notas4)
    {
        $this->notas4 = $notas4;

        return $this;
    }

    /**
     * Get notas4
     *
     * @return string 
     */
    public function getNotas4()
    {
        return $this->notas4;
    }

    /**
     * Set notas5
     *
     * @param string $notas5
     * @return Saopei
     */
    public function setNotas5($notas5)
    {
        $this->notas5 = $notas5;

        return $this;
    }

    /**
     * Get notas5
     *
     * @return string 
     */
    public function getNotas5()
    {
        return $this->notas5;
    }

    /**
     * Set notas6
     *
     * @param string $notas6
     * @return Saopei
     */
    public function setNotas6($notas6)
    {
        $this->notas6 = $notas6;

        return $this;
    }

    /**
     * Get notas6
     *
     * @return string 
     */
    public function getNotas6()
    {
        return $this->notas6;
    }

    /**
     * Set notas7
     *
     * @param string $notas7
     * @return Saopei
     */
    public function setNotas7($notas7)
    {
        $this->notas7 = $notas7;

        return $this;
    }

    /**
     * Get notas7
     *
     * @return string 
     */
    public function getNotas7()
    {
        return $this->notas7;
    }

    /**
     * Set notas8
     *
     * @param string $notas8
     * @return Saopei
     */
    public function setNotas8($notas8)
    {
        $this->notas8 = $notas8;

        return $this;
    }

    /**
     * Get notas8
     *
     * @return string 
     */
    public function getNotas8()
    {
        return $this->notas8;
    }

    /**
     * Set notas9
     *
     * @param string $notas9
     * @return Saopei
     */
    public function setNotas9($notas9)
    {
        $this->notas9 = $notas9;

        return $this;
    }

    /**
     * Get notas9
     *
     * @return string 
     */
    public function getNotas9()
    {
        return $this->notas9;
    }

    /**
     * Set notas10
     *
     * @param string $notas10
     * @return Saopei
     */
    public function setNotas10($notas10)
    {
        $this->notas10 = $notas10;

        return $this;
    }

    /**
     * Get notas10
     *
     * @return string 
     */
    public function getNotas10()
    {
        return $this->notas10;
    }
}
