<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FondofijoController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Fondofijo:index.html.twig');
    }
}
