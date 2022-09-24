<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model
{
    public function loginAdmin()
    {
        $this->load->database();
        $this->db->where('id', 1);
        $res = $this->db->get('adminlogin');
        foreach ($res->result() as $row)
        {
            $data['username'] = $row->username;
            $data['password'] = $row->pws;
        }
//        echo $data['username'];
//        echo $data['password'];
        return $data;
    }
}