<?php

class Home_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
     public function getSlider() {
        $query = $this->db->get('slider');
        return $query->result_array();
        
    }
    
    public function getAbout() {
        $query = $this->db->get('aboutus');
        return $query->row();
        
    }
    
    public function getProduct($tag=""){
        $query = $this->db->get('event');

        if($tag=="home"){

        $this->db->limit(3);    
        }
        $query = $this->db->get('event');         
        return $query->result_array();
    }
    
    public function getProductById($id) {
         $this->db->select('p.id, p.product_name, p.description,p.short_description, p.image, c.category_name');
        $this->db->from('product as p');
        $this->db->join('product_category as c', "p.category_id=c.id");
        $this->db->where(array('p.id'=>$id));
        $data = $this->db->get();         
      
        return $data->row();
    }
    
    public function getServices($tag=""){
        $this->db->select('*');
        $this->db->from('service');
        if($tag=="home"){
        $this->db->limit(6);    
        }
        $query = $this->db->get();         
        return $query->result_array();
    }
    
    public function getTestimonial(){
        $this->db->select('*');
        $this->db->from('testimonial');
        $query = $this->db->get();         
        return $query->result_array();
    }
}

