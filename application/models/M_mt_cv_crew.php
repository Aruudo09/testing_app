<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_mt_cv_crew extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); // Pastikan ini ada untuk menginisialisasi `CI_Model`
    }

    public function getBooking()
    {
        $this->db->from('tbl_booking');
        $this->db->where('no_booking', 'BO1024');
        $query = $this->db->get();
        return $query->result();
    }

    public function getCrew()
    {
        $this->db->from('tbl_crew');
        $query = $this->db->get();
        return $query->result();
    }
}
