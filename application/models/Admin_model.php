<?php



class Admin_Model extends CI_Model {



    function __construct() {

        parent::__construct();

    }

    public function replyQusdata($array){

       

       

    $data = $this->db->insert('Reply', $array);

    print_r($data);

    //return true;

}



    public function login($data) {

        $data = $this->db->get_where('admin', $data);

        return $data->result_array();

    }



    public function addSlider($array) {



        $query = $this->db->insert('slider', $array);

        return $query;

    }



    public function getSlider() {

        $query = $this->db->get('slider');

        return $query->result_array();

    }



    public function DeleteSlide($id) {

        $data = $this->db->delete('slider', array('id' => $id));

        return $data;

    }

    public function insert_batch_record($table,$data)
    {
        $this->db->insert_batch($table, $data);
        //echo $this->db->last_query();
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getSlide($id) {

        $data = $this->db->get_where('slider', array('id' => $id));

        return $data->result_array();

    }



    public function updateSlider($id, $array) {

        $this->db->where('id', $id);

        $data = $this->db->update('slider', $array);

        return $data;

    }

    

    public function getAboutData() {

        $this->db->select('*');

        $this->db->from('aboutus');

        $this->db->limit(1);

        $query = $this->db->get();

        $data = $query->result();

        return $data;

    }

    

    public function addAboutData($array, $id) {



        $this->db->where(array('id' => $id));

        $this->db->update('aboutus', $array);

        

        $affected = $this->db->affected_rows();

        if($affected >0){

           $return = true;   

       }else{

        $return =false;

    }

    return $return;

}



public function getProductCategory(){

    $data = $this->db->get('event');

    return $data->result_array();

}



public function addProduct($array){

    $this->db->insert('event', $array);

    return true;

}

public function addtemple($array){

    $this->db->insert('temple', $array);
    return true;

}
public function gettemple(){

  $data = $this->db->get('temple');

  return $data->result_array();

}


public function Deletetemplate($id)
{
    $data = $this->db->delete('temple', array('id' => $id));

    return $data;

}







public function getProduct(){

  $data = $this->db->get('event');

  return $data->result_array();

}



public function getProductById($id) {

   $data = $this->db->get_where('event', array('id' => $id));

   return $data->row();

}



public function updateProduct($array, $product_id) {

    $this->db->where(array('id' => $product_id));

    $this->db->update('event', $array);



    $affected = $this->db->affected_rows();

    if($affected >0){

       $return = true;   

   }else{

    $return =false;

}

return $return;

}



public function deleteProduct($id) {

    $data = $this->db->delete('event', array('id' => $id));

    return $data;

}



public function addService($array){

    $this->db->insert('service', $array);

    return true;

}



public function getServices(){

    $this->db->select('*');

    $this->db->from('service');

    $query = $this->db->get();         

    return $query->result_array();

}



public function getServiceById($id) {

   $data = $this->db->get_where('service', array('id' => $id));

   return $data->row();

}



public function updateService($array, $service_id) {

    $this->db->where(array('id' => $service_id));

    $this->db->update('service', $array);



    $affected = $this->db->affected_rows();

    if($affected >0){

       $return = true;   

   }else{

    $return =false;

}

return $return;

}



public function deleteService($id) {

    $data = $this->db->delete('service', array('id' => $id));

    return $data;

}



public function addTestimonial($array){

    $this->db->insert('testimonial', $array);

    return true;

}



public function getTestimonial(){

    $this->db->select('*');

    $this->db->from('testimonial');

    $query = $this->db->get();         

    return $query->result_array();

}



public function getTestimonialById($id) {

   $data = $this->db->get_where('testimonial', array('id' => $id));

   return $data->row();

}



public function updateTestimonial($array, $test_id) {

    $this->db->where(array('id' => $test_id));

    $this->db->update('testimonial', $array);



    $affected = $this->db->affected_rows();

    if($affected >0){

       $return = true;   

   }else{

    $return =false;

}

return $return;

}



public function deleteTestimonial($id) {

    $data = $this->db->delete('testimonial', array('id' => $id));

    return $data;

}


public function adddarshn($array) {



    $query = $this->db->insert('darshan', $array);

    $insertId = $this->db->insert_id();

    return  $insertId;
}

public function insert_data($table,$array) {
    $query = $this->db->insert($table, $array);

    $insertId = $this->db->insert_id();

    return  $insertId;
}
public function addimages1($array) {

       // print_r($array);


    $query = $this->db->insert('darshan_images', $array);

    return $query;
}

public function getdarshan(){

    $this->db->select('*');

    $this->db->from('darshan');

    $query = $this->db->get();         

    return $query->result_array();

}




public function query_data1($sql)

{

    $query = $this->db->query($sql);
    return $query->result_array();

}
public function query_data2($sql)

{

    $query = $this->db->query($sql);
    return $query;

}
public function viewimges($id)
{
  $query = $this->db->get_where('darshan_images', array('darshan_id' => $id));
  return $query->result_array();

}

public function Deletedarshan($id)
{

    $query = $this->db->delete('darshan', array('id' => $id));

    return $data;



}

public function deleteimsges($id)
{
   $query = $this->db->delete('darshan_images', array('darshan_id' => $id));
   return $data;



}
public function addImagesData($array){

    $this->db->insert('images_category', $array);
    return true;

}

public function viewimagescategory(){

  $data = $this->db->get('images_category');

  return $data->result_array();

}

public function Deleteimagescategory($id)
{
    $data = $this->db->delete('images_category', array('id' => $id));

    return $data;

}

public function delete_record($table,$where)
{
    $data = $this->db->delete($table, $where);

    return $data;

}

public function addimagesdaliy($array)
{

    $query = $this->db->insert('images', $array);

    $insertId = $this->db->insert_id();

    return  $insertId;

}

public function addimagesmultple($array) {




    $query = $this->db->insert('multple_images', $array);

    return $query;
}
public function viewimgesgallery($id)
{
  $query = $this->db->get_where('multple_images', array('image_id' => $id));
  return $query->result_array();

}

public function DeleteimagesGallery($id)
{
    $this->db->delete('multple_images', array('image_id' =>$id));
    $data = $this->db->delete('images', array('id' =>$id));

    

    return $data;


}  

public function addEnquiry($array){

        $this->db->insert('contactus', $array);

        return true;
}


public function viewContact(){

  $data = $this->db->get('contactus');

  return $data->result_array();

}      
//book


public function addbookcate($array){

    $this->db->insert('bookcatgory', $array);
    return true;

}

public function viewbookcate(){

  $data = $this->db->get('bookcatgory');

  return $data->result_array();

}  


public function deletebookcate($id)
{
    $data = $this->db->delete('bookcatgory', array('id' => $id));

    return $data;

}

public function viewbook(){

  $data = $this->db->get('book');

  return $data->result_array();

} 


public function Deletebook($id)
{

    $data = $this->db->delete('book', array('id' => $id));

    return $data;


}  

//audio

public function addaudiocate($array){

    $this->db->insert('audiocatgory', $array);
    return true;

}

public function viewaudiocate(){

  $data = $this->db->get('audiocatgory');

  return $data->result_array();

}

public function viewaudio(){

  $data = $this->db->get('audio');

  return $data->result_array();

} 


public function Deleteaudio($id){

  $data = $this->db->delete('audio', array('id' => $id));

    return $data;


} 

public function Deleteaudiocate($id){

  $data = $this->db->delete('audiocatgory', array('id' => $id));

    return $data;


}


public function addfestival($array)
{


    $this->db->insert('festivals', $array);

    return true;

}

public function viewfestival(){

  $data = $this->db->get('festivals');

  return $data->result_array();

} 


public function deletefestival($id){

  $data = $this->db->delete('festivals', array('id' => $id));
    return $data;
}

    public function updateData($array,$tableNAme) {
        $this->db->where('id', '1');
        $data = $this->db->update($tableNAme, $array);
        return $data;
    }

    public function update_rec($array,$tableNAme,$where) {
        $this->db->where($where);
        $data = $this->db->update($tableNAme, $array);
        return $data;
    }

    function get_selected_value($info,$table,$where='',$order='',$type='',$limit='',$start='')
    {
        $this->db->select($info);
        $this->db->from($table);
        if($where!='')
        {
            $this->db->where($where);
        }
        if($order!='' && $type!='')
        {
          $this->db->order_by($order,$type);
        }
        if($limit!='' && $start!='')
        {
            $this->db->limit($limit,$start);
        }
        elseif($limit!='')
        {
          $this->db->limit($limit);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return array();
        }
    }

    function get_data_with_groupby($info,$table,$groupby,$where='',$limit='')
    {
        $this->db->select($info);
        $this->db->from($table);
        if($where!='')
        {
            $this->db->where($where);
        }
        $this->db->group_by($groupby);
        if($limit!='')
        {
          $this->db->limit($limit);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return array();
        }
    }

    public function get_data_by_two_table($info,$table1,$table2,$relation,$condition='',$order='',$type='',$limit='',$start='')
    {
        $this->db->select($info);
        $this->db->from($table1);
        $this->db->join($table2, $relation,'left');
        if($condition!=''){
            $this->db->where($condition); 
        }
        if($order!='' && $type!='')
        {
            $this->db->order_by($order,$type);
        }
        if($limit!='' && $start!='')
        {
            $this->db->limit($limit,$start);
        }
        elseif($limit!='')
        {
          $this->db->limit($limit);
        }
        $query=$this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return array();
        } 
    }

    public function get_data_by_three_table($info,$table1,$table2,$table3,$relation1,$relation2,$condition='',$order='',$type='',$limit='')
    {
        $this->db->select($info);
        $this->db->from($table1);
        $this->db->join($table2, $relation1,'left');
        $this->db->join($table3, $relation2,'left');
        if($condition!=''){
            $this->db->where($condition); 
        }
        if($order!='' && $type!='')
        {
            $this->db->order_by($order,$type);
        }
        if($limit!='')
        {
            $this->db->limit($limit);
        }
        $query=$this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return array();
        } 
    }


    public function addpost($array){

    $this->db->insert('post', $array);

    return true;

}

public function viewpost(){

  $data = $this->db->get('post');

  return $data->result_array();

} 
public function deletepost($postId){

      $data = $this->db->delete('post', array('id' => $postId));
      
    return $data;

    }

 

public function addQustion($array){

    $this->db->insert('question', $array);

    return true;

}

public function replyQus($array){

    $this->db->insert('Reply',$array);

    return true;

}

}
