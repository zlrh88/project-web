<?php

    class Menu extends CI_Controller 
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Menu_model');
            $this->load->model('Users_model');

        }

        public function index() {
            $data['menu'] = $this->Menu_model->get_all_menus();
            $data['users'] = $this->Users_model->get_users();
            $this->load->view('v_header');
            $this->load->view('menu',$data);
            $this->load->view('v_footer');
        }

        public function show($id, $id_user) {
            $data['user'] = $this->Users_model->get_user_by_id($id_user);
            $data['menu'] = $this->Menu_model->get_one_menu_by_id($id);
            $this->load->view('v_header');
            $this->load->view('show',$data);
            $this->load->view('v_footer');
        }

        

    }
?>