<?php

class Kelogistik_model extends CI_model
{
    public function getAllKelogistik()
    {
        return $this->db->get('kelogistik')->result_array();
    }

    
}
