<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->load->view('templates/header' , $data);
        $this->load->view('app/admin/index');
        $this->load->view('templates/footer');
    }
}
