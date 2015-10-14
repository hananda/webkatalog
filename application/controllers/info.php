<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_info');
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
            case 'delete':
            	$this->_delete();
                break;
			default:
				is_logged_in();
				$data = array();
				$data['content'] = $this->load->view('view_info', $data,TRUE);
				$this->load->view('main', $data, FALSE);
				break;
		}
	}

	public function _get()
	{
		$records = $this->model_info->_get();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _update()
	{
		$records = $this->model_info->_update();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _delete()
	{
		$records = $this->model_info->_delete();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

}

/* End of file info.php */
/* Location: ./application/controllers/info.php */