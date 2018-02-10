<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Person;
use AppBundle\Form\PersonType;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
        /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        $person = new Person();
        $form = $this->createForm(new PersonType(), $person);

        $request = $this->get('request');
        $form->handleRequest($request);

        if($request->getMethod() == 'POST') {
            if($form->isValid()){
                $email = $form->get('email')->getData();
                $fullname = $form->get('fullname')->getData();

                $person->setEmail($email);
                $person->setFullname($fullname);

                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();

                return new Response('Person '.$fullname.'/'.$email.' created!');
            }
            $user = array('name' => 'Tom', 'active' => true);
                return $this->render('main/index.html.twig', array(
                'form'=>$form->createView()
            ));
        }

        $user = array('name' => 'Tom', 'active' => true);
        return $this->render('main/index.html.twig', array(
            'form'=>$form->createView()
        ));
    }

}
