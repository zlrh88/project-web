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
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->Users_model->get_user_by_email($email);

            if (empty($email) || empty($password)) {
                $this->session->set_flashdata('msg', 'email dan password harus diisi');
                redirect('login');
            }  

            $user = $user[0];

           
            if($user) {
                if(password_verify($password, $user['password'])) {
                    $session_data = array(
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($session_data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('msg', 'Password Salah');
                    redirect('login');
                  
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
