<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bunga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_bunga');
	}

	public function index($task = "")
	{
		if (!$task) {
			$task = $this->input->get('task');
		}

		switch ($task) {
			case 'save':
				$this->_save();
				break;
			default:
				echo 'no task request';
				break;
		}
	}

	public function _save()
	{
		$result = array();
		$result = $this->model_bunga->_save();
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

}

/* End of file bunga.php */
/* Location: ./application/controllers/bunga.php */