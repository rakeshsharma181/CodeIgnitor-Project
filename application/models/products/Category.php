<?php

 class Category extends CI_Model
 {

    
public function get_all_products(){

    $this->db->select('products.name as product,categories.name as category');
    $this->db->from('categories');
    $this->db->where('categories.name','mobile');
    $this->db->join('products','products.category_id=categories.id');
    $product=$this->db->get();

    return $product->result();
}

 }

?>