<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['content'] = $this->load->view('home', $data, TRUE);
		$this->load->view('main', $data, FALSE);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */