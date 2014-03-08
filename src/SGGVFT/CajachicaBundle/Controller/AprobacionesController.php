<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AprobacionesController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Aprobaciones:index.html.twig');
    }
}
