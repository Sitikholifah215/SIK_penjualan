<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepagbug extends CI_Controller {

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
	public function index()
	{
		$this->load->library('cart');
		$this->load->view('header');
		$this->load->view('homepagbug');
		
		//$this->load->view('homepagbug');
	}

	public function insert_cart()
	{
		$this->load->view('header');
		$this->load->library('cart');
        $this->load->model('Cart');

        // if($this->form_validation->run()==FALSE)
        // {
        //     $this->load->view('tranksaksi/tranksaksi');
        // }
        // else
        // {
        $this->cart->insert_trans();
        $this->load->view('homepagbug');
    	// }
	}

	
}
