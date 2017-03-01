<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Do your magic here
	}

	public function index() {
		
		$data['welcome'] = "welcome to my Home page";

		$this->load->view('layouts/header');
		$this->load->view('home_v', $data);
		$this->load->view('layouts/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */