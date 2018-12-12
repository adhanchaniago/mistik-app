<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bencana_model');
        
    }

    public function index()
    {
        $data['judul'] = 'Mistik';
        $data['bencana'] = $this->Bencana_model->getAllBencana();
        $this->load->view('templates/header' , $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
