<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        $data['judul'] = 'Profil';
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        $error = $this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
            fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
        } else{
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
            class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Profil');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Profile";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->Profil_model->getById($id);
    
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Profil/vw_edit_profile", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $dataToUpdate = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
            ];
    
            $upload_image = $_FILES['gambar']['name'];
    
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/stock/';
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $dataToUpdate['gambar'] = $new_image;
                } else {
                    $error = $this->upload->display_errors();
                    echo $error; // Handle the error as needed
                    return;
                }
            }
    
            $id = $this->input->post('id');
            $this->Profil_model->update(['id' => $id], $dataToUpdate);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Profile Berhasil Diubah!</div>');
            redirect('Profil');
        }
    }
    
    

}
