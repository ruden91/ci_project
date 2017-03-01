<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Do your magic here
		
		$this->load->model('Users_m');
	}

	public function login() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data);
			redirect('home');

		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->Users_m->login_user($username, $password);

			if ($user_id) {

				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are now logged in');

				redirect('home');
			} else {

				$this->session->set_flashdata('login_falied', 'Sorry You are not logged in');
				redirect('home');
			}
		}
	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */