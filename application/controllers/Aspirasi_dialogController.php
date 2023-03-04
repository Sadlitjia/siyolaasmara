<?php 

class Aspirasi_dialogController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("aspirasi_dialog/index");
    }

    public function tambah_data()
    {
        return $this->load->view("aspirasi_dialog/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("aspirasi_dialog/edit");
    }

}

?>