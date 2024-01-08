<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Stock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stock_model');
    }
    public function index()
    {
        $data['judul2'] = "Halaman Stock";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->Stock_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("stock/vw_stock", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->Stock_model->get();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Nama Barang Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode', 'Kode', 'required', [
            'required' => 'Kode Wajib di isi'
        ]);
        $this->form_validation->set_rules('jumlah_pcs', 'Jumlah /pcs', 'required', [
            'required' => 'Jumlah /pcs Wajib di isi'
        ]);
        $this->form_validation->set_rules('jumlah_bungkus', 'Jumlah /bungkus', 'required', [
            'required' => 'Jumlah /bungkus Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga_pcs', 'Harga /pcs', 'required', [
            'required' => 'Harga /pcs Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_bungkus', 'Total /bungkus', 'required', [
            'required' => 'Total /pcs Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Stock/vw_tambah_stock", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'kode' => $this->input->post('kode'),
                'jumlah_pcs' => $this->input->post('jumlah_pcs'),
                'jumlah_bungkus' => $this->input->post('jumlah_bungkus'),
                'harga_pcs' => $this->input->post('harga_pcs'),
                'total_bungkus' => $this->input->post('total_bungkus'),
            ];
            $config['upload_path']   = './assets/images/admin/'; // Sesuaikan dengan path yang Anda inginkan
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 2048; // 2MB max size
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto')) {
                $data = $this->upload->data();
                
                // Data untuk dimasukkan ke dalam database
                $data_to_insert = [
                    'nama_barang' => $this->input->post('nama_barang'),
                    'kode' => $this->input->post('kode'),
                    'jumlah_pcs' => $this->input->post('jumlah_pcs'),
                    'jumlah_bungkus' => $this->input->post('jumlah_bungkus'),
                    'harga_pcs' => $this->input->post('harga_pcs'),
                    'total_bungkus' => $this->input->post('total_bungkus'),
                    'foto' => $data['file_name'] // Nama file yang diunggah
                ];
    
                // Masukkan data ke dalam database
                $this->Stock_Model->insert($data_to_insert);
    
                // Redirect ke halaman admin atau ke halaman lain jika diperlukan
                redirect('Stock');
            } else {
                $error = $this->upload->display_errors();
                echo $error;
            } 
            $this->Stock_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Barang Berhasil Ditambah!</div>');
            redirect('Stock');
        }
    }
    public function hapus($id)
    {
        $this->Stock_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Barang Berhasil Dihapus!</div>');
        redirect('Stock');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Stock Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->Stock_model->get();
        $data['stock'] = $this->Stock_model->getById($id);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Nama Barang Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode', 'Kode', 'required', [
            'required' => 'Kode Wajib di isi'
        ]);
        $this->form_validation->set_rules('jumlah_pcs', 'Jumlah /pcs', 'required', [
            'required' => 'Jumlah /pcs Wajib di isi'
        ]);
        $this->form_validation->set_rules('jumlah_bungkus', 'Jumlah /bungkus', 'required', [
            'required' => 'Jumlah /bungkus Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga_pcs', 'Harga /pcs', 'required', [
            'required' => 'Harga /pcs Wajib di isi'
        ]);
        $this->form_validation->set_rules('total_bungkus', 'Total /bungkus', 'required', [
            'required' => 'Total /pcs Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Stock/vw_ubah_stock", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'kode' => $this->input->post('kode'),
                'jumlah_pcs' => $this->input->post('jumlah_pcs'),
                'jumlah_bungkus' => $this->input->post('jumlah_bungkus'),
                'harga_pcs' => $this->input->post('harga_pcs'),
                'total_bungkus' => $this->input->post('total_bungkus'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            $ext = pathinfo($upload_image, PATHINFO_EXTENSION);
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/stock/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Stock_model->update(['id' => $id], $data, $upload_image);
            $this->Stock_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Barang Berhasil Diubah!</div>');
            redirect('Stock');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->Stock_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("stock/vw_detail_stock", $data);
        $this->load->view("layout/footer", $data);
    }
}