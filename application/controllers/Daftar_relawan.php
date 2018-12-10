<?php

class Daftar_relawan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Mistik';
        $this->load->view('templates/header' , $data);
        $this->load->view('app/daftar relawan/index');
        $this->load->view('templates/footer');
    }
}