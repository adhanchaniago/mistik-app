<?php

class Posko_model extends CI_model
{
    public function getAllPosko()
    {
        return $this->db->get('posko')->result_array();
    }

    
}
