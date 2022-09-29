<?php

class Belajar extends CI_Controller{
    public function index()
    {
        $this->load->view('view_belajar');
    }
    public function parsing()
    {
        //$data['bio']="Nama Saya Dzakiyyah";
        $data=array(
            'nama'=> "Dzakiyyah Darajati Syah Putri",
            'pekerjaan'=> "Mahasiswa"
        );
        
        $this->load->view('view_belajar', $data);
    }
}
