<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film_model extends Abstract_model
{
    protected  $id;
    protected $name;
    protected $description;
    protected $price;
    protected $date;

    public function __construct($product = NULL)
    {
        if(!is_NULL($product)) {
            $this->id = $product->id;
            $this->name = $product->name;
            $this->description = $product->description;
            $this->price = $product->price;
            $this->date = $product->date;
        }
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function setDate($date)
    {
        $this->date=$date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDate()
    {
        return $this->date;
    }


}