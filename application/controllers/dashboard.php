<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_produk');
	}

	public function index()
	{
		$data = array();
		$data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$data['product'] = $this->model_produk->_getMobilNewest();
		$this->load->view('dashboard', $data, FALSE);
	}

	public function detail($id='')
	{
		$data = array();
		$data['sekolah'] = $this->model_public->_getSekolah(array('sekolah_id'=>$id))->row();
		$this->load->view('detailsekolah', $data, FALSE);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */