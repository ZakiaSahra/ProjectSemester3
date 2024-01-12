<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Riwayat extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Riwayat_model');
  }

  public function index()
  {
    $data['judul'] = 'Riwayat';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // $data['riwayat'] = $this->Riwayat_model->get();
    $data['riwayat'] = $this->db->query("select *, 'masuk' status from stock  union  select *, 'keluar' status from stockkeluar")->result_array();
    $this->load->view("layout/header", $data);
    $this->load->view("riwayat/vw_riwayat", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
{
    $data['judul'] = "Halaman Tambah Barang";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['riwayat'] = $this->Riwayat_model->get();

    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
        'required' => 'Tanggal Wajib di isi'
    ]);

    $this->form_validation->set_rules('jumlah_pcs', 'Jumlah /pcs', 'required', [
        'required' => 'Jumlah /pcs Wajib di isi'
    ]);

    $this->form_validation->set_rules('jumlah_bungkus', 'Jumlah /bungkus', 'required', [
        'required' => 'Jumlah /bungkus Wajib di isi'
    ]);

    $this->form_validation->set_rules('status', 'Status', 'required', [
        'required' => 'Status Wajib di isi'
    ]);

    if ($this->form_validation->run() == FALSE) {
        $this->load->view("layout/header", $data);
        $this->load->view("Riwayat/vw_tambah_riwayat", $data);
        $this->load->view("layout/footer", $data);
    } else {
        $dataToInsert = [
            'tanggal' => $this->input->post('tanggal'),
            'id_stock' => $this->input->post('id_stock'),
            'jumlah_bungkus' => $this->input->post('jumlah_bungkus'),
            'jumlah_pcs' => $this->input->post('jumlah_pcs'),
            'status' => $this->input->post('status'),
        ];
        //$this->Stock_model->update(['id' => $id], $data);
        $this->Riwayat_model->insert($dataToInsert);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Barang Berhasil Ditambah!</div>');
        redirect('Riwayat');
    }
}

  public function hapus($id)
  {
    $this->Stock_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Barang Berhasil Dihapus!</div>');
    redirect('Stock');
  }

}
