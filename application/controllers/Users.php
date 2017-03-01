<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Do your magic here
		
		$this->load->model('Users_m');
	}

	public function index() {
		$this->show();
	}

	public function show($username="") {

		$data['user'] = $this->Users_m->get_users($username, "ruden91");

		$this->load->view('user/user_v', $data);
	}

	public function insertUserData() {

		$username = "peter";
		$password = 'secret';

		$this->Users_m->create_user([
			'username' => $username,
			'password' => $password
		]);
	}

	public function updateUserData() {

		$u_idx = 3;
		$username = 'William';
		$password = 'not so secret';

		$this->Users_m->update_user([
			'username' => $username,
			'password' => $password
		], $u_idx);
	}

	public function deleteUserData() {

		$u_idx = 3;
		$this->Users_m->delete_user($u_idx);
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */