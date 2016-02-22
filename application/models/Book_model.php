<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends Abstract_model
{
    protected $pages;

    public function __construct($product = NULL)
    {
        parent::__construct($product);
        if(!is_NULL($product)) {
            $this->pages = $product->pages;
        }
    }

    public function setPages($pages)
    {
        $this->pages=$pages;
    }

    public function getPages()
    {
        return $this->pages;
    }


}