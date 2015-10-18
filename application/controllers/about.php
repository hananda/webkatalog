<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_about');
	}

	public function index($task = "")
	{
		if (!$task) {
			$task = $this->input->get('task');
		}

		switch ($task) {
			case 'get':
				$this->_get();
				break;
			case 'update':
				$this->_update();
                break;
			default:
				is_logged_in();
				$data = array();
				$data['content'] = $this->load->view('view_about', $data,TRUE);
				$this->load->view('main', $data, FALSE);
				break;
		}
	}

	public function _get()
	{
		$records = $this->model_about->_get();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _update()
	{
		$records = $this->model_about->_update();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function view()
	{
		$data = array();
		$data['kontak'] = $this->model_public->_getInfoPerusahaan();
		$data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$data['desc'] = $this->model_about->_getDesc();
		$this->load->view('about', $data, FALSE);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */