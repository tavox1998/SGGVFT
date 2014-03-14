<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SGGVFT\CajachicaBundle\Entity\AutorizarUsuario;
class ReportesController extends Controller
{
	public function indexAction()
    {
    	$db_reports=array(
    		array(
    			'nombre' => 'Gustavo',
    			'apellido' => 'Gonzalez',
    			'cedula' => '1872454'
    		 ),
    		array(
    			'nombre' => 'Efrain',
    			'apellido' => 'Bombilla',
    			'cedula' => '8355972'
    		 )
    	);

    	 $em = $this->getDoctrine()->getManager('saint');
    	 $db_reports = $em->getRepository("CajachicaBundle:UsuarioSaint")->findAll();

        return $this->render(
        	'CajachicaBundle:Reportes:index.html.twig',
        	array(
        		'lists' => $db_reports
        	)
        	);
    }
}
