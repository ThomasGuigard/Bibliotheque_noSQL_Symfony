<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\Livre;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

  /*    $product = new Livre();
      $product->setTitre('Titres');
      $product->setIsbn('Isbnr');
      $product->setPret('Prear');
      $product->setThematiques('A Thematique');
      $product->setEtat('A Etar');
      $product->setAuteur('Auteu');

     $dm = $this->get('doctrine_mongodb')->getManager();
     $dm->persist($product);
     $dm->flush();*/


        $livres = $this->get('doctrine_mongodb')
        ->getRepository('AppBundle:Livre')
        ->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
             'livres' => $livres
        ]);
    }
}
