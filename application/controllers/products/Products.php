<?php

class Products extends CI_Controller{

    public function data(){

        $this->load->model('products/category');

        $pro=$this->category->get_all_products();


        $b=json_encode($pro);

        echo $b;
    }
}

?>