<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportesController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Reportes:index.html.twig');
    }
}
