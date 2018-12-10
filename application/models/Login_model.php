<?php

class Login_model extends CI_Model
{
    public function login($username, $password)
    {
        $check = $this->db->get_where('donatur', array('username' => $username, 'password' => $password));

        if ($check->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}