<?php

class Bantuan_model extends CI_model
{
    public function getAllBantuan()
    {
        return $this->db->get('bantuan')->result_array();
    }

    
}
