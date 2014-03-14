<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Safiel
 *
 * @ORM\Table(name="SAFIEL", uniqueConstraints={@ORM\UniqueConstraint(name="tablefieldname_idx", columns={"tablename", "fieldname"}), @ORM\UniqueConstraint(name="tablefieldalias_idx", columns={"tablename", "fieldalias"})})
 * @ORM\Entity
 */
class Safiel
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldname", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldalias", type="string", length=60, nullable=true)
     */
    private $fieldalias;

    /**
     * @var string
     *
     * @ORM\Column(name="datatype", type="string", length=60, nullable=true)
     */
    private $datatype;

    /**
     * @var string
     *
     * @ORM\Column(name="selectable", type="string", length=1, nullable=true)
     */
    private $selectable;

    /**
     * @var string
     *
     * @ORM\Column(name="searchable", type="string", length=1, nullable=true)
     */
    private $searchable;

    /**
     * @var string
     *
     * @ORM\Column(name="sortable", type="string", length=1, nullable=true)
     */
    private $sortable;

    /**
     * @var string
     *
     * @ORM\Column(name="autosearch", type="string", length=1, nullable=true)
     */
    private $autosearch;

    /**
     * @var string
     *
     * @ORM\Column(name="mandatory", type="string", length=1, nullable=true)
     */
    private $mandatory;



    /**
     * Set tablename
     *
     * @param string $tablename
     * @return Safiel
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set fieldname
     *
     * @param string $fieldname
     * @return Safiel
     */
    public function setFieldname($fieldname)
    {
        $this->fieldname = $fieldname;

        return $this;
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
     * Set fieldalias
     *
     * @param string $fieldalias
     * @return Safiel
     */
    public function setFieldalias($fieldalias)
    {
        $this->fieldalias = $fieldalias;

        return $this;
    }

    /**
     * Get fieldalias
     *
     * @return string 
     */
    public function getFieldalias()
    {
        return $this->fieldalias;
    }

    /**
     * Set datatype
     *
     * @param string $datatype
     * @return Safiel
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;

        return $this;
    }

    /**
     * Get datatype
     *
     * @return string 
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * Set selectable
     *
     * @param string $selectable
     * @return Safiel
     */
    public function setSelectable($selectable)
    {
        $this->selectable = $selectable;

        return $this;
    }

    /**
     * Get selectable
     *
     * @return string 
     */
    public function getSelectable()
    {
        return $this->selectable;
    }

    /**
     * Set searchable
     *
     * @param string $searchable
     * @return Safiel
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;

        return $this;
    }

    /**
     * Get searchable
     *
     * @return string 
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Set sortable
     *
     * @param string $sortable
     * @return Safiel
     */
    public function setSortable($sortable)
    {
        $this->sortable = $sortable;

        return $this;
    }

    /**
     * Get sortable
     *
     * @return string 
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Set autosearch
     *
     * @param string $autosearch
     * @return Safiel
     */
    public function setAutosearch($autosearch)
    {
        $this->autosearch = $autosearch;

        return $this;
    }

    /**
     * Get autosearch
     *
     * @return string 
     */
    public function getAutosearch()
    {
        return $this->autosearch;
    }

    /**
     * Set mandatory
     *
     * @param string $mandatory
     * @return Safiel
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * Get mandatory
     *
     * @return string 
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }
}
