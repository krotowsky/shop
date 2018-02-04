<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * @Route ("/")
     */
    public function IndexAction(){

        return $this->render(
            'home/index.html.twig', array(
                'number'=>'1'
            )
        );
    }

}