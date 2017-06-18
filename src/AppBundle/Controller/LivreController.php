<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Document\Livre;
use AppBundle\Document\Pret;
use AppBundle\Form\PretType;
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

  public function managePretAction(Request $request, $id){

    $pret = new Pret();
    $dm = $this->get('doctrine_mongodb');

    $pret->setLivre($dm->getRepository('AppBundle:Livre')->find($id));

    $form = $this->createForm(PretType::class, $pret);

    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {

      $pret = $form->getData();
      $dm->getManager()->persist($pret);
      $pret->getLivre()->setPret($pret);
      $dm->getManager()->flush();

      return $this->redirectToRoute('homepage');
    }


    $template = $this->render('popup/addPret.html.twig', array( 'form' => $form->createView()))->getContent();

    $json = json_encode($template);
    $response = new Response($json, 200);
    $response->headers->set('Content-Type', 'application/json');

    return $response;






  }


}
