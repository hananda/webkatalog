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

	public function type()
	{
		$data = array();
		$data['content'] = $this->load->view('view_type', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

	public function transmisi()
	{
		$data = array();
		$data['content'] = $this->load->view('view_transmisi', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

	public function bunga()
	{
		$data = array();
		$data['bunga'] = $this->model_public->_getTipeBunga();
		$data['content'] = $this->load->view('view_bunga', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

	public function product()
	{
		$data = array();
		$data['categories'] = $this->model_public->_getCategories();
		$data['type'] = $this->model_public->_getType();
		$data['transmisi'] = $this->model_public->_getTransmisi();
		$data['content'] = $this->load->view('view_product', $data,TRUE);
		$this->load->view('main', $data, FALSE);
	}

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */