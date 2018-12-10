<?php

class Login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->load->view('templates/header' , $data);
        $this->load->view('app/login/index');
        $this->load->view('templates/footer');
    }
}