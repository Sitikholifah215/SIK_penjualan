<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	public function getKd_barang()
	{
		$query = $this->db->query("Select kd_barang From barang");
		return $query->result();
	}

	public function insert_brg()
	{
		$object = array(
				'kd_barang' =>$this->input->post('kd_barang'),
				'nama_barang' =>$this->input->post('nama_barang'),
				'satuan' =>$this->input->post('satuan'),
				'harga/satuan'=>$this->post->post('harga/satuan'));

	$this->db->insert('barang', $object);
	}

}

/* End of file Barang.php */
/* Location: ./application/models/Barang.php */