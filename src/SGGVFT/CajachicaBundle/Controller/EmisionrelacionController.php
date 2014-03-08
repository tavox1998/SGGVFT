<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmisionrelacionController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Emisionrelacion:index.html.twig');
    }
}
