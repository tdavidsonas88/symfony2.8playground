<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
        /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        $user = array('name' => 'Tom', 'active' => true);
        return $this->render('main/index.html.twig', array(
            'user'=>$user
        ));
    }

}
