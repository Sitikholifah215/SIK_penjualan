<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}
	
	public function insert_trans(){
			$object = array(
				'kd_transaksi' =>$this->input->post('kd_transaksi'),
				'id_customer' =>$this->input->post('id_customer'),
				'tanggal_transaksi' =>$this->input->post('tanggal_transaksi'),
				'total_harga'=>$this->input->post('total_harga'));

	$this->db->insert('transaksi', $object);
	}

	public function detail_trans(){
			$object = array(
				'kd_transaksi' =>$this->input->post('kd_transaksi'),
				'kd_barang' =>$this->input->post('kd_barang'),
				'jumlah_barang' =>$this->input->post('jumlah_barang'),
				'total_harga_barang'=>$this->post->post('total_harga_barang'));

	$this->db->insert('detail_transaksi', $object);
	}

	public function getKd_transaksi()
	{
		$query = $this->db->query("Select kd_transaksi From transaksi where id_customer = 2");
		return $query->result();
	}

}