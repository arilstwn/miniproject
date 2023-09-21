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
		
		$this->load->view('admin/index');
	}
	public function ubah_siswa()
	{
		$this->load->view('admin/ubah_siswa');
	}
	
	public function dasboard()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
		$data['guru'] = $this->m_model->get_data('guru')->num_rows();
		$this->load->view('admin/dasboard',$data);
	}
	
	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/siswa', $data);
	}

	public function hapus_siswa($id)
	{
		$this->m_modal->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}
	public function tambah_siswa()
	{
		$data['kelas']=$this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	// public function tambah_siswa()
	// {
	// 	$data['kelas'] = $this->m_model->get_data('kelas')->result();
	// 	$this->load->view('admin/tambah_siswa', $data);
	// }
	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('kelas'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
		];
		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('admin/tambah_siswa'));
	}
	public function guru()
	{
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('admin/guru', $data);
	}
	public function hapus_guru()
	{
		$data['guru']=$this->m_model->get_data('guru')->result();
		redirect(base_url('admin/guru'));
	}
	public function tambah_guru()
	{
		$data['guru']=$this->m_model->get_data('guru')->result();
		$this->load->view('admin/tambah_guru', $data);
	}
	public function aksi_tambah_guru()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'nik' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'guru_mapel' => $this->input->post('guru_mapel'),
		];
		$this->m_model->tambah_data('guru', $data);
		redirect(base_url('admin/tambah_guru'));
	}
	public function ubah_guru()
	{
		
		$this->load->view('admin/ubah_guru');
	}	
	public function aksi_ubah_guru()
	{
		$data['guru']=$this->m_model->get_data('guru')->result();
		$this->load->view('admin/ubah_guru', $data);
	}

	
}