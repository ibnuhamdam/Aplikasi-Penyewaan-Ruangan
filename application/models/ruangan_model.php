<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ruangan_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_ruangan($table){
        $hasil = $this->db->get($table);

        return $hasil->result_array();
        
    }
    function get_ruangan_id($table,$id){
        $this->db->where('id',$id);
        $hasil = $this->db->get($table);

        return $hasil->result_array();
        
    }
    function insert_data($table,$data){
        $insert = $this->db->insert($table, $data);

        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}