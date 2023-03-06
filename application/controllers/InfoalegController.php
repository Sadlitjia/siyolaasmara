<?php 

class InfoalegController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return $this->load->view("info_aleg/index");
    }

    public function tambah_data()
    {
        return $this->load->view("info_aleg/tambah");
    }

    public function edit_data()
    {
        return $this->load->view("info_aleg/edit");
    }

}

?>