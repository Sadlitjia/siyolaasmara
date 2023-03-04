<?php 

class Aspirasi_lainnyaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("aspirasi_lainnya/index");
    }

    public function tambah_data()
    {
        return $this->load->view("aspirasi_lainnya/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("aspirasi_lainnya/edit");
    }

}

?>