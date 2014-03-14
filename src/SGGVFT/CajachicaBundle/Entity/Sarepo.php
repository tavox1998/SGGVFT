<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sarepo
 *
 * @ORM\Table(name="SAREPO", indexes={@ORM\Index(name="folderidx", columns={"folderid"}), @ORM\Index(name="parentidx", columns={"parentid"})})
 * @ORM\Entity
 */
class Sarepo
{
    /**
     * @var string
     *
     * @ORM\Column(name="foldername", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $foldername;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="folderid", type="integer", nullable=false)
     */
    private $folderid;



    /**
     * Set foldername
     *
     * @param string $foldername
     * @return Sarepo
     */
    public function setFoldername($foldername)
    {
        $this->foldername = $foldername;

        return $this;
    }

    /**
     * Get foldername
     *
     * @return string 
     */
    public function getFoldername()
    {
        return $this->foldername;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return Sarepo
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set folderid
     *
     * @param integer $folderid
     * @return Sarepo
     */
    public function setFolderid($folderid)
    {
        $this->folderid = $folderid;

        return $this;
    }

    /**
     * Get folderid
     *
     * @return integer 
     */
    public function getFolderid()
    {
        return $this->folderid;
    }
}
