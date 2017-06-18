<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Document\Livre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LivreController extends Controller
{


 public function deleteBookAction($id){

    $livre=$this->get('doctrine_mongodb')->getRepository('AppBundle:Livre')->find($id);
    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->remove($livre);
    $dm->flush();

    return $this->redirectToRoute('homepage');
  }


}
