<?php

class Posko_model extends CI_Model{

    public function getAllPosko()
    {
        $query = $this->db->query("SELECT * FROM posko ORDER BY id_posko DESC")->result_array();
        return $query;
    }

    public function hapusDataPosko($id)
    {
        $this->db->delete('posko', array('id_posko' => $id));
    }

    public function editDataPosko($id)
    {
        $data = [

            "nama_posko" => $this->input->post('nama-posko', true)

        ];

        $this->db->where('id_posko', $id);
        $this->db->update('posko', $data);

    }

    public function tambahDataPosko()
    {
        $data = [

            "nama_posko" => $this->input->post('nama-posko', true)

        ];
  
        $this->db->insert('posko', $data);

    }
}