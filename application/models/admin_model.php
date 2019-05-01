<?php

class admin_model extends CI_Model
{

    public function get_penyewa($table){

        $hasil = $this->db->get($table);

        return $hasil->result_array();
    }

    public function get_penyewa_id($table,$id){

        $this->db->where('id',$id);
        $hasil = $this->db->get($table);

        return $hasil->result_array();
    }

    public function update($table,$data,$id){

        $this->db->where('id',$id);
        $update = $this->db->update($table,$data);

        if($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}