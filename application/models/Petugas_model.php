<?php

class Petugas_model extends CI_model
{
    public function getAllPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    
}
