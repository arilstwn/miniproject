<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
      
	}

	public function index()
	{
		
		$this->load->view('admin/index');
	}
 
	
	public function ubah_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_by_id('kelas', 'id', $id)->result();
		$this->load->view('admin/ubah_siswa', $data);
	}

	


	public function aksi_ubah_siswa()
  {
    $data = array (
      'nama_siswa' => $this->input->post('nama'),
      'nisn' => $this->input->post('nisn'),
      'gender' => $this->input->post('gender'),
      'id_kelas' =>$this->input->post('id_kelas'),
	  'nama_sekolah' =>$this->input->post('nama_sekolah'),
    );
    $eksekusi=$this->m_model->ubah_data
    ('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/siswa'));
    } 
    else
    {
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/siswa/'.$this->input->post('id_siswa')));
    }
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
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}
	




	public function tambah_siswa()
	{
		$data['siswa']=$this->m_model->get_data('siswa')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}
	
	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama_siswa'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' => $this->input->post('id_kelas'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			];
		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('admin/siswa'));
	}
	
	
	
	
	public function guru()
	{
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$data['mapel'] = $this->m_model->get_data('mapel')->result();
		$this->load->view('admin/guru', $data);
	}
	// public function hapus_guru()
	// {
	// 	$data['guru']=$this->m_model->get_data('guru')->result();
	// 	redirect(base_url('admin/guru'));
	// }
	public function hapus_guru($id)
	{
		$this->m_model->delete('guru', 'id', $id);
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
			'nik' => $this->input->post('nik'),
			'gender' => $this->input->post('gender'),
			'nama_mapel' => $this->input->post('mapel'),
			'guru_mapel' => $this->input->post('guru_mapel'),
		];
		$this->m_model->tambah_data('guru', $data);
		redirect(base_url('admin/guru'));
	}
	
	// public function aksi_ubah_guru()
	// {
	// 	$data['guru']=$this->m_model->get_data('guru')->result();
	// 	$this->load->view('admin/ubah_guru', $data);
	// }

	public function ubah_guru()
	{
		$data['id'] = $this->m_model->get_by_id('guru', 'id', $id)->result();
		$this->load->view('admin/ubah_guru', $data);
	}
	public function aksi_ubah_guru()
  {
    $data = array (
      'nama_guru' => $this->input->post('nama'),
      'nik' => $this->input->post('nik'),
      'gender' => $this->input->post('gender'),
      'nama_mapel' =>$this->input->post('nama_mapel'),
	  'guru_mapel' =>$this->input->post('guru_mapel'),
    );
    $eksekusi=$this->m_model->ubah_data
    ('guru', $data, array('id'=>$this->input->post('id')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/guru'));
    } 
    else
    {
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/guru/'.$this->input->post('id')));
    }
  }


  public function home()
  {
	$this->load->view('admin/home');
  }
}