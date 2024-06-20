<?php
    class Users_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_users() {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        public function get_user_by_email($email)
        {
            $query = $this->db->get_where('users', ['email' => $email]);
            return $query->result_array();
        }

        public function get_user_by_id($id)
        {   
            $query = $this->db->get_where('users', ['id' => $id]);
            return $query->row_array();
        }

        public function sign_up($data = null)  
        {
            $this->db->insert('users', $data);
        }

        public function get_menu_by_id($id){
            $query = $this->db->get_where('menus', ['id_user' => $id]);
            return $query->result_array();
        }

        public function get_one_menu_by_id($id){
            $query = $this->db->get_where('menus', ['id' => $id]);
            return $query->row_array();
        }

        public function create_menu($data)
        {
            $this->db->insert('menus', $data);
        }

        public function delete_menu($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('menus');
        }
    
    }