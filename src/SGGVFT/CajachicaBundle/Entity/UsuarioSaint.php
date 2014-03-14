<?php 

namespace SGGVFT\CajachicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SGGVFT\CajachicaBundle\Entity
 *
 * @ORM\Entity(repositoryClass="")
 * @ORM\Table(name="SSUSRS")
 */
class UsuarioSaint
{
 	/**
     * @ORM\Id()
	 * @ORM\Column(type="string", length=10)
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
     * @ORM\Column(type="integer")
     */
    protected $IdUserNot;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $Profile;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $CodVend;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $UsrDta1;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $UsrDta2;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $UsrDta3;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $UsrDta4;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $UsrDta5;
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $SData1;
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $SData2;
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $SData3;
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

    /**
     * Set CodUsua
     *
     * @param string $codUsua
     * @return UsuarioSaint
     */
    public function setCodUsua($codUsua)
    {
        $this->CodUsua = $codUsua;

        return $this;
    }

    /**
     * Set IdUserNot
     *
     * @param integer $idUserNot
     * @return UsuarioSaint
     */
    public function setIdUserNot($idUserNot)
    {
        $this->IdUserNot = $idUserNot;

        return $this;
    }

    /**
     * Get IdUserNot
     *
     * @return integer 
     */
    public function getIdUserNot()
    {
        return $this->IdUserNot;
    }

    /**
     * Set Profile
     *
     * @param string $profile
     * @return UsuarioSaint
     */
    public function setProfile($profile)
    {
        $this->Profile = $profile;

        return $this;
    }

    /**
     * Get Profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * Set CodVend
     *
     * @param string $codVend
     * @return UsuarioSaint
     */
    public function setCodVend($codVend)
    {
        $this->CodVend = $codVend;

        return $this;
    }

    /**
     * Get CodVend
     *
     * @return string 
     */
    public function getCodVend()
    {
        return $this->CodVend;
    }

    /**
     * Set UsrDta1
     *
     * @param string $usrDta1
     * @return UsuarioSaint
     */
    public function setUsrDta1($usrDta1)
    {
        $this->UsrDta1 = $usrDta1;

        return $this;
    }

    /**
     * Get UsrDta1
     *
     * @return string 
     */
    public function getUsrDta1()
    {
        return $this->UsrDta1;
    }

    /**
     * Set UsrDta2
     *
     * @param string $usrDta2
     * @return UsuarioSaint
     */
    public function setUsrDta2($usrDta2)
    {
        $this->UsrDta2 = $usrDta2;

        return $this;
    }

    /**
     * Get UsrDta2
     *
     * @return string 
     */
    public function getUsrDta2()
    {
        return $this->UsrDta2;
    }

    /**
     * Set UsrDta3
     *
     * @param string $usrDta3
     * @return UsuarioSaint
     */
    public function setUsrDta3($usrDta3)
    {
        $this->UsrDta3 = $usrDta3;

        return $this;
    }

    /**
     * Get UsrDta3
     *
     * @return string 
     */
    public function getUsrDta3()
    {
        return $this->UsrDta3;
    }

    /**
     * Set UsrDta4
     *
     * @param string $usrDta4
     * @return UsuarioSaint
     */
    public function setUsrDta4($usrDta4)
    {
        $this->UsrDta4 = $usrDta4;

        return $this;
    }

    /**
     * Get UsrDta4
     *
     * @return string 
     */
    public function getUsrDta4()
    {
        return $this->UsrDta4;
    }

    /**
     * Set UsrDta5
     *
     * @param string $usrDta5
     * @return UsuarioSaint
     */
    public function setUsrDta5($usrDta5)
    {
        $this->UsrDta5 = $usrDta5;

        return $this;
    }

    /**
     * Get UsrDta5
     *
     * @return string 
     */
    public function getUsrDta5()
    {
        return $this->UsrDta5;
    }

    /**
     * Set SData1
     *
     * @param string $sData1
     * @return UsuarioSaint
     */
    public function setSData1($sData1)
    {
        $this->SData1 = $sData1;

        return $this;
    }

    /**
     * Get SData1
     *
     * @return string 
     */
    public function getSData1()
    {
        return $this->SData1;
    }

    /**
     * Set SData2
     *
     * @param string $sData2
     * @return UsuarioSaint
     */
    public function setSData2($sData2)
    {
        $this->SData2 = $sData2;

        return $this;
    }

    /**
     * Get SData2
     *
     * @return string 
     */
    public function getSData2()
    {
        return $this->SData2;
    }

    /**
     * Set SData3
     *
     * @param string $sData3
     * @return UsuarioSaint
     */
    public function setSData3($sData3)
    {
        $this->SData3 = $sData3;

        return $this;
    }

    /**
     * Get SData3
     *
     * @return string 
     */
    public function getSData3()
    {
        return $this->SData3;
    }
}
