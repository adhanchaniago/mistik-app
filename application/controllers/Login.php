<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $data['judul'] = 'Login Admin';

        if (isset($_POST['submit'])) {
            $username = $this->input->post['username'];
            $password = $this->input->post['password'];
            $success = $this->Login_model->login($username, $password);
            echo $success;
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('app/login/index');
            $this->load->view('templates/footer');
        }
    }
}