<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['sekolah'] = $this->model_public->_getProduct();
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