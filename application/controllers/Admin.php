<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helpers(array('url','form'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function index()
    {
        $this->load->view("header");
        $this->load->view("admin/login");
    }
    
    public function loginValidate()
    {
        $this->form_validation->set_rules("email", "Email/Username" , "required");
        $this->form_validation->set_rules("password", "password" , "required");
        if($this->form_validation->run())
        {
            $this->load->model('Login');
            $data = $this->Login->loginAdmin();
            if(strcasecmp($data['username'], $this->input->post('email')) == 0 && strcasecmp($data['password'], $this->input->post('password')) == 0)
            {
                $sessionData = array (
                    "username" => $data['username']
                );
                $this->session->set_userdata($sessionData);
                redirect(base_url('Admin/editAnno'));
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Invalid Username Or Password</strong>
                </div>');
                redirect(base_url('Admin'));
            }
        }
        else
        {
            $this->index();
        }
    }

    public function editAnno()
    {
        if($this->session->userdata('username') != '')
        {
            $this->load->view("header");
            $this->load->view("admin/nav");
            $this->load->view("admin/editAnnouncement");
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Login Again</strong>
                </div>');
                redirect(site_url('Admin'));
        }
    }
    
    
    public function validateAnno()
    {
        $this->form_validation->set_rules("anno", "Announcement","required");
        if($this->form_validation->run())
        {
            $this->load->model('Insert');
            $data = $this->input->post("anno");
            $res = $this->Insert->insertAnno($data);
            if($res > 0)
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success">
                    <span class="glyphicon glyphicon-check"></span> <strong>Data Inserted Successfully</strong>
                </div>');
                redirect(base_url('Admin/annoInserted'));
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Data Inserted Unsuccessfully</strong>
                </div>');
                redirect(base_url('Admin/annoInserted'));
            }
        }
        else
        {
            $this->editAnno();
        }
    }
    
    public function annoInserted()
    {
        $this->editAnno();
    }
    public function viewContactUs()
    {
        if($this->session->userdata('username') != '')
        {
            $this->load->view("header");
            $this->load->view("admin/nav");
            $this->load->model('Display');
            $data['read'] = $this->Display->disContactUsRead();
            $data['unread'] = $this->Display->disContactUsUnread();
            $this->load->view("admin/viewContactUs", $data);
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span> <strong>Login Again</strong>
                </div>');
                redirect(base_url('Admin'));
        }
    }
    
    public function viewDetails($id = '')
    {
        $this->load->view('header');
        $this->load->view('admin/nav');
        $this->load->view('admin/viewDetails');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('Admin'));
    }
}
