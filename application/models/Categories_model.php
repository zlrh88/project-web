<?php
    class Categories_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_categories()
        {
            $query = $this->db->get('kategori');
            return $query->result_array();
        }
    }