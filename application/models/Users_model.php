<?php
    class Users_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_user()
        {
            $query = $this->db->get('users');
            return $query->row_array();
        }

        public function get_user_by_id($id)
        {   
            $query = $this->db->get_where('users', ['id' => $id]);
            return $query->row_array();
        }
    }