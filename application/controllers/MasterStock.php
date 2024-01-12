<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class MasterStock extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MasterStock_model');
  }

  public function index()
  {
    $data['judul'] = 'Stock Barang Terpentol';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['masterStock'] = $this->MasterStock_model->get();
    // $data['masterStock'] = $this->db->query('select * from stock union select * from stockkeluar')->result_array();
    $this->load->view("layout/header", $data);
    $this->load->view("masterStock/vw_masterStock", $data);
    $this->load->view("layout/footer", $data);
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Barang";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['masterStock'] = $this->MasterStock_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("masterStock/vw_detail_masterStock", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Barang";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['masterStock'] = $this->MasterStock_model->get();

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
      $this->load->view("masterStock/vw_tambah_masterStock", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $dataToInsert = [
        'nama_barang' => $this->input->post('nama_barang'),
        'kode' => $this->input->post('kode'),
        'jumlah_pcs' => $this->input->post('jumlah_pcs'),
        'jumlah_bungkus' => $this->input->post('jumlah_bungkus'),
        'harga_pcs' => $this->input->post('harga_pcs'),
        'total_bungkus' => $this->input->post('total_bungkus'),
      ];
      //$this->Stock_model->update(['id' => $id], $data);
      $this->MasterStock_model->insert($dataToInsert);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Barang Berhasil Ditambah!</div>');
      redirect('MasterStock');
    }
  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Stock Barang Masuk";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['masterStock'] = $this->MasterStock_model->get();
    $data['masterStock'] = $this->MasterStock_model->getById($id);
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
      $this->MasterStock_model->update(['id' => $id], $data, $upload_image);
      $this->MasterStock_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Barang Berhasil Diubah!</div>');
      redirect('MasterStock');
    }
  }

  public function hapus($id)
  {
    $this->MasterStock_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Barang Berhasil Dihapus!</div>');
    redirect('MasterStock');
  }

}
