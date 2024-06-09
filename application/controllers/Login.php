<?php
    class Login extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->library('session');
        }

        public function index()
        {   
            if($this->session->userdata('logged_in')) {
                redirect('dashboard');
            }

            $this->load->view('v_header');
            $this->load->view('login');
            $this->load->view('v_footer');
        }


        public function auth()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->Users_model->get_user();

            if (empty($username) || empty($password)) {
                $this->session->set_flashdata('msg', 'Username dan password harus diisi');
                redirect('login');
            }
            $user_id = $user['id'];
            $user = $this->Users_model->get_user_by_id($user_id);

            if($user) {
                if(password_verify($password, password_hash($user['password'], PASSWORD_DEFAULT))) {
                    $session_data = array(
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($session_data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('msg', 'Password Salah');
                  
                }
            } else {
                $this->session->set_flashdata('msg', 'Username tidak ditemukan');
                redirect('login');
            }
        }

        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('id');
            $this->session->sess_destroy();
            redirect('login');

        }

    }
