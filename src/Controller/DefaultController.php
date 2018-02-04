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

    /**
     * @Route ("/cart")
     */
    public function CartAction(){

        return $this->render(
            'home/std_layout_cart.html.twig'
        );
    }

    /**
     * @Route ("/checkout")
     */
    public function CheckoutAction(){

            return $this->render(
                'home/std_layout_checkout_addr.html.twig'
            );
    }

    /**
     * @Route ("/checkout_del")
     */
    public function DeliveryAction()
    {

        return $this->render(
            'home/std_layout_checkout_del.html.twig'
        );
    }

    /**
     * @Route ("/checkout_pay")
     */
    public function PaymentAction(){

        return $this->render(
            'home/std_layout_checkout_pay.html.twig'
        );
    }

    /**
     * @Route ("/checkout_rev")
     */
    public function ReviewAction(){

        return $this->render(
            'home/std_layout_checkout_rev.html.twig'
        );
    }

}