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
                return new Response('Person created!');
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
