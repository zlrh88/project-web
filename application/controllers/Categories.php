<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Categories extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Categories_model');

        }

        public function index()
        {
            $data['kategori'] = $this->Categories_model->get_categories();
            $this->load->view('v_header');
            $this->load->view('categories',$data);
            $this->load->view('v_footer');

        }

        
    }
?>
