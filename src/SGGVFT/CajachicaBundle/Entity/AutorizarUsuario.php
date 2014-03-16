<?php 

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SGGVFT\CajachicaBundle\Entity
 *
 * @ORM\Table(name="autorizar_usuarios")
 * @ORM\Entity
 */
class AutorizarUsuario
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
  /**
   * @ORM\Column(type="string", length=255)
   */
    protected $cod_Usu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cod_Usu
     *
     * @param integer $codUsu
     * @return AutorizarUsuario
     */
    public function setCodUsu($codUsu)
    {
        $this->cod_Usu = $codUsu;

        return $this;
    }

    /**
     * Get cod_Usu
     *
     * @return integer 
     */
    public function getCodUsu()
    {
        return $this->cod_Usu;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return AutorizarUsuario
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
}
