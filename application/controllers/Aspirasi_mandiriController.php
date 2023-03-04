<?php 

class Aspirasi_mandiriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("aspirasi_mandiri/index");
    }

    public function tambah_data()
    {
        return $this->load->view("aspirasi_mandiri/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("aspirasi_mandiri/edit");
    }

}

?>