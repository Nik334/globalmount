<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function disAnno()
    {
        $this->db->where('id', 1);
        $query = $this->db->get('anno');
        foreach ($query->result() as $row)
        {
            $data = $row->Title;
        }
        return $data;
    }
    
    public function disContactUsRead()
    {
        $this->db->where('isRead',1);
        $res = $this->db->get('contactus');
        return $res->result();
    }
    
    public function disContactUsUnread()
    {
        $this->db->where('isRead',0);
        $res = $this->db->get('contactus');
        return $res->result();
    }
}