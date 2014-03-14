<?php 

namespace SGGVFT\CajachicaBundle\Entity\Saint;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="SSUSRS")
 */
class UsuarioSaint
{
 	/**
     * @ORM\Id()
	 * @ORM\Column(type="string", length=10)
     * @ORM\GeneratedValue(strategy="AUTO")
	 */
    protected $CodUsua;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $Descrip;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $Email;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $Movil;
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $SData6;

    /**
     * Get CodUsua
     *
     * @return string 
     */
    public function getCodUsua()
    {
        return $this->CodUsua;
    }

    /**
     * Set Descrip
     *
     * @param string $descrip
     * @return UsuarioSaint
     */
    public function setDescrip($descrip)
    {
        $this->Descrip = $descrip;

        return $this;
    }

    /**
     * Get Descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->Descrip;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return UsuarioSaint
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Movil
     *
     * @param string $movil
     * @return UsuarioSaint
     */
    public function setMovil($movil)
    {
        $this->Movil = $movil;

        return $this;
    }

    /**
     * Get Movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->Movil;
    }

    /**
     * Set SData6
     *
     * @param string $sData6
     * @return UsuarioSaint
     */
    public function setSData6($sData6)
    {
        $this->SData6 = $sData6;

        return $this;
    }

    /**
     * Get SData6
     *
     * @return string 
     */
    public function getSData6()
    {
        return $this->SData6;
    }
}
