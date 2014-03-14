<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sbopmstr
 *
 * @ORM\Table(name="SBOPMSTR")
 * @ORM\Entity
 */
class Sbopmstr
{
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
     * @ORM\Column(name="CodProv", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codprov;

    /**
     * @var string
     *
     * @ORM\Column(name="NroOPago", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nroopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false)
     */
    private $estado = '0';

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
     * @var integer
     *
     * @ORM\Column(name="Recobrable", type="integer", nullable=false)
     */
    private $recobrable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoRec", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtorec = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodClie", type="string", length=15, nullable=true)
     */
    private $codclie;

    /**
     * @var integer
     *
     * @ORM\Column(name="EdoPago", type="integer", nullable=false)
     */
    private $edopago = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroIDOP", type="integer", nullable=false)
     */
    private $nroidop = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodBanc", type="string", length=30, nullable=false)
     */
    private $codbanc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaE", type="datetime", nullable=false)
     */
    private $fechae;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaP", type="datetime", nullable=false)
     */
    private $fechap;

    /**
     * @var string
     *
     * @ORM\Column(name="CodOper", type="string", length=15, nullable=false)
     */
    private $codoper;

    /**
     * @var string
     *
     * @ORM\Column(name="Clase", type="string", length=15, nullable=false)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="CodBene", type="string", length=30, nullable=false)
     */
    private $codbene;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=60, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=25, nullable=false)
     */
    private $documento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroUTrnB", type="integer", nullable=false)
     */
    private $nroutrnb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroD", type="string", length=20, nullable=false)
     */
    private $numerod;

    /**
     * @var string
     *
     * @ORM\Column(name="Document", type="string", length=40, nullable=false)
     */
    private $document;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroURecP", type="integer", nullable=false)
     */
    private $nrourecp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroURetP", type="integer", nullable=false)
     */
    private $nrouretp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NroDcts", type="integer", nullable=false)
     */
    private $nrodcts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Monto", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $monto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoPagos", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtopagos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MtoReten", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoreten = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Porcent", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $porcent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UsaIDB", type="integer", nullable=false)
     */
    private $usaidb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CtaIDB", type="string", length=15, nullable=false)
     */
    private $ctaidb;

    /**
     * @var string
     *
     * @ORM\Column(name="DCtaIDB", type="string", length=50, nullable=false)
     */
    private $dctaidb;

    /**
     * @var string
     *
     * @ORM\Column(name="CenCtoIdb", type="string", length=15, nullable=false)
     */
    private $cenctoidb;

    /**
     * @var string
     *
     * @ORM\Column(name="MtoIDB", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $mtoidb = '0';

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
     * @var string
     *
     * @ORM\Column(name="Comentario1", type="string", length=50, nullable=true)
     */
    private $comentario1;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario2", type="string", length=50, nullable=true)
     */
    private $comentario2;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario3", type="string", length=50, nullable=true)
     */
    private $comentario3;



    /**
     * Set nrounico
     *
     * @param integer $nrounico
     * @return Sbopmstr
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
     * Set codprov
     *
     * @param string $codprov
     * @return Sbopmstr
     */
    public function setCodprov($codprov)
    {
        $this->codprov = $codprov;

        return $this;
    }

    /**
     * Get codprov
     *
     * @return string 
     */
    public function getCodprov()
    {
        return $this->codprov;
    }

    /**
     * Set nroopago
     *
     * @param string $nroopago
     * @return Sbopmstr
     */
    public function setNroopago($nroopago)
    {
        $this->nroopago = $nroopago;

        return $this;
    }

    /**
     * Get nroopago
     *
     * @return string 
     */
    public function getNroopago()
    {
        return $this->nroopago;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Sbopmstr
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codsucu
     *
     * @param string $codsucu
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * Set recobrable
     *
     * @param integer $recobrable
     * @return Sbopmstr
     */
    public function setRecobrable($recobrable)
    {
        $this->recobrable = $recobrable;

        return $this;
    }

    /**
     * Get recobrable
     *
     * @return integer 
     */
    public function getRecobrable()
    {
        return $this->recobrable;
    }

    /**
     * Set mtorec
     *
     * @param string $mtorec
     * @return Sbopmstr
     */
    public function setMtorec($mtorec)
    {
        $this->mtorec = $mtorec;

        return $this;
    }

    /**
     * Get mtorec
     *
     * @return string 
     */
    public function getMtorec()
    {
        return $this->mtorec;
    }

    /**
     * Set codclie
     *
     * @param string $codclie
     * @return Sbopmstr
     */
    public function setCodclie($codclie)
    {
        $this->codclie = $codclie;

        return $this;
    }

    /**
     * Get codclie
     *
     * @return string 
     */
    public function getCodclie()
    {
        return $this->codclie;
    }

    /**
     * Set edopago
     *
     * @param integer $edopago
     * @return Sbopmstr
     */
    public function setEdopago($edopago)
    {
        $this->edopago = $edopago;

        return $this;
    }

    /**
     * Get edopago
     *
     * @return integer 
     */
    public function getEdopago()
    {
        return $this->edopago;
    }

    /**
     * Set nroidop
     *
     * @param integer $nroidop
     * @return Sbopmstr
     */
    public function setNroidop($nroidop)
    {
        $this->nroidop = $nroidop;

        return $this;
    }

    /**
     * Get nroidop
     *
     * @return integer 
     */
    public function getNroidop()
    {
        return $this->nroidop;
    }

    /**
     * Set codbanc
     *
     * @param string $codbanc
     * @return Sbopmstr
     */
    public function setCodbanc($codbanc)
    {
        $this->codbanc = $codbanc;

        return $this;
    }

    /**
     * Get codbanc
     *
     * @return string 
     */
    public function getCodbanc()
    {
        return $this->codbanc;
    }

    /**
     * Set fechae
     *
     * @param \DateTime $fechae
     * @return Sbopmstr
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
     * Set fechap
     *
     * @param \DateTime $fechap
     * @return Sbopmstr
     */
    public function setFechap($fechap)
    {
        $this->fechap = $fechap;

        return $this;
    }

    /**
     * Get fechap
     *
     * @return \DateTime 
     */
    public function getFechap()
    {
        return $this->fechap;
    }

    /**
     * Set codoper
     *
     * @param string $codoper
     * @return Sbopmstr
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
     * Set clase
     *
     * @param string $clase
     * @return Sbopmstr
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set codbene
     *
     * @param string $codbene
     * @return Sbopmstr
     */
    public function setCodbene($codbene)
    {
        $this->codbene = $codbene;

        return $this;
    }

    /**
     * Get codbene
     *
     * @return string 
     */
    public function getCodbene()
    {
        return $this->codbene;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sbopmstr
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Sbopmstr
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set nroutrnb
     *
     * @param integer $nroutrnb
     * @return Sbopmstr
     */
    public function setNroutrnb($nroutrnb)
    {
        $this->nroutrnb = $nroutrnb;

        return $this;
    }

    /**
     * Get nroutrnb
     *
     * @return integer 
     */
    public function getNroutrnb()
    {
        return $this->nroutrnb;
    }

    /**
     * Set numerod
     *
     * @param string $numerod
     * @return Sbopmstr
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
     * Set document
     *
     * @param string $document
     * @return Sbopmstr
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set nrourecp
     *
     * @param integer $nrourecp
     * @return Sbopmstr
     */
    public function setNrourecp($nrourecp)
    {
        $this->nrourecp = $nrourecp;

        return $this;
    }

    /**
     * Get nrourecp
     *
     * @return integer 
     */
    public function getNrourecp()
    {
        return $this->nrourecp;
    }

    /**
     * Set nrouretp
     *
     * @param integer $nrouretp
     * @return Sbopmstr
     */
    public function setNrouretp($nrouretp)
    {
        $this->nrouretp = $nrouretp;

        return $this;
    }

    /**
     * Get nrouretp
     *
     * @return integer 
     */
    public function getNrouretp()
    {
        return $this->nrouretp;
    }

    /**
     * Set nrodcts
     *
     * @param integer $nrodcts
     * @return Sbopmstr
     */
    public function setNrodcts($nrodcts)
    {
        $this->nrodcts = $nrodcts;

        return $this;
    }

    /**
     * Get nrodcts
     *
     * @return integer 
     */
    public function getNrodcts()
    {
        return $this->nrodcts;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Sbopmstr
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
     * Set mtopagos
     *
     * @param string $mtopagos
     * @return Sbopmstr
     */
    public function setMtopagos($mtopagos)
    {
        $this->mtopagos = $mtopagos;

        return $this;
    }

    /**
     * Get mtopagos
     *
     * @return string 
     */
    public function getMtopagos()
    {
        return $this->mtopagos;
    }

    /**
     * Set mtoreten
     *
     * @param string $mtoreten
     * @return Sbopmstr
     */
    public function setMtoreten($mtoreten)
    {
        $this->mtoreten = $mtoreten;

        return $this;
    }

    /**
     * Get mtoreten
     *
     * @return string 
     */
    public function getMtoreten()
    {
        return $this->mtoreten;
    }

    /**
     * Set porcent
     *
     * @param string $porcent
     * @return Sbopmstr
     */
    public function setPorcent($porcent)
    {
        $this->porcent = $porcent;

        return $this;
    }

    /**
     * Get porcent
     *
     * @return string 
     */
    public function getPorcent()
    {
        return $this->porcent;
    }

    /**
     * Set usaidb
     *
     * @param integer $usaidb
     * @return Sbopmstr
     */
    public function setUsaidb($usaidb)
    {
        $this->usaidb = $usaidb;

        return $this;
    }

    /**
     * Get usaidb
     *
     * @return integer 
     */
    public function getUsaidb()
    {
        return $this->usaidb;
    }

    /**
     * Set ctaidb
     *
     * @param string $ctaidb
     * @return Sbopmstr
     */
    public function setCtaidb($ctaidb)
    {
        $this->ctaidb = $ctaidb;

        return $this;
    }

    /**
     * Get ctaidb
     *
     * @return string 
     */
    public function getCtaidb()
    {
        return $this->ctaidb;
    }

    /**
     * Set dctaidb
     *
     * @param string $dctaidb
     * @return Sbopmstr
     */
    public function setDctaidb($dctaidb)
    {
        $this->dctaidb = $dctaidb;

        return $this;
    }

    /**
     * Get dctaidb
     *
     * @return string 
     */
    public function getDctaidb()
    {
        return $this->dctaidb;
    }

    /**
     * Set cenctoidb
     *
     * @param string $cenctoidb
     * @return Sbopmstr
     */
    public function setCenctoidb($cenctoidb)
    {
        $this->cenctoidb = $cenctoidb;

        return $this;
    }

    /**
     * Get cenctoidb
     *
     * @return string 
     */
    public function getCenctoidb()
    {
        return $this->cenctoidb;
    }

    /**
     * Set mtoidb
     *
     * @param string $mtoidb
     * @return Sbopmstr
     */
    public function setMtoidb($mtoidb)
    {
        $this->mtoidb = $mtoidb;

        return $this;
    }

    /**
     * Get mtoidb
     *
     * @return string 
     */
    public function getMtoidb()
    {
        return $this->mtoidb;
    }

    /**
     * Set notas1
     *
     * @param string $notas1
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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
     * @return Sbopmstr
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

    /**
     * Set comentario1
     *
     * @param string $comentario1
     * @return Sbopmstr
     */
    public function setComentario1($comentario1)
    {
        $this->comentario1 = $comentario1;

        return $this;
    }

    /**
     * Get comentario1
     *
     * @return string 
     */
    public function getComentario1()
    {
        return $this->comentario1;
    }

    /**
     * Set comentario2
     *
     * @param string $comentario2
     * @return Sbopmstr
     */
    public function setComentario2($comentario2)
    {
        $this->comentario2 = $comentario2;

        return $this;
    }

    /**
     * Get comentario2
     *
     * @return string 
     */
    public function getComentario2()
    {
        return $this->comentario2;
    }

    /**
     * Set comentario3
     *
     * @param string $comentario3
     * @return Sbopmstr
     */
    public function setComentario3($comentario3)
    {
        $this->comentario3 = $comentario3;

        return $this;
    }

    /**
     * Get comentario3
     *
     * @return string 
     */
    public function getComentario3()
    {
        return $this->comentario3;
    }
}
