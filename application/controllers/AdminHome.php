<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class AdminHome extends CI_Controller {



    function __construct() {

        parent::__construct();



        if (!$this->session->userdata('login')) {

            redirect('admin');

        }

        $this->load->model('Admin_model');
        $this->load->helper('common');

        // print_r($this->session->userdata('login'));

        // $this->load->model('Admin_model');

    }



    public function index() {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/home');

        $this->load->view('admin/footer');

    }



    public function logout() {

        // Removing session data

        $session_data = array('login' => '');

        $this->session->unset_userdata('login', $session_data);

        //$data['message_display'] = '';

        redirect('/');

    }



    public function addSlider() {



        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/addSlider');
        $this->load->view('admin/footer');

    }



    public function AddSliderData() {

        $config['upload_path'] = 'assets/admin/slider/';

        $config['allowed_types'] = 'gif|jpg|png';

//        $config['max_size'] = 100000;

//        $config['max_width'] = 1024;

//        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('images')) {

            $error = array('error' => $this->upload->display_errors());

            // print_r($error);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/addSlider', $error);
            $this->load->view('admin/footer');

        } else {

            $data = array('upload_data' => $this->upload->data());

            $images = "assets/admin/slider/" . $data['upload_data']['file_name'];
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $array = array("name" => $name, "description" => $description, "images" => $images);
            $query = $this->Admin_model->addSlider($array);

            if ($query) {
                $this->session->set_flashdata('Sucess', 'add slider sucessfully');
                $this->load->view('admin/header');
                $this->load->view('admin/sidebar');
                $this->load->view('admin/addSlider');
                $this->load->view('admin/footer');

            } else {

                $this->session->set_flashdata('error', 'add slider error');

                $this->load->view('admin/header');

                $this->load->view('admin/sidebar');

                $this->load->view('admin/addSlider');

                $this->load->view('admin/footer');

            }

        }

//

    }



    public function viewSlider() {

        $query['data'] = $this->Admin_model->getSlider();

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/ViewSlider', $query);

        $this->load->view('admin/footer');

    }



    public function Deleteslide($id) {

        $data = $this->Admin_model->DeleteSlide($id);

        $query['data'] = $this->Admin_model->getSlider();



        if ($data) {

            $this->session->set_flashdata('sucess', 'Delete slider sucessfully');

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/ViewSlider', $query);

            $this->load->view('admin/footer');

        } else {

            $this->session->set_flashdata('error', 'Delete slider sucessfully');

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/ViewSlider', $query);

            $this->load->view('admin/footer');

        }

    }



    public function editslide($id) {

        $data['singledata'] = $this->Admin_model->getSlide($id);

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/editSlider', $data);

        $this->load->view('admin/footer');

    }

    

    public function quotation() {



        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/quotation');

        $this->load->view('admin/footer');

    }



    public function updateSlide() {

        if ($_FILES['images1']['name'] != "") {

            $config['upload_path'] = 'admin/slider/';

            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('images1')) {

                $error = array('error' => $this->upload->display_errors());

                // print_r($error);

                $this->load->view('admin/header');

                $this->load->view('admin/sidebar');

                $this->load->view('admin/editSlider', $error);

                $this->load->view('admin/footer');

            } else {

                $data = array('upload_data' => $this->upload->data());

                $images = "admin/slider/" . $data['upload_data']['file_name'];

            }

        } else {

            $images = $this->input->post('images');

        }

        $id = $this->input->post('id');

        $name = $this->input->post('name');

        $description = $this->input->post('description');

        $array = array('name' => $name, 'description' => $description, 'images' => $images);

        $data = $this->Admin_model->updateSlider($id, $array);

        if ($data) {

            // $data['singledata'] = $this->Admin_model->getSlide($id);

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/home');

            $this->load->view('admin/footer');

        }

    }



    public function about() {



        if ($this->input->post()) {

            $config['upload_path'] = 'assets/admin/images/';

            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);

            $id = $this->input->post('id');

            $heading = $this->input->post('heading');

            $subheading = $this->input->post('sub_heading');

            $description = $this->input->post('description');



            if ($this->upload->do_upload('image')) {

                // print_r($error);

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/admin/images/" . $data['upload_data']['file_name'];

                $array = array("heading" => $heading, "sub_heading" => $subheading, "description" => $description, "image" => $images);

            } else {

                $array = array("heading" => $heading, "sub_heading" => $subheading, "description" => $description);

            }

            $query = $this->Admin_model->addAboutData($array, $id);

            $data['about'] = $this->Admin_model->getAboutData();

            if ($query) {



                $this->session->set_flashdata('success', 'add about successfully');

                redirect('admin/about');

            } else {

                $this->session->set_flashdata('error', 'add about error');

                redirect('admit/about');

            }

        } else {

            $data['about'] = $this->Admin_model->getAboutData();

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/about', $data);

            $this->load->view('admin/footer');

        }

    }



    public function addProduct() {

        if ($this->input->post()) {

            $config['upload_path'] = 'assets/admin/event';

            $config['allowed_types'] = 'jpeg|jpg|png';

            $this->load->library('upload', $config);



            $productname = $this->input->post('product_name');



            $starttdate = date('Y-m-d', strtotime( $this->input->post('starttdate')));

            $enddate =  date('Y-m-d', strtotime( $this->input->post('enddate')));

            $note=$this->input->post('note');





            

            $description = $this->input->post('description');

            $short_description = $this->input->post('short_description');

            if (!$this->upload->do_upload('images')) {

                $this->session->set_flashdata("error", $this->upload->display_errors());

                redirect('addproduct');

            } else {

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/admin/event/" . $data['upload_data']['file_name'];

                $array = array("name" => $productname, "note" => $note, "short_descrption" => $short_description, "description" => $description, "images" => $images,'start_date'=>$starttdate,'end_date'=>$enddate,'status'=>0);

            }

            $query = $this->Admin_model->addProduct($array);



            if ($query) {



                $this->session->set_flashdata('success', 'product added successfully');

                redirect('admin/addproduct');

            } else {

                $this->session->set_flashdata('error', 'product not added');

                redirect('admin/addproduct');

            }

        } else {

            $data['category'] = $this->Admin_model->getProductCategory();

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/add_product', $data);

            $this->load->view('admin/footer');

        }

    }



    public function viewProduct() {

        $data['product'] = $this->Admin_model->getProduct();

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/viewproduct', $data);

        $this->load->view('admin/footer');

    }



    public function editProduct($id) {

        $data['product'] = $this->Admin_model->getProductById($id);

       // $data['category'] = $this->Admin_model->getProductCategory();

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/edit_product', $data);

        $this->load->view('admin/footer');

    }



    public function updateProduct() {

        if ($this->input->post()) {

            $config['upload_path'] = 'assets/admin/event';

            $config['allowed_types'] = 'jpeg|jpg|png';

            $this->load->library('upload', $config);



            $productid = $this->input->post('id');

            $productname = $this->input->post('product_name');

            $note = $this->input->post('note');

            $description = $this->input->post('description');

            $shortdescription = $this->input->post('short_description');

            $starttdate = date('Y-m-d', strtotime( $this->input->post('starttdate')));

            $enddate =  date('Y-m-d', strtotime( $this->input->post('enddate')));





            if (!$this->upload->do_upload('images')) {

                $this->session->set_flashdata("error", $this->upload->display_errors());

                redirect('addproduct');

            } else {

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/admin/event/" . $data['upload_data']['file_name'];

                $array = array("name" => $productname, "note" => $note, "short_descrption" => $shortdescription, "description" => $description, "images" => $images,'start_date'=>$starttdate,'end_date'=>$enddate);

            }

            $query = $this->Admin_model->updateProduct($array, $productid);



            if ($query) {



                $this->session->set_flashdata('success', 'product updated successfully');

                redirect('AdminHome/editProduct/' . $productid);

            } else {

                $this->session->set_flashdata('error', 'product not updated');

                redirect('AdminHome/editProduct/' . $productid);

            }

        } else {

            $data['product'] = $this->Admin_model->getProductById($id);

            $data['category'] = $this->Admin_model->getProductCategory();

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/edit_product', $data);

            $this->load->view('admin/footer');

        }

    }



    public function deleteProduct($product_id) {

        $isDelete = $this->Admin_model->deleteProduct($product_id);

        if ($isDelete) {

            $this->session->set_flashdata('success', 'product deleted successfully');

            redirect('admin/viewproduct');

        } else {

            $this->session->set_flashdata('success', 'product not deleted');

            redirect('admin/viewproduct');

        }

    }



    public function addService() {

        if ($this->input->post()) {

            $title = $this->input->post('title');

            $description = $this->input->post('description');

            $config['upload_path'] = 'assets/service';

            $config['allowed_types'] = 'jpeg|jpg|png';

            $config['max_width'] = '250';

            $config['max_height'] = '250';

            $this->load->library('upload', $config);



            if ($this->upload->do_upload('image')) {

                // print_r($error);

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/service/" . $data['upload_data']['file_name'];

                $array = array("title" => $title, "description" => $description, "image" => $images);

                $query = $this->Admin_model->addService($array);



                if ($query) {

                    $this->session->set_flashdata('success', 'service added successfully');

                    redirect('admin/addservice');

                } else {

                    $this->session->set_flashdata('error', 'service not added');

                    redirect('admin/addservice');

                }

            } else {

                $this->session->set_flashdata('error', $this->upload->display_errors());

                redirect('admin/addservice');

            }

        } else {

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/addService');

            $this->load->view('admin/footer');

        }

    }



    public function viewService() {

        $data['services'] = $this->Admin_model->getServices();

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/viewservice', $data);

        $this->load->view('admin/footer');

    }



    public function editService($id) {

        $data['service'] = $this->Admin_model->getServiceById($id);



        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/editservice', $data);

        $this->load->view('admin/footer');

    }



    public function updateService() {

        if ($this->input->post()) {

            $id = $this->input->post('service_id');

            $title = $this->input->post('title');

            $description = $this->input->post('description');

            $config['upload_path'] = 'assets/service';

            $config['allowed_types'] = 'jpeg|jpg|png';

            $config['max_width'] = '250';

            $config['max_height'] = '250';



            $this->load->library('upload', $config);



            if ($this->upload->do_upload('image')) {

                // print_r($error);

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/service/" . $data['upload_data']['file_name'];

                $array = array("title" => $title, "description" => $description, "image" => $images);



                $query = $this->Admin_model->updateService($array, $id);

                if ($query) {

                    $this->session->set_flashdata('success', 'service updated successfully');

                    redirect('AdminHome/editService/' . $id);

                } else {

                    $this->session->set_flashdata('error', 'service not updated');

                    redirect('AdminHome/editService/' . $id);

                }

            } else {

                $this->session->set_flashdata('error', $this->upload->display_errors());

                redirect('AdminHome/editService/' . $id);

            }

        } else {

            $data['services'] = $this->Admin_model->getServices();

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/editservice', $data);

            $this->load->view('admin/footer');

        }

    }



    public function deleteService($service_id) {

        $isDelete = $this->Admin_model->deleteService($service_id);

        if ($isDelete) {

            $this->session->set_flashdata('success', 'service deleted successfully');

            redirect('admin/viewservice');

        } else {

            $this->session->set_flashdata('success', 'service not deleted');

            redirect('admin/viewservice');

        }

    }



    public function addtestimonial() {



        if ($this->input->post()) {

            $config['upload_path'] = 'assets/admin/testimonial';

            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);



            $name = $this->input->post('name');

            // $post = $this->input->post('post');

            $comment = $this->input->post('comment');



            if (!$this->upload->do_upload('image')) {

                $this->session->set_flashdata('error', $this->upload->display_errors());

                redirect('admin/testimonial');

            } else {

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/admin/testimonial/" . $data['upload_data']['file_name'];

                $array = array("name" => $name,"comment" => $comment, "image" => $images);

                $query = $this->Admin_model->addTestimonial($array);

                $data['about'] = $this->Admin_model->getAboutData();

                if ($query) {



                    $this->session->set_flashdata('success', 'add testimonial successfully');

                    redirect('admin/testimonial');

                } else {

                    $this->session->set_flashdata('error', 'something went wrong');

                    redirect('admin/testimonial');

                }

            }

        } else {

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/addtestimonial');

            $this->load->view('admin/footer');

        }

    }



    public function viewtestimonial() {

        $data['testimonial'] = $this->Admin_model->getTestimonial();



        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/viewtestimonial', $data);

        $this->load->view('admin/footer');

    }



    public function editTestimonial($id) {

        $data['testimon'] = $this->Admin_model->getTestimonialById($id);



        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/editTestimonial', $data);

        $this->load->view('admin/footer');

    }

    

    public function updateTestimonial() {

        if ($this->input->post()) {

            $id = $this->input->post('id');

            $name = $this->input->post('name');

            

            $comment = $this->input->post('comment');

            $config['upload_path'] = 'assets/admin/testimonial/';

            $config['allowed_types'] = 'jpeg|jpg|png';



            $this->load->library('upload', $config);



            if ($this->upload->do_upload('image')) {

                // print_r($error);

                $data = array('upload_data' => $this->upload->data());

                $images = "assets/admin/testimonial/" . $data['upload_data']['file_name'];

                $array = array("name" => $name, "comment"=>$comment , "image" => $images);



                $query = $this->Admin_model->updateTestimonial($array, $id);

                if ($query) {

                    $this->session->set_flashdata('success', 'Testimonial updated successfully');

                    redirect('AdminHome/editTestimonial/' . $id);

                } else {

                    $this->session->set_flashdata('error', 'Testimonial not updated');

                    redirect('AdminHome/editTestimonial/' . $id);

                }

            } else {

                $this->session->set_flashdata('error', $this->upload->display_errors());

                redirect('AdminHome/editTestimonial/' . $id);

            }

        } else {

            $data['services'] = $this->Admin_model->getServices();

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/editTestimonial', $data);

            $this->load->view('admin/footer');

        }

    }



    public function deleteTestimonial($id) {

        $isDelete = $this->Admin_model->deleteTestimonial($id);

        if ($isDelete) {

            $this->session->set_flashdata('success', 'testimnial deleted successfully');

            redirect('admin/viewtestimonial');

        } else {

            $this->session->set_flashdata('success', 'testimonial not deleted');

            redirect('admin/viewtestimonial');

        }

    }

    function addtemple()
    {
        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/addtemple');

        $this->load->view('admin/footer');


    }


    function addTempledata()
    {
        $config['upload_path'] = 'assets/admin/temple/';
        $config['allowed_types'] = 'gif|jpg|png';

        //        $config['max_size'] = 100000;

        //        $config['max_width'] = 1024;

        //        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('images')) {
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/addtemple', $error);

            $this->load->view('admin/footer');

    } else {

        $data = array('upload_data' => $this->upload->data());

        $images = "assets/admin/temple/" . $data['upload_data']['file_name'];



        $name = $this->input->post('name');

        $description = $this->input->post('description');
        $place = $this->input->post('place');
        $phone = $this->input->post('phone');
        $mobile = $this->input->post('mobile');
        $contact_person = $this->input->post('contact_person');
        $contact_data = array("phone" => $phone, "mobile" => $mobile, "contact_person" => $contact_person);
        $contact_data = json_encode($contact_data);
        $array = array("name" => $name, "description" => $description, "images" => $images,
        "place" => $place,"contact" => $contact_data);

        $query = $this->Admin_model->addtemple($array);

        if ($query) {



            $this->session->set_flashdata('Sucess', 'add temple sucessfully');

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/addtemple');

            $this->load->view('admin/footer');

        } else {

            $this->session->set_flashdata('error', 'add temple error');

            $this->load->view('admin/header');

            $this->load->view('admin/sidebar');

            $this->load->view('admin/addtemple');

            $this->load->view('admin/footer');

        }

    }
}



public function edittemplate($id)
{
    $this->form_validation->set_rules('name','Please enter name','required');
    $this->form_validation->set_rules('description','Please enter description','required');
    if($this->form_validation->run()==TRUE){
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $place = $this->input->post('place');
        $phone = $this->input->post('phone');
        $mobile = $this->input->post('mobile');
        $contact_person = $this->input->post('contact_person');

        $contact_data = array("phone" => $phone, "mobile" => $mobile, "contact_person" => $contact_person);
        $contact_data = json_encode($contact_data);
        $array = array("name" => $name, "description" => $description,"place" => $place,"contact" => $contact_data);

        if(isset($_FILES['images']['name']) && $_FILES['images']['name'] !=""){
            $upload_path = "assets/admin/temple/";
            $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";
            $upload_res = do_upload_file('images', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){
                $pre_img = $this->input->post('pre_img');
                if(file_exists($pre_img)){
                    unlink($pre_img);
                }
                $array['images'] = $upload_path . $upload_res['file_name'];
            }
        }
        
        $data=$this->Admin_model->update_rec($array,"temple",$where=array('id' => $id));
        if($data){
            $this->session->set_flashdata('Sucess','Record updated');
            redirect('adminHome/viewtemple');
        }else{
            redirect('adminHome/edittemplate/'.$id);
        }
    }else{
        $temple = $this->Admin_model->get_selected_value('*','temple',array('id' => $id));
        $contact_person = json_decode($temple[0]['contact']);
        $data = array('name' => $temple[0]['name'],'description' => $temple[0]['description'],
        'place' => $temple[0]['place'],'images' => $temple[0]['images'],'phone' => $contact_person->phone,
        'mobile' => $contact_person->mobile,'contact_person' => $contact_person->contact_person);
        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/edittemple',$data);

        $this->load->view('admin/footer');
    }
}

function viewtemple()
{
    $query['temple'] = $this->Admin_model->gettemple();

    $this->load->view('admin/header');

    $this->load->view('admin/sidebar');

    $this->load->view('admin/viewtemple',$query);

    $this->load->view('admin/footer');
}




public function Deletetemplate($id) {

    $isDelete = $this->Admin_model->Deletetemplate($id);

    if ($isDelete) {

        $this->session->set_flashdata('success', 'temple deleted successfully');

        redirect('adminHome/viewtemple');

    } else {

        $this->session->set_flashdata('error', 'temple not deleted');

        redirect('adminHome/viewtemple');

    }

}


public function addDarshan()
{
    $this->load->view('admin/header');

    $this->load->view('admin/sidebar');

    $this->load->view('admin/addDarshan');

    $this->load->view('admin/footer');
}

public function adddarshandata()
{
    $this->form_validation->set_rules('title','Please enter title','required');
    $this->form_validation->set_rules('event','Please enter event','required');
    $this->form_validation->set_rules('short_description','Please enter description','required');
    $this->form_validation->set_rules('event_date','Please select date','required');
    
    if($this->form_validation->run()==TRUE){
        $title = $this->input->post('title');
        $event=$this->input->post('event');
        $description=$this->input->post('short_description');
        $event_date=$this->input->post('event_date');
        $today_darshan_status = $this->input->post('darshan_type');
        $event_date = date("Y-m-d",strtotime($event_date));

        if(isset($_FILES['front_img']['name']) && $_FILES['front_img']['name'] !=""){
            $upload_path = "assets/admin/darshan/";
            $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";
            $upload_res = do_upload_file('front_img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){

                $cpt = count($_FILES['images']['name']);

                $array = array("title" => $title, "event_name" =>$event, "description" =>$description, "event_date" => $event_date,'front_image' =>$upload_path.$upload_res['file_name'], 'today_darshan'=>$today_darshan_status,'create_at'=>date('Y-m-d H:i:s'));
                /*-------Insert darshan data --------*/
                $insert_id = $this->Admin_model->adddarshn($array);

                $darshan_img_data = array();
                if($cpt > 0){
                    for($i=0; $i<$cpt; $i++) {
                        $_FILES['img']['name']     = $_FILES['images']['name'][$i];
                        $_FILES['img']['type']     = $_FILES['images']['type'][$i];
                        $_FILES['img']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['img']['error']     = $_FILES['images']['error'][$i];
                        $_FILES['img']['size']     = $_FILES['images']['size'][$i];
                        $upload_img_res = do_upload_file('img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
                        if(isset($upload_img_res['success'])){
                            $new_imgdata = array('darshan_id'=>$insert_id,'images'=>$upload_path.$upload_img_res['file_name'],'create_at'=>date('Y-m-d H:i:s'));
                            array_push($darshan_img_data,$new_imgdata);
                        }
                    }
                    if(count($darshan_img_data) >0){
                        $last_id = $this->Admin_model->insert_batch_record('darshan_images',$darshan_img_data);
                        if ($last_id) {
                            $this->session->set_flashdata('Sucess','Darshan successfully added');
                            redirect('AdminHome/viewDarshan');
                        } else {
                           //redirect('AdminHome/viewDarshan');
                            $this->session->set_flashdata('error','Something wrong try again');
                            $this->addDarshan();
                        }
                    }
                }
            }else{
                $this->session->set_flashdata('error',$upload_res['error']);
                $this->addDarshan();
            }
        }else{
            $this->session->set_flashdata('error',$upload_res['error']);
            $this->addDarshan();
        }       
    }
    else{
        $this->addDarshan();
    }
}

public function editdarshan($id)
{
    $this->form_validation->set_rules('title','Please enter title','required');
    $this->form_validation->set_rules('event','Please enter event','required');
    $this->form_validation->set_rules('short_description','Please enter description','required');
    $this->form_validation->set_rules('event_date','Please select date','required');
    
    if($this->form_validation->run()==TRUE){
        $title = $this->input->post('title');
        $event=$this->input->post('event');
        $description=$this->input->post('short_description');
        $event_date=$this->input->post('event_date');
        $today_darshan_status = $this->input->post('darshan_type');
        $event_date = date("Y-m-d",strtotime($event_date));

        $array = array("title" => $title, "event_name" =>$event, "description" =>$description, "event_date" => $event_date,'today_darshan'=>$today_darshan_status);
        $upload_path = "assets/admin/darshan/";
        $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";
        if(isset($_FILES['front_img']['name']) && $_FILES['front_img']['name'] !=""){
            $upload_res = do_upload_file('front_img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){
                $pre_img =$this->input->post('pre_img');
                if(file_exists($pre_img)){
                    unlink($pre_img);
                }
                $array['front_image'] = $upload_path.$upload_res['file_name'];
            }else{
                $this->session->set_flashdata('error',$upload_res['error']);
                redirect('AdminHome/editdarshan/'.$id);
            }
        }
        $cpt = count($_FILES['images']['name']);
        
        $darshan_img_data = array();
        if($cpt > 0){
            for($i=0; $i<$cpt; $i++) {
                $_FILES['img']['name']     = $_FILES['images']['name'][$i];
                $_FILES['img']['type']     = $_FILES['images']['type'][$i];
                $_FILES['img']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['img']['error']     = $_FILES['images']['error'][$i];
                $_FILES['img']['size']     = $_FILES['images']['size'][$i];
                $upload_img_res = do_upload_file('img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
                if(isset($upload_img_res['success'])){
                    $new_imgdata = array('darshan_id'=>$id,'images'=>$upload_path.$upload_img_res['file_name'],'create_at'=>date('Y-m-d H:i:s'));
                    array_push($darshan_img_data,$new_imgdata);
                }
            }
            if(count($darshan_img_data) >0){
                $last_id = $this->Admin_model->insert_batch_record('darshan_images',$darshan_img_data);
                if ($last_id) {
                    $this->session->set_flashdata('Sucess','Darshan successfully added');
                    redirect('AdminHome/viewDarshan');
                } else {
                   //redirect('AdminHome/viewDarshan');
                    $this->session->set_flashdata('error','Something wrong try again');
                    redirect('AdminHome/editdarshan/'.$id);
                }
            }
        }
        /*-------Update darshan data --------*/
        $rec = $this->Admin_model->update_rec($array,'darshan',$where=array('id' => $id));
        $this->session->set_flashdata('success','Record Updated');
        redirect('AdminHome/viewDarshan');
    }
    else{
        $darshan = $this->Admin_model->get_selected_value('*','darshan',array('id' => $id));
        $data = array('title' => $darshan[0]['title'],'description' => $darshan[0]['description'],
        'event_name' => $darshan[0]['event_name'],'event_date' => $darshan[0]['event_date'],
        'front_image' => $darshan[0]['front_image'],'today_darshan' => $darshan[0]['today_darshan']);

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/editDarshan',$data);

        $this->load->view('admin/footer');
    }
}

public function viewDarshan()
{
    $info = array('darshan.id as d_id','title','event_name','darshan.description as d_desc','event_date','create_at');

    $query['darshan_data'] =$this->Admin_model->get_selected_value($info,'darshan',$condition='',$order='darshan.event_date',$type='desc');

    $this->load->view('admin/header');

    $this->load->view('admin/sidebar');

    $this->load->view('admin/viewDarshan',$query);

    $this->load->view('admin/footer');
}

public function viewimages($id)
{
    $query["darshan"] = $this->Admin_model->viewimges($id);

   $this->load->view('admin/header');

   $this->load->view('admin/sidebar');

   $this->load->view('admin/viewDarshanimages',$query);

   $this->load->view('admin/footer');
}

public function Deletedarshan($id)
{
    $data=$this->Admin_model->Deletedarshan($id);
    $this->Admin_model->deleteimsges($id);

    if($data)
    {

        //$this->session->set_flashdata('success', ' deleted successfully');
        redirect('AdminHome/viewDarshan');
    } else {

        //  $this->session->set_flashdata('error', ' not deleted');
        redirect('AdminHome/viewDarshan');
    }
}

public function allfestival_images()
{
    $data['gallery_data'] = $this->Admin_model->get_data_by_two_table(array('photo_gellary.id','photo_gellary.title','photo_gellary.event_id','photo_gellary.description as desc','photo_gellary.event_date','photo_gellary.front_image','photo_gellary.create_at','event.id as eventid','event.name'),'photo_gellary','event','photo_gellary.event_id=event.id',$condition='',$order='photo_gellary.create_at',$type='desc',$limit='');
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/image_gallery/gellarylist',$data);
    $this->load->view('admin/footer');
}

public function view_gallery_images($id)
{
    $data['images'] = $this->Admin_model->get_selected_value(array('id','images','create_at'),'gellary_images',$condition=array('photo_gellary_id' =>$id),$order='create_at',$type='desc');
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/image_gallery/gallery_images_list.php',$data);
    $this->load->view('admin/footer');
}

public function Deletegallery($id)
{
    $isDelete = $this->Admin_model->delete_record('photo_gellary',array('id' =>$id));
    if ($isDelete) {
        $this->session->set_flashdata('success', ' Record deleted successfully');
        redirect('admin/gellary_images_list');
    } else {
        $this->session->set_flashdata('error', ' not deleted');
        redirect('admin/gallery_list');
    }
}

public function gellary_img_add(){
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $data['event_list'] = $this->Admin_model->get_selected_value(array('id','name'),'event',$where=array('status' => '0'),$order='name',$type='asc',$limit='');
    $this->load->view('admin/image_gallery/addimg',$data); 
    $this->load->view('admin/footer');
}

public function addfestival_images()
{
    $this->form_validation->set_rules('title','Please enter title','required');
    $this->form_validation->set_rules('event','Please enter event','required');
    $this->form_validation->set_rules('short_description','Please enter description','required');
    $this->form_validation->set_rules('upload_date','Please select date','required');
    
    if($this->form_validation->run()==TRUE){
        $title = $this->input->post('title');
        $event=$this->input->post('event');
        $description=$this->input->post('short_description');
        $event_date=$this->input->post('upload_date');
        $event_date = date("Y-m-d",strtotime($event_date));

        if(isset($_FILES['front_img']['name']) && $_FILES['front_img']['name'] !=""){
            $upload_path = "assets/admin/gellary/";
            $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";
            $upload_res = do_upload_file('front_img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){

                $cpt = count($_FILES['images']['name']);

                $array = array("title" => $title, "event_id" =>$event, "description" =>$description, "event_date" => $event_date,'front_image' =>$upload_path.$upload_res['file_name'],'create_at'=>date('Y-m-d H:i:s'));
                /*-------Insert darshan data --------*/
                $insert_id = $this->Admin_model->insert_data('photo_gellary',$array);

                $gallery_img_data = array();
                if($cpt > 0){
                    for($i=0; $i<$cpt; $i++) {
                        $_FILES['img']['name']     = $_FILES['images']['name'][$i];
                        $_FILES['img']['type']     = $_FILES['images']['type'][$i];
                        $_FILES['img']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['img']['error']     = $_FILES['images']['error'][$i];
                        $_FILES['img']['size']     = $_FILES['images']['size'][$i];
                        $upload_img_res = do_upload_file('img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
                        if(isset($upload_img_res['success'])){
                            $new_imgdata = array('photo_gellary_id'=>$insert_id,'images'=>$upload_path.$upload_img_res['file_name'],'create_at'=>date('Y-m-d H:i:s'));
                            array_push($gallery_img_data,$new_imgdata);
                        }
                    }
                    if(count($gallery_img_data) >0){
                        $last_id = $this->Admin_model->insert_batch_record('gellary_images',$gallery_img_data);
                        if ($last_id) {
                            $this->session->set_flashdata('Sucess','Record successfully added');
                            redirect('admin/gallery_list');
                        } else {
                            $this->session->set_flashdata('error','Something wrong try again');
                            $this->gellary_img_add();
                        }
                    }
                }
            }else{
                $this->session->set_flashdata('error',$upload_res['error']);
                $this->gellary_img_add();
            }
        }else{
            $this->session->set_flashdata('error',$upload_res['error']);
            $this->gellary_img_add();
        }       
    }
    else{
        $this->gellary_img_add();
    }
}

public function editfestival_images($id){
    $this->form_validation->set_rules('title','Please enter title','required');
    $this->form_validation->set_rules('event','Please enter event','required');
    $this->form_validation->set_rules('short_description','Please enter description','required');
    $this->form_validation->set_rules('upload_date','Please select date','required');
    
    if($this->form_validation->run()==TRUE){
        $title = $this->input->post('title');
        $event=$this->input->post('event');
        $description=$this->input->post('short_description');
        $event_date=$this->input->post('upload_date');
        $event_date = date("Y-m-d",strtotime($event_date));

        $array = array("title" => $title, "event_id" =>$event, "description" =>$description, "event_date" => $event_date);
        $upload_path = "assets/admin/gellary/";
        $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";
        if(isset($_FILES['front_img']['name']) && $_FILES['front_img']['name'] !=""){
            $upload_res = do_upload_file('front_img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){
                $array['front_image'] = $upload_path.$upload_res['file_name'];
            }else{
                $this->session->set_flashdata('error',$upload_res['error']);
                redirect('adminHome/editfestival_images/'.$id);   
            }
        }
        $cpt = count($_FILES['images']['name']);
        /*-------Update photo gallery data --------*/
        $gallery_img_data = array();
        if($cpt > 0){
            for($i=0; $i<$cpt; $i++) {
                $_FILES['img']['name']     = $_FILES['images']['name'][$i];
                $_FILES['img']['type']     = $_FILES['images']['type'][$i];
                $_FILES['img']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['img']['error']     = $_FILES['images']['error'][$i];
                $_FILES['img']['size']     = $_FILES['images']['size'][$i];
                $upload_img_res = do_upload_file('img', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
                if(isset($upload_img_res['success'])){
                    $new_imgdata = array('photo_gellary_id'=>$id,'images'=>$upload_path.$upload_img_res['file_name'],'create_at'=>date('Y-m-d H:i:s'));
                    array_push($gallery_img_data,$new_imgdata);
                }
            }
            if(count($gallery_img_data) >0){
                $last_id = $this->Admin_model->insert_batch_record('gellary_images',$gallery_img_data);
            }        
        }
        $this->Admin_model->update_rec($array,'photo_gellary',$where= array('id' => $id));
        $this->session->set_flashdata('Sucess','Record Updated');
        redirect('admin/gallery_list');   
    }
    else{
        $gallery = $this->Admin_model->get_selected_value('*','photo_gellary',array('id' => $id));
        $data = array('title' => $gallery[0]['title'],'description' => $gallery[0]['description'],
        'event_id' => $gallery[0]['event_id'],'event_date' => $gallery[0]['event_date'],
        'front_image' => $gallery[0]['front_image']);
        $data['event_list'] = $this->Admin_model->get_selected_value(array('id','name'),'event',$where=array('status' => '0'),$order='name',$type='asc',$limit='');

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/image_gallery/editimg',$data);

        $this->load->view('admin/footer');
    }
}

public function addImages()
{
    $this->load->view('admin/header');

    $this->load->view('admin/sidebar');

    $this->load->view('admin/AddImages');

    $this->load->view('admin/footer');
}

function addImagesData()
{

  $config['upload_path'] = 'assets/admin/imagesdata/';


  $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';

//        $config['max_size'] = 100000;

//        $config['max_width'] = 1024;

//        $config['max_height'] = 768;

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('images')) {

    $error = array('error' => $this->upload->display_errors());

            // print_r($error);



    $this->load->view('admin/header');

    $this->load->view('admin/sidebar');

    $this->load->view('admin/AddImages', $error);

    $this->load->view('admin/footer');

} else {

    $data = array('upload_data' => $this->upload->data());

    $images = "assets/admin/imagesdata/" . $data['upload_data']['file_name'];



    $name = $this->input->post('name');

    $description = $this->input->post('description');

    $array = array("name" => $name, "description" => $description, "images" => $images);

    $query = $this->Admin_model->addImagesData($array);

    if ($query) {



        $this->session->set_flashdata('Sucess', 'add images sucessfully');

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/AddImages');

        $this->load->view('admin/footer');

    } else {

        $this->session->set_flashdata('error', 'add images error');

        $this->load->view('admin/header');

        $this->load->view('admin/sidebar');

        $this->load->view('admin/AddImages');

        $this->load->view('admin/footer');

    }

}
}

public function editimagecategory($id)
{
    $this->form_validation->set_rules('name','Please enter name','required');
    $this->form_validation->set_rules('description','Please enter description','required');
    
    if($this->form_validation->run()==TRUE){
        $name=$this->input->post('name');
        $description=$this->input->post('description');
        $upload_path = "assets/admin/imagesdata/";

        $array = array("name" => $name, "description" => $description);
        if (isset($_FILES['images']) && $_FILES['images']['name'] != ''){
            $allowed_types = "gif|jpg|png|jpeg|JPEG|PNG|JPG|GIF";

            $upload_res = do_upload_file('images', $upload_path, $allowed_types,$max_size="",$max_width="",$max_height="");
            if(isset($upload_res['success']) && $upload_res['success']==true){
                $cover_img = $upload_path.$upload_res['file_name'];
                $array['images'] = $cover_img;
            }
            else{
                $this->session->set_flashdata('error',$upload_res['error']);
                redirect("AdminHome/editaudiocategory/".$id);
            }
        }
        $last_id=$this->Admin_model->update_rec($array,"images_category",$where=array('id' => $id));
        if($last_id){
            $this->session->set_flashdata('Sucess',"Record Updated successfully");
            redirect("AdminHome/viewimagescategory");
        }else{
            $this->session->set_flashdata('error',"Something wrong try again");
            redirect("AdminH