<?php 

class Aspirasi_demoController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("aspirasi_demo/index");
    }

    public function tambah_data()
    {
        return $this->load->view("aspirasi_demo/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("aspirasi_demo/edit");
    }

}

?>