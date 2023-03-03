<?php 

class Aspirasi_resesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("aspirasi_reses/index");
    }

    public function tambah_data()
    {
        return $this->load->view("aspirasi_reses/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("aspirasi_reses/edit");
    }

}

?>