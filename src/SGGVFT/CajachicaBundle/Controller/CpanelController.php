<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CpanelController extends Controller
{
	public function indexAction()
    {
        return $this->render('CajachicaBundle:Cpanel:index.html.twig');
    }

    public function menuAction()
    {
    	if ($this->container->has('profiler'))
		{
			$this->container->get('profiler')->disable();
		}

        return $this->render('CajachicaBundle:Cpanel:menu.html.twig');
    }
}
