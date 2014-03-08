<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjustesController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Ajustes:index.html.twig');
    }
}
