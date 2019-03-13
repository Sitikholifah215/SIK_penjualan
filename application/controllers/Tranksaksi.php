<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tranksaksi extends CI_Controller {

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
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}


	public function insert_transaksi()
	{
		$this->load->view('header');
		$this->form_validation->set_rules('kd_transaksi', 'kd_transaksi', 'trim|required');
        $this->form_validation->set_rules('id_customer', 'id_customer', 'trim|required');
        $this->form_validation->set_rules('total_harga', 'total_harga', 'trim|required');

        $this->load->model('Trans');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('tranksaksi/tranksaksi');
        }
        else
        {
        $this->Trans->insert_trans();
        $this->load->view('homepage.php');
    	}
	}

	public function detail_transaksi()
	{
		$this->load->view('header');
		$this->form_validation->set_rules('kd_transaksi', 'kd_transaksi', 'trim|required');
        $this->form_validation->set_rules('kd_barang', 'kd_barang', 'trim|required');
        $this->form_validation->set_rules('jumlah_barang', 'jumlah_barang', 'trim|required');
        $this->form_validation->set_rules('total_harga_barang', 'total_harga_barang', 'trim|required');

        $this->load->model('Trans');
        $this->load->model('Barang_model');
        $data['dropdown'] = $this->Trans->getKd_transaksi();
        $data['barang'] = $this->Barang_model->getKd_barang();

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('tranksaksi/detail_transaksi', $data);
        }
        else
        {
        $this->Trans->detail_trans();
        $this->load->view('homepage.php');
    	}
	}
}
