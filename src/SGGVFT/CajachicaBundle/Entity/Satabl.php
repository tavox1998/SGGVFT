<?php

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Satabl
 *
 * @ORM\Table(name="SATABL", uniqueConstraints={@ORM\UniqueConstraint(name="tablenameidx", columns={"tablename"})})
 * @ORM\Entity
 */
class Satabl
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="tablealias", type="string", length=60, nullable=true)
     */
    private $tablealias;



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
     * Set tablealias
     *
     * @param string $tablealias
     * @return Satabl
     */
    public function setTablealias($tablealias)
    {
        $this->tablealias = $tablealias;

        return $this;
    }

    /**
     * Get tablealias
     *
     * @return string 
     */
    public function getTablealias()
    {
        return $this->tablealias;
    }
}
