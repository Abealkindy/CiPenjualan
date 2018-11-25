<?php
class admin extends CI_Controller{
  function index(){
      $this->load->view('admin/template/header');
      $this->load->view('admin/index');
      $this->load->view('admin/template/footer');
  }

  public function kelolaKategori(){
      $this->load->view('admin/template/header');
      $this->load->view('admin/kelola_kategori');
      $this->load->view('admin/template/footer');
  }

  public function dataBarang(){
      $this->load->view('admin/template/header');
      $this->load->view('admin/kelola_barang');
      $this->load->view('admin/template/footer');
  }
}

?>
