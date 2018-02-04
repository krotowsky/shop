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
            'home/std_layout_index.html.twig'
        );
    }

    /**
     * @Route ("/catalog")
     */
    public function CatalogAction(){

        return $this->render(
            'home/std_layout_catalog.html.twig'
        );
    }

}