<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller
{
    /**
     * @Route("/filmpost",options={"expose"=true}, name="filmpost")
     */

    public function indexAction(Request $request)
    {

        $form->handleRequest($request);
        if($form->isValid()){
        $data = $form->getData();
        dump($data);
        $post = new Post();
        $post->setTitle($data['title']);
        $post->setPost($data['post']);
        $post->setAuteur($utilisateur->getUsername());
        $post->setdateCreation(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();


        }
        return $this->redirectToRoute('film');
    }

    /**
     * @Route("/film", name="film")
     */

    public function ShowAction(Request $request)
    {
        $repository = $em = $this->getDoctrine()->getRepository('FrontendBundle:Film');

        $film = $repository->findAll();
        
        return $this->render('film/index.html.twig', array('film' => $film));
    }
    /**
     * @Route("/film/{id}", name="onefilm")
     */

    public function oneItemAction(Request $request, $id)
    {
        $form = $this->createFormBuilder()
                ->add('title', TextType::class)
                ->add('post', TextareaType::class)
                ->add('auteur', TextareaType::class)
                ->add('submit', SubmitType::class)
                ->getForm();

        $repository = $em = $this->getDoctrine()->getRepository('FrontendBundle:Film');

        $film = $repository->find($id);
        
        return $this->render('film/one.html.twig', array('film' => $film, 'form' => $form->createView()));
    }
}
