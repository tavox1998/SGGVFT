<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnticiposController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Anticipos:index.html.twig');
    }

    public function nuevoAction()
    {
        return $this->render('CajachicaBundle:Anticipos:nuevo.html.twig');
    }

    public function listMunicipioAction()
    {

    }

    public function listaAction()
    {
        return $this->render('CajachicaBundle:Anticipos:lista.html.twig');
    }

    public function soporteAction()
    {
        return $this->render('CajachicaBundle:Anticipos:soporte.html.twig');
    }
}
