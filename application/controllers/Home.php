<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helpers(array('url','form'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function index()
    {
        $this->load->view("header");
        $this->load->model('Display');
        $data['announcement'] = $this->Display->disAnno();
        $this->load->view("nav",$data);
        $this->load->view("crl");
        $this->load->view("multiCrl");
        $this->load->view("footer");
    }
    
    public function ind()
    {
        $this->load->view("header");
        $this->load->model('Display');
        $data['announcement'] = $this->Display->disAnno();
        $this->load->view("nav",$data);
        $this->load->view("industrialRo");
    }

    public function contactUs()
    {
        $this->load->view("header");
        $this->load->model('Display');
        $data['announcement'] = $this->Display->disAnno();
        $this->load->view("nav",$data);
        $this->load->view("contactUs");
        $this->load->view("footer");
    }
    
    public function validateContactUs()
    {
        $this->form_validation->set_rules("fullName", "Full Name" , "required");
        $this->form_validation->set_rules("mobile", "Mobile" , "required|numeric|exact_length[10]");
        $this->form_validation->set_rules("email", "Email" , "required|valid_email");
        $this->form_validation->set_rules("msg", "Message" , "required");
        if($this->form_validation->run())
        {
            $data = array(
                "fullname" => $this->input->post('fullName'),
                "mobile" => $this->input->post('mobile'),
                "email" => $this->input->post('email'),
                "msg" => $this->input->post('msg')
            );
            $this->load->model('Insert');
            $r = $this->Insert->insertContactUs($data);
            if($r > 0)
            {
                echo 'Data Inserted Successfull...';
            }
            else
            {
                echo 'Data Inserted Failed...';
            }
        }
        else
        {
            $this->contactUs();
        }
    }
}