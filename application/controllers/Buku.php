<?php

    class Buku extends CI_Controller 
    {
        public function index() {
            $this->load->view('v_header');
            $this->load->view('books');
            $this->load->view('v_footer');
        }
    }
?>