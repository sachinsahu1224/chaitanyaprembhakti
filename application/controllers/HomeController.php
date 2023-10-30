<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_Model');
    }
    
    public function index()
    {
        $data['slider'] = $this->Home_Model->getSlider();
        $data['about'] = $this->Home_Model->getAbout();
        $data['product'] = $this->Home_Model->getProduct("home");
        $data["service"] =$this->Home_Model->getServices("home");
        $data["testimonial"] =$this->Home_Model->getTestimonial();
        $this->load->view('frontend/header');
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/footer');
    }
    
    public function about()
    {
        $data['about'] = $this->Home_Model->getAbout();
        $this->load->view('frontend/header');
        $this->load->view('frontend/about', $data);
        $this->load->view('frontend/footer');
    }
    
    public function service()
    {
        $data["service"] =$this->Home_Model->getServices();
        $this->load->view('frontend/header');
        $this->load->view('frontend/service', $data);
        $this->load->view('frontend/footer');
    }

    public function contact()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/footer');
    }
    
    public function getProductDetail($id)
    {
        $data["productDetail"] =$this->Home_Model->getProductByid($id);
        $this->load->view('frontend/header');
        $this->load->view('frontend/productDetail', $data);
        $this->load->view('frontend/footer');
    }
    
    public function products()
    {
        $data["products"] =$this->Home_Model->getProduct();
        $this->load->view('frontend/header');
        $this->load->view('frontend/products', $data);
        $this->load->view('frontend/footer');
    }
    
    public function addEnquiry()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $body = "Full Name:- ".$name."\n"."Contact No.:- ".$mobile;
        $body .=$message;
        
        require_once(APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->SMTPDebug=2;
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 587;                   // SMTP port to connect to GMail
        $mail->Username   = "thakursanjay564@gmail.com";  // user email address
        $mail->Password   = "softans@123";            // password in GMail
        $mail->SetFrom('mail@gmail.com', 'Mail');  //Who is sending 
        $mail->isHTML(true);
        $mail->Subject    = $subject;
        $mail->Body      = $body;
        $destino = "shubham.suryavanshi16@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "Receiver");
        if(!$mail->Send()) {
            redirect('contact');
        } else {
            redirect('contact');
        }
    }
    
}
