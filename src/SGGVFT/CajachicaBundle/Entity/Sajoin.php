<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sajoin
 *
 * @ORM\Table(name="SAJOIN", uniqueConstraints={@ORM\UniqueConstraint(name="table1table2_idx", columns={"tablename1", "tablename2"})})
 * @ORM\Entity
 */
class Sajoin
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename1", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tablename1;

    /**
     * @var string
     *
     * @ORM\Column(name="tablename2", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tablename2;

    /**
     * @var string
     *
     * @ORM\Column(name="jointype", type="string", length=60, nullable=true)
     */
    private $jointype;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldnames1", type="string", length=255, nullable=true)
     */
    private $fieldnames1;

    /**
     * @var string
     *
     * @ORM\Column(name="operators", type="string", length=60, nullable=true)
     */
    private $operators;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldnames2", type="string", length=255, nullable=true)
     */
    private $fieldnames2;



    /**
     * Set tablename1
     *
     * @param string $tablename1
     * @return Sajoin
     */
    public function setTablename1($tablename1)
    {
        $this->tablename1 = $tablename1;

        return $this;
    }

    /**
     * Get tablename1
     *
     * @return string 
     */
    public function getTablename1()
    {
        return $this->tablename1;
    }

    /**
     * Set tablename2
     *
     * @param string $tablename2
     * @return Sajoin
     */
    public function setTablename2($tablename2)
    {
        $this->tablename2 = $tablename2;

        return $this;
    }

    /**
     * Get tablename2
     *
     * @return string 
     */
    public function getTablename2()
    {
        return $this->tablename2;
    }

    /**
     * Set jointype
     *
     * @param string $jointype
     * @return Sajoin
     */
    public function setJointype($jointype)
    {
        $this->jointype = $jointype;

        return $this;
    }

    /**
     * Get jointype
     *
     * @return string 
     */
    public function getJointype()
    {
        return $this->jointype;
    }

    /**
     * Set fieldnames1
     *
     * @param string $fieldnames1
     * @return Sajoin
     */
    public function setFieldnames1($fieldnames1)
    {
        $this->fieldnames1 = $fieldnames1;

        return $this;
    }

    /**
     * Get fieldnames1
     *
     * @return string 
     */
    public function getFieldnames1()
    {
        return $this->fieldnames1;
    }

    /**
     * Set operators
     *
     * @param string $operators
     * @return Sajoin
     */
    public function setOperators($operators)
    {
        $this->operators = $operators;

        return $this;
    }

    /**
     * Get operators
     *
     * @return string 
     */
    public function getOperators()
    {
        return $this->operators;
    }

    /**
     * Set fieldnames2
     *
     * @param string $fieldnames2
     * @return Sajoin
     */
    public function setFieldnames2($fieldnames2)
    {
        $this->fieldnames2 = $fieldnames2;

        return $this;
    }

    /**
     * Get fieldnames2
     *
     * @return string 
     */
    public function getFieldnames2()
    {
        return $this->fieldnames2;
    }
}
