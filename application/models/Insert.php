<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function insertAnno($data)
    {
        $this->db->set('Title',$data);
        $this->db->where('id',1);
        $r = $this->db->update('anno');
        return $r;
    }
    
    public function insertContactUs($data)
    {
        $this->db->set('fullName', $data['fullname']);
        $this->db->set('mobile', $data['mobile']);
        $this->db->set('email', $data['email']);
        $this->db->set('msg', $data['msg']);
        $r = $this->db->insert('contactus');
        return $r;
    }
}