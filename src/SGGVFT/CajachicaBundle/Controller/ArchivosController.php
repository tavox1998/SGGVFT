<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArchivosController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Archivos:index.html.twig');
    }
}
