<?php

class AuthController extendS CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("auth/index");
    }
}