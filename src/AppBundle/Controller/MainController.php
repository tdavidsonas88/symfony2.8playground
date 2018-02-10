<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Person;
use AppBundle\Form\PersonType;

class MainController extends Controller
{
        /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        $person = new Person();
        $form = $this->createForm(new PersonType(), $person);

        $user = array('name' => 'Tom', 'active' => true);
        return $this->render('main/index.html.twig', array(
            'form'=>$form->createView()
        ));
    }

}
