<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class crud_barang extends CI_Model {
	function __construct(){
	   parent::__construct();
	      $this->load->database(); //load database	
	}
// fungsi untuk menampilkan data siswa
	public function tampil_barang(){
		$query = $this->db->get('barang'); //query dari tabel siswa
	  	return $query->result();
	}
//fungsi menambahkan data
	public function tambahbarang($barang){
		return $this->db->insert('barang',$barang);
		//memasukan data ketable siswa dengan parameter $siswa
	}

//fungsi untuk mengedit data siswa berdasarkan id yang ada pada table
	public function editbarang($barang, $id){
		$this->db->where('barang.id_barang', $id);
		return $this->db->update('barang',$barang);
	}

//untuk membuat atau mengambil id atau mendefinisikan data mana yang akan dipakai atau
	public function getuser($id){
		$query= $this->db->get_where('barang', array('id_barang' => $id ));
		return $query->row_array();
	}

//fungsi untuk meghapus data siswa siswa
	public function deletebarang($id){
		$this->db->where('barang.id_barang', $id);
		return $this->db->delete('barang');
	}
}
?>