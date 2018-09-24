<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class Beranda extends CI_Controller
{
	function __construct(){
		parent::__construct();
		 $this->load->helper('url');
	      $this->load->model('crud_barang');
	}
	
	public function index()
	{
		$data['barang'] = $this->crud_barang->tampil_barang();
		$this->load->view('beranda.php', $data);
	}
	public function linktambahbarang(){
		$this->load->view('tambahbarang.php');
		//menuju ke halaman tambahdata.php
	}

	//fungsi tambah barang
	public function tambahbarang(){

		//mendefinisikan inputan sesuai dengan yang ada di table
		$barang['nama_barang'] = $this->input->post('nama');
		//seseuaikan dengan yang ada di view tambah data input name = nama
		$barang['alamat'] = $this->input->post('alamat');
		//seseuaikan dengan yang ada di view tambah data input name = kelas
		$barang['jumlah_barang'] = $this->input->post('jumlah');
		//seseuaikan dengan yang ada di view tambah data input name = password

		//membuat query untuk menampung data ke table berdasarkan model tambahdata yang telah dibuat		
		$query = $this->crud_barang->tambahbarang($barang);
		/* mereferensi query dari class crud siswa dan fungsi tambah data yang ada di folder model -> crud_siswa.php */

		//fungsi if untuk mengembalikan ke index.php
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function linkeditbarang($id){
		$data['barang'] = $this->crud_barang->getuser($id);
		$this->load->view('editbarang', $barang);
		//fungsi mengedit data siswa berdasarkan id siswa
	}

	public function updatebarang($id){
		$barang['nama_barang'] = $this->input->post('nama');
		$barang['alamat'] = $this->input->post('alamat');
		$barang['jumlah_barang'] = $this->input->post('jumlah');

		$query = $this->crud_barang->editbarang($barang, $id);
		if ($query) {
			header('location:' .base_url().$this->index());
		}
	}

	public function deletebarang($id){
		$query = $this->crud_barang->deletebarang($id);
		if ($query) {
			header('location:' .base_url() .$this->index());
		}
	}


	}

?>