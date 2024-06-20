<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Users_model');
        $this->load->model('Categories_model');
        $this->load->model('Menu_model');
    }

    public function index() {
        $data['user'] = $this->session->userdata();
        $this->load->view('templates/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }


    public function menu(){
        $data['user'] = $this->session->userdata();
        $data['menu'] = $this->Users_model->get_menu_by_id($data['user']['id']);
        $this->load->view('templates/header');
        $this->load->view('dashboard/menu', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        if ($this->input->post()) {
            // Configure upload settings
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['file_name'] = time() . '_' . $_FILES['image']['name'];
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

    
            // Handle file upload
            if (!$this->upload->do_upload('image')) {
                // Handle upload error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('msg', $error);
                redirect('dashboard/create');
            } else {
                // Get uploaded file data
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
    
                // Prepare data to insert
                $data = array(
                    'judul' => $this->input->post('title'),
                    'excerpt' => $this->input->post('excerpt'),
                    'kategori' => $this->input->post('category'),
                    'id_user' => $this->session->userdata()['id'],
                    'image' => $image,
                    'body' => $this->input->post('body'),
                );
    
                // Insert data into database
                $this->Users_model->create_menu($data);
                $this->session->set_flashdata('msg', 'Menu berhasil dibuat');
                redirect('dashboard/menu');
            }
        } else {
            $data['categories'] = $this->Categories_model->get_categories();
            $this->load->view('templates/header');
            $this->load->view('dashboard/create', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($id) {
        $data['user'] = $this->session->userdata();
        $data['menu'] = $this->Users_model->get_one_menu_by_id($id);
        $data['categories'] = $this->Categories_model->get_categories();
        $this->load->view('templates/header');
        $this->load->view('dashboard/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        if ($this->input->post()) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'excerpt' => $this->input->post('excerpt'),
                'kategori' => $this->input->post('kategori'),
                'body' => $this->input->post('body'),
            );

            // Check if a new image is uploaded
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048; // 2MB
                $config['file_name'] = time() . '_' . $_FILES['image']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // Get the uploaded file data
                    $uploadData = $this->upload->data();
                    $data['image'] = $uploadData['file_name'];

                    // Delete the old image if exists
                    $oldImage = $this->input->post('old_image');
                    if ($oldImage && file_exists('./uploads/' . $oldImage)) {
                        unlink('./uploads/' . $oldImage);
                    }
                } else {
                    // Handle upload error
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('dashboard/edit/' . $id);
                }
            }

            // Update the menu data in the database
            $this->Menu_model->update_menu($id, $data);
            $this->session->set_flashdata('msg', 'Menu berhasil diupdate');
            redirect('dashboard/menu');
        } else {
            $data['user'] = $this->session->userdata();
            $data['menu'] = $this->Users_model->get_one_menu_by_id($id);
            $data['categories'] = $this->Categories_model->get_categories();
            $this->load->view('templates/header');
            $this->load->view('dashboard/edit', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($id) {
        $this->Users_model->delete_menu($id);
        $this->session->set_flashdata('msg', 'Menu berhasil dihapus');
        redirect('dashboard/menu');
    }
}
?>