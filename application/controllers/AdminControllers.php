<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class AdminControllers extends CI_Controller {



    function __construct() {

        parent::__construct();

        if ($this->session->userdata('login')) {

            redirect('admin/dashboard');

        }

        $this->load->model('Admin_model');

    }



    public function index() {

        $this->load->view('admin/index');

    }



    public function login() {

        $username = $this->input->post('username');

        $password = $this->input->post('password');

        $data = array('email' => $username, 'password' => md5($password));

        $data = $this->Admin_model->login($data);



        if ($data) {

            foreach ($data as $row) {

                $session_data = array('id' => $row['id'], 'email' => $row['email']);

            }

            $this->session->set_userdata('login', $session_data);

            $this->session->set_flashdata('item', 'login sucessfully');

            redirect('admin/dashboard');

        } else {

            echo "<script>alert('username password error');</script>";

            $this->load->view('admin/index');

        }

    }




}

