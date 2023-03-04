<?php 

class DapilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("dapil/index");
    }

    public function tambah_data()
    {
        return $this->load->view("dapil/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("dapil/edit");
    }

}

?>