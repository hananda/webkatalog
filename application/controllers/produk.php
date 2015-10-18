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
			case 'getHarga':
				$this->_getHarga();
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
            case 'deleteharga':
            	$this->_deleteharga();
                break;
            case 'upload':
            	$this->_upload();
                break;
            case 'setmainfoto':
            	$this->_setmainfoto();
                break;
            case 'setmainharga':
            	$this->_setmainharga();
                break;
            case 'save_harga':
            	$this->_save_harga();
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

	public function _getHarga()
	{
		$records = $this->model_produk->_getHarga();
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

	public function _deleteharga()
	{
		$records = $this->model_produk->_deleteharga();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _setmainfoto()
	{
		$records = $this->model_produk->_setmainfoto();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _setmainharga()
	{
		$records = $this->model_produk->_setmainharga();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _save_harga()
	{
		$records = $this->model_produk->_save_harga();
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

	public function view($kategori='')
	{
		$data = array();
		$filter = array();
		$pages = ($this->input->get('pages')) ? $this->input->get('pages') : 1;
		$numperpage = 9;
		$start_from = ($pages-1) * $numperpage; 
		if ($kategori) {
			$filter['UPPER(m_categories_nama)'] = strtoupper(str_replace("-", " ", $kategori));
		}
		$data['kategori'] = $this->model_public->_getcategories();
		$data['produk'] = $this->model_public->_getProduct($filter,'*',$numperpage,$pages);
		$data['curr_page'] = $pages;
		$data['countproduk'] = $this->model_public->_getProduct($filter)->num_rows;
		$data['page'] = ceil($data['countproduk'] / $numperpage); 
		$data['numperpage'] = $numperpage;
		$data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$this->load->view('produk', $data, FALSE);
	}

}

/* End of file sekolah.php */
/* Location: ./application/controllers/sekolah.php */