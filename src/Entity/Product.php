<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId = 5;



    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }


    public function getDescription(){
        return $this->description;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }

    public function getCreatedAi(){
        return $this->createdAt;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setCreatedAt($createdAt){
        $this->createdAt = $createdAt;
    }
}
