<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    class About extends CI_Controller {
        public function index() {
            $data['title'] = "Tentang";
            $this->load->view('v_header');
            $this->load->view('about', $data);
            $this->load->view('v_footer');

        }
    }


?>