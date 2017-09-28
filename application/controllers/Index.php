<?php

/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 25.09.2017
 * Time: 21:40
 */
class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('index');
        $this->load->view('template/footer');
    }
}