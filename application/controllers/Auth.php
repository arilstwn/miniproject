<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		$this->load->model('m_model');
	}
	public function register()
	 {
      $this->load->view('auth/register');
	}
	public function index()
	 {
      $this->load->view('Auth/login');
	}
	public function aksi_login()
	{
		$email   = $this->input->post('email', true);
		$password   = $this->input->post('password', true);
		$data   = ['email' => $email ];
		$query  = $this->m_model->getwhere('admin', $data);
		$result = $query->row_array();

		if (!empty($result) && md5($password) === $result['password']) {
			$data = [
				'logged_in'    => TRUE,
				'email'        => $result['email'],
				'username'     => $result['username'],
				'role'         => $result['role'],
				'id'           => $result['id'],
				
			];
			$this->session->set_userdata($data);
			if ($this->session->userdata('role') == 'admin') {
				redirect(base_url()."admin");
			} else {
				redirect(base_url());
			}
		} else {
			redirect(base_url());
		}
	}
	function logout() {
      $this->session->sess_destroy();
	  redirect(base_url());
	}
	
}

?>