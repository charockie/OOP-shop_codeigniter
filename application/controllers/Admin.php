<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
    }

    public function login()
    {
        echo 'LOGIN PAGE';




        $this->load->view('admin/login/login'/*, $data*/);
    }


}