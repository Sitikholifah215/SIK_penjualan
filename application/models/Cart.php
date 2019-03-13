<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}
	
	public function insert_trans(){
			$data = array(
                //id transaksi di tabel yang di maksud adalah nomer urut
                'kd_transaksi' =>$this->chart->post('kd_transaksi'),
				'kd_transaksi' =>$this->input->post('kd_transaksi'),
				'id_customer' =>$this->input->post('id_customer'),
				'tanggal_transaksi' =>$this->input->post('tanggal_transaksi'),
				'total_harga'=>$this->input->post('total_harga'));

	$this->db->insert('transaksi', $data);
	}

	
}