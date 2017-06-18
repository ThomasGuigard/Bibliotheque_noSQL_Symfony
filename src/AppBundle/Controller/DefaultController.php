<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\Livre;
use AppBundle\Form\LivreType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $livre = new Livre();
        $dm = $this->get('doctrine_mongodb');

        $form = $this->createForm(LivreType::class, $livre);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $livre = $form->getData();


             $dm->getManager()->persist($livre);
             $dm->getManager()->flush();

             return $this->redirectToRoute('homepage');
        }

        $livres = $dm->getRepository('AppBundle:Livre')
        ->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
             'livres' => $livres, 'form' => $form->createView()
        ]);
    }
}
