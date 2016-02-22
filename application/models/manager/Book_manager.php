<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_manager extends Abstract_manager
{
    public $table_name = 'book';

    public function __construct()
    {
        $this->load->database();
        require_once('../application/models/Book_model.php');
    }

}