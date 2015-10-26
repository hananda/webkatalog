<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_article');
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
			case 'getdesc':
				$this->_getdesc();
                break;
			case 'delete':
				$this->_delete();
                break;
			default:
				is_logged_in();
				$data = array();
				$data['content'] = $this->load->view('view_article', $data,TRUE);
				$this->load->view('main', $data, FALSE);
				break;
		}
	}

	public function _get()
	{
		$records = $this->model_article->_get();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _update()
	{
		$records = $this->model_article->_update();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _getdesc()
	{
		$records = $this->model_article->_getdesc();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function _delete()
	{
		$records = $this->model_article->_delete();
        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}

	public function view($idartikel = 0)
	{
		$data = array();
		$data['article'] = $this->model_public->_getArticle(array('m_article_id'=>$idartikel))->row();
		$data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$this->load->view('detailartikel', $data, FALSE);
	}

	public function artikel()
	{
		$data = array();
		$filter = array();
		$pages = ($this->input->get('pages')) ? $this->input->get('pages') : 1;
		$numperpage = 12;
		$start_from = ($pages-1) * $numperpage; 
		$data['article'] = $this->model_public->_getArticle($filter,'*',$numperpage,$start_from);
		$data['curr_page'] = $pages;
		$data['countarticle'] = $this->model_public->_getArticle($filter)->num_rows;
		$data['page'] = ceil($data['countarticle'] / $numperpage); 
		$data['numperpage'] = $numperpage;
		$data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$this->load->view('artikel', $data, FALSE);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */