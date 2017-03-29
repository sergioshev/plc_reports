<?php

namespace tq\plcr\listingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use tq\plcr\listingsBundle\Form\Type\lecturaFiltersType;
use tq\plcr\listingsBundle\Entity\lecturaFilters;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
  public function lastreadAction()
  {
    $template_params=array(
      'listname' => '',
      'list_desc' => '',
      'lecturas' => array()
    );

    $rep = $this->getDoctrine()->getRepository("tqplcrlistingsBundle:ultimaLectura");
    $data = $rep->findAll();
    
    if (is_array($data)) {
      foreach ($data as $lectura) {
        array_push(
          $template_params['lecturas'], 
          array(
            'mid' => $lectura->getMid(),
            'sid' => $lectura->getSid(),
            'host' => $lectura->getHost(),
            'simbolo' => $lectura->getSimbolo(),
            'fecha' => $lectura->getFecha()->format('Y-m-d H:i:s'),
            'valor' => $lectura->getValor(),
            'intervalo' => $lectura->getIntervalo()
          )
        );
      }
    }
    $template_params['listname'] = "Ultima lectura";
    $template_params['list_desc'] = "Se muestra la ultima lectura registrada";

    return $this->render('tqplcrlistingsBundle:Default:lastread.html.twig', $template_params);
  }

/*
  public function readsAction()
  {
    $template_params=array(
      'listname' => '',
      'list_desc' => '',
      'lecturas' => array()
    );

    $rep = $this->getDoctrine()->getRepository("tqplcrlistingsBundle:lectura");
    $data = $rep->findAll();
    
    if (is_array($data)) {
      foreach ($data as $lectura) {
        array_push(
          $template_params['lecturas'], 
          array(
            'mid' => $lectura->getMid(),
            'sid' => $lectura->getSid(),
            'host' => $lectura->getHost(),
            'simbolo' => $lectura->getSimbolo(),
            'fecha' => $lectura->getFecha()->format('Y-m-d H:i:s'),
            'valor' => $lectura->getValor(),
            'intervalo' => $lectura->getIntervalo(),
            'delta' => $lectura->getDelta()
          )
        );
      }
    }
    $template_params['listname'] = "Lecturas registradas";
    $template_params['list_desc'] = "Se muestran todas las lecturas registradas";

    return $this->render('tqplcrlistingsBundle:Default:reads.html.twig', $template_params);
  }*/

  public function generateReadsXLSAction($dql_filter) {
    return new Response($dql_filter);
  }

  public function readsQueryAction(Request $request) {
    $template_params=array(
      'listname' => 'Consulta de lecturas',
      'list_desc' => '',
      'lecturas' => array(),
      'filter_slice' => null,
      'dql_filter' => null
    );

    $er = $this->getDoctrine()->getRepository('tqplcrlistingsBundle:Slot');
    $filters_data = new lecturaFilters();
    $filters_form = $this->createForm(
      new lecturaFiltersType(), 
      $filters_data, 
      array('er' => $er));

    $template_params['filter_slice'] = $filters_form->createView();

    $filters_form->handleRequest($request);
    if ($filters_form->isValid()) {
      $em = $this->getDoctrine()->getEntityManager();

      $conditions = $filters_data->getDQLConditions();
      if (!empty($conditions)) {
        $conditions = "where $conditions";
      }
      $query = $em->createQuery("
        select l from tqplcrlistingsBundle:lecturaDiaria l $conditions");
      $data = $query->getResult();
      if (is_array($data)) {
        if (count($data) > 0) {
          $template_params['dql_filter'] = $conditions;
        }
        foreach ($data as $lectura) {
          array_push(
            $template_params['lecturas'], 
            array(
              'mid' => $lectura->getMid(),
              'sid' => $lectura->getSid(),
              'host' => $lectura->getHost(),
              'simbolo' => $lectura->getSimbolo(),
              'fecha' => $lectura->getFecha()->format('Y-m-d H:i:s'),
              'valor' => $lectura->getValor(),
              'intervalo' => $lectura->getIntervalo(),
              'delta' => $lectura->getDelta()
            )
          );
        }
      }
    }

    return $this->render('tqplcrlistingsBundle:Default:readsquery.html.twig', $template_params);
  }

}
