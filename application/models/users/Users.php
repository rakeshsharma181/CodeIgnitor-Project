<?php

Class Users extends CI_Model{

    public function user_data(){

       $data= $this->db->get('users');

       return $data->result_array();


    }
}


?>