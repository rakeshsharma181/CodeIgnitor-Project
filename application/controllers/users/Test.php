<?php

class Test extends CI_Controller{

    public function index(){

$this->load->model('users/users');

$data=$this->users->user_data();

  $a=json_encode($data);

  //print_r($a);

  echo $a;
        //$this->load->view('test');

        // $b=json_decode($a);
        // echo "</br>";
        // print_r ($b);
    }

}

?>