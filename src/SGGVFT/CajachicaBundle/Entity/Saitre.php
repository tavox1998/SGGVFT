<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saitre
 *
 * @ORM\Table(name="SAITRE", uniqueConstraints={@ORM\UniqueConstraint(name="itemid_idx", columns={"itemid"})}, indexes={@ORM\Index(name="folderitemname_idx", columns={"folderid", "itemtype", "itemname"})})
 * @ORM\Entity
 */
class Saitre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="folderid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $folderid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemname", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemname;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemtype", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemtype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modified;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemsize", type="integer", nullable=true)
     */
    private $itemsize;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", length=16, nullable=true)
     */
    private $template;



    /**
     * Set folderid
     *
     * @param integer $folderid
     * @return Saitre
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

    /**
     * Set itemname
     *
     * @param string $itemname
     * @return Saitre
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string 
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set itemtype
     *
     * @param integer $itemtype
     * @return Saitre
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return integer 
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Saitre
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return Saitre
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set itemsize
     *
     * @param integer $itemsize
     * @return Saitre
     */
    public function setItemsize($itemsize)
    {
        $this->itemsize = $itemsize;

        return $this;
    }

    /**
     * Get itemsize
     *
     * @return integer 
     */
    public function getItemsize()
    {
        return $this->itemsize;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Saitre
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set template
     *
     * @param string $template
     * @return Saitre
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
