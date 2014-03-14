<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saexis
 *
 * @ORM\Table(name="SAEXIS")
 * @ORM\Entity
 */
class Saexis
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
     * @ORM\Column(name="PuestoI", type="string", length=10, nullable=true)
     */
    private $puestoi;

    /**
     * @var string
     *
     * @ORM\Column(name="Existen", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $existen = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ExUnidad", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $exunidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantPed", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantped = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UnidPed", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $unidped = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CantCom", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $cantcom = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UnidCom", type="decimal", precision=28, scale=4, nullable=false)
     */
    private $unidcom = '0';



    /**
     * Set codprod
     *
     * @param string $codprod
     * @return Saexis
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
     * @return Saexis
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
     * Set puestoi
     *
     * @param string $puestoi
     * @return Saexis
     */
    public function setPuestoi($puestoi)
    {
        $this->puestoi = $puestoi;

        return $this;
    }

    /**
     * Get puestoi
     *
     * @return string 
     */
    public function getPuestoi()
    {
        return $this->puestoi;
    }

    /**
     * Set existen
     *
     * @param string $existen
     * @return Saexis
     */
    public function setExisten($existen)
    {
        $this->existen = $existen;

        return $this;
    }

    /**
     * Get existen
     *
     * @return string 
     */
    public function getExisten()
    {
        return $this->existen;
    }

    /**
     * Set exunidad
     *
     * @param string $exunidad
     * @return Saexis
     */
    public function setExunidad($exunidad)
    {
        $this->exunidad = $exunidad;

        return $this;
    }

    /**
     * Get exunidad
     *
     * @return string 
     */
    public function getExunidad()
    {
        return $this->exunidad;
    }

    /**
     * Set cantped
     *
     * @param string $cantped
     * @return Saexis
     */
    public function setCantped($cantped)
    {
        $this->cantped = $cantped;

        return $this;
    }

    /**
     * Get cantped
     *
     * @return string 
     */
    public function getCantped()
    {
        return $this->cantped;
    }

    /**
     * Set unidped
     *
     * @param string $unidped
     * @return Saexis
     */
    public function setUnidped($unidped)
    {
        $this->unidped = $unidped;

        return $this;
    }

    /**
     * Get unidped
     *
     * @return string 
     */
    public function getUnidped()
    {
        return $this->unidped;
    }

    /**
     * Set cantcom
     *
     * @param string $cantcom
     * @return Saexis
     */
    public function setCantcom($cantcom)
    {
        $this->cantcom = $cantcom;

        return $this;
    }

    /**
     * Get cantcom
     *
     * @return string 
     */
    public function getCantcom()
    {
        return $this->cantcom;
    }

    /**
     * Set unidcom
     *
     * @param string $unidcom
     * @return Saexis
     */
    public function setUnidcom($unidcom)
    {
        $this->unidcom = $unidcom;

        return $this;
    }

    /**
     * Get unidcom
     *
     * @return string 
     */
    public function getUnidcom()
    {
        return $this->unidcom;
    }
}
