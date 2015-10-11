<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function kategori()
	{
		$data = array();
		$data['content'] = $this->load->view('view_kategori', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

	public function user()
	{
		$data = array();
		$data['content'] = $this->load->view('view_user', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

	public function product()
	{
		$data = array();
		$data['categories'] = $this->model_public->_getCategories();
		$data['content'] = $this->load->view('view_product', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */