<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_produk');
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
			case 'getFoto':
				$this->_getFoto();
				break;
			case 'update':
				$this->_update();
                break;
            case 'delete':
            	$this->_delete();
                break;
            case 'deletefoto':
            	$this->_deletefoto();
                break;
            case 'upload':
            	$this->_upload();
                break;
            case 'setmainfoto':
            	$this->_setmainfoto();
                break;
			default:
				echo 'no task request';
				break;
		}
	}

	public function _get()
	{
		$records = $this->model_produk->_get();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _getFoto()
	{
		$records = $this->model_produk->_getFoto();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _update()
	{
		$records = $this->model_produk->_update();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _delete()
	{
		$records = $this->model_produk->_delete();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _deletefoto()
	{
		$records = $this->model_produk->_deletefoto();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _setmainfoto()
	{
		$records = $this->model_produk->_setmainfoto();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _upload()
	{
		$idproduk = $this->input->post("idproduk");
		$result = $this->model_public->upload("fotoproduk","foto_product/".$idproduk."/");
		if ($result['stats']) {
			$records = array();
			$records = $this->model_produk->_savefile($result['nama']);
		}else{
			$records = array(
				'message'=>$result['data'],
				'status'=>false
			);
		}
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

}

/* End of file sekolah.php */
/* Location: ./application/controllers/sekolah.php */