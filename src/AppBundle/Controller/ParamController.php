<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParamController extends Controller
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction($name)
    {
        // replace this example code with whatever you need
        return $this->render('hello/name.html.twig', [
            'name' => $name,
            'other_name' => 'world',
        ]);
    }

}
