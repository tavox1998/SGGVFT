<?php

namespace SGGVFT\CajachicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SGGVFT\CajachicaBundle\Entity\UsuarioSaint;

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

    	$em = $this->getDoctrine()->getManager('customer');
    	$db_reports = $em->getRepository("CajachicaBundle:Ssusrs")->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $db_reports,
        $this->get('request')->query->get('page', 1)/*page number*/,
        5/*limit per page*/
    );


        return $this->render(
        	'CajachicaBundle:Reportes:index.html.twig', array(
                'pagination' => $pagination
            )
        );
    }
}
