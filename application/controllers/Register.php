<?php

    // class Register extends CI_Controller
    // {
    //     public function __construct()
    //     {
    //         parent::__construct();
    //         $this->load->model('Users_model');
    //     }

    //     public function index(){
    //         $this->load->view('v_header');
    //         $this->load->view('register');
    //         $this->load->view('v_footer');
    //     }

    //     public function sign_up() {
    //         $name = $this->input->post('name');
    //         $username = $this->input->post('username');
    //         $email = $this->input->post('email');
    //         $password = $this->input->post('password');

    //         $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|min_length[3]', [
    //             'required' => 'Nama Belum Diisi',
    //             'min_length' => "Username terlalu pendek"
    //         ]);

    //         $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique[users.username]', [
    //             'required' => 'Username Belum Diisi',
    //             'min_length' => "Username terlalu pendek",
    //             'is_unique' => 'Username sudah terdaftar'

    //         ]);

    //         $this->form_validation->set_rules('email', 'Alamat Email', 'required|min_length[3]|max_length[255]|valid_email|trim', [
    //             'valid_email' => 'Email Tidak Benar!!',
    //             'required' => 'Email Belum diisi!!',
    //             'is_unique' => 'Email Sudah Terdaftar!'
    //         ]);

    //         $this->form_validation->set_rules('password', 'Password',
    //         'required|trim|min_length[3]|', [
    //         'required' => 'Password belum diisi',
    //         'min_length' => 'Password Terlalu Pendek'
    //         ]);

    //         if($this->form_validation->run() == false){
    //             redirect('register');
    //         }

    //        $data = [
    //             'name' => htmlspecialchars($name),
    //             'username' => htmlspecialchars($username),
    //             'email' => htmlspecialchars($email),
    //             'password' => password_hash($password, PASSWORD_DEFAULT)
    //        ];

    //        $this->Users_model->sign_up($data);
    //        redirect('login');
    //     }

    // }   

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Users_model');
    }

    public function index(){
        $this->load->view('v_header');
        $this->load->view('register');
        $this->load->view('v_footer');
    }

    public function sign_up() {
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|min_length[3]', [
            'required' => 'Nama belum diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique[users.username]', [
            'required' => 'Username belum diisi',
            'min_length' => 'Username terlalu pendek',
            'is_unique' => 'Username sudah terdaftar'
        ]);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email|is_unique[users.email]', [
            'valid_email' => 'Email tidak benar',
            'required' => 'Email belum diisi',
            'is_unique' => 'Email sudah terdaftar'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]', [
            'required' => 'Password belum diisi',
            'min_length' => 'Password terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('v_header');
            $this->load->view('register');
            $this->load->view('v_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            $this->Users_model->sign_up($data);
            $this->session->set_flashdata('success', 'Akun sudah terdaftar, Silahkan Login');
            redirect('register');
        }
    }
}
?>
