<?php

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            $this->load->view('v_header');
            $this->load->view('register');
            $this->load->view('v_footer');
        }

        public function sign_up() {
            
        }

    }   

?>