<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('form_validation');
		$this->load->helper('url','form');
	}
	public function insert_barang()
	{
		$this->load->view('header');
		$this->form_validation->set_rules('kd_barang', 'kd_barang', 'trim|required');
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
        $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
        $this->form_validation->set_rules('harga/satuan', 'harga/satuan', 'trim|required');

        $this->load->model('Barang_model');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('barang/barang');
        }
        else
        {
        $this->Barang_model->insert_brg();
        $this->load->view('homepage.php');
    	}
	}
}
