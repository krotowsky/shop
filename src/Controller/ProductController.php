<?php

namespace App\Controller;

use App\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Transliterator;

class ProductController extends Controller
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index($id){

        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy([
                'id'=> $id
                ]);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render(
            'home/std_layout_product_page.html.twig',array(
                'product_name' => $product->getName()
            )
        );
    }

    /**
     * @Route("/product-import", name="import")
     */
    public function Import(){
        $connection = mysqli_connect("136.243.132.254","readonly","XsApoYtCJsRIS63xBdrn","ecommerce") or die("Error " . mysqli_error($connection));

        $sql = "SELECT * FROM product_feed limit 1;";

        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
        $row =mysqli_fetch_assoc($result);

        return new Response(
            var_dump($row)
        );

    }

}
