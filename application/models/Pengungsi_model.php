<?php

class Pengungsi_model extends CI_model
{
    public function getAllPengungsi()
    {
        return $this->db->get('pengungsi')->result_array();
    }

    
}
