<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film_manager extends Abstract_manager
{
    public $table_name = 'film';

    public function __construct()
    {
        $this->load->database();
        require_once('../application/models/Film_model.php');
    }


}