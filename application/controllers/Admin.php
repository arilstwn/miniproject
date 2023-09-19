<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
        if ($this->session->userdata('logged_in')!=true){
            redirect(base_url());
        }
	}

	public function index()
	{
		$this->load->view('admin/elaina');
	}
	public function murid()
	{
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('admin/guru', $data);
	}

	public function hapus_guru($id)
	{
		$this->m_modal->delete('guru', 'id_guru', $id);
		redirect(base_url('admin/guru'));
	}
	public function tambah_guru()
	{
		$this->load->view('admin/tambah_guru');
	}
	// public function tambah_guru()
	// {
	// 	$data['kelas'] = $this->m_model->get_data('kelas')->result();
	// 	$this->load->view('admin/tambah_guru', $data);
	// }
	public function aksi_tambah_guru()
	{
		$data = [
			'nama_guru'    => $this->input->post('nama_guru'),
			'nisn'          => $this->input->post('nisn'),
			'gender'        => $this->input->post('gender'),
			'id_kelas'      => $this->input->post('nama_mapel'),
			'id_kelas'      => $this->input->post('guru_mapel'),
		];
		$this->m_model->tambah_data('guru', $data);
		redirect(base_url('admin/guru'));
	}
	public function ubah_siswa()
	{
		$data['guru']=$this->m_model->get_by_id('guru', 'id_guru')->result();
		$data['kelas']=$this->m_model->get_data('kelas')->result();
		$this->load->view('admin/ubah_guru', $data);
	}

	
}