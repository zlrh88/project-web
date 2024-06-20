<?php
class Menu_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all_menus() {
        $query = $this->db->get('menus');
        return $query->result_array();
    }

    public function get_menu_by_id($id) {
        $query = $this->db->get_where('menus', array('id' => $id));
        return $query->result_array();
    }

    public function get_menu_by_category($category) {
        $query = $this->db->get_where('menus', array('kategori' => $category));
        return $query->result_array();
    }

    public function get_one_menu_by_id($id) {
        $query = $this->db->get_where('menus', array('id' => $id));
        return $query->row_array();
    }

    public function create_menu($data) {
        return $this->db->insert('menus', $data);
    }

    public function update_menu($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('menus', $data);
    }

    public function delete_menu($id) {
        $this->db->where('id', $id);
        return $this->db->delete('menus');
    }
}
?>