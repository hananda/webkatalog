<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_public extends CI_Model {

	public function _getcategories($filter = array(),$select='*')
	{
		if (count($filter) > 0) {
			foreach ($filter as $field => $value) {
				$this->db->where($field, $value);
			}
		}
		$this->db->where('m_categories_active', 'Y');
		$this->db->select($select);
		$data = $this->db->get('m_categories');
		return $data;
	}

	public function _getProduct($filter = array(),$select='*')
	{
		if (count($filter) > 0) {
			foreach ($filter as $field => $value) {
				$this->db->where($field, $value);
			}
		}
		$this->db->where('m_product_active', 'Y');
		$this->db->select($select);
		$data = $this->db->get('m_product');
		return $data;
	}

	public function insert($table,$data)
	{
		$userid = $this->session->userdata('user_id');
		$this->db->set($table.'_created_date', "'".date('Y-m-d H:i:s')."'",false);
		$this->db->set($table.'_updated_date', "'".date('Y-m-d H:i:s')."'",false);
		$this->db->set($table.'_created_by',$userid); 
		$this->db->set($table.'_updated_by',$userid); 
		$this->db->insert($table, $data);
	}

	public function update($table,$data)
	{
		$userid = $this->session->userdata('user_id');
		$this->db->set($table.'_updated_date', "'".date('Y-m-d H:i:s')."'",false);
		$this->db->set($table.'_updated_by',$userid); 
		$this->db->update($table, $data); 
	}

	public function upload($inputName, $path = "",$nama_file="",$overwrite=false){
		if (empty($path)) {
			 $path =base_url().'foto_product';
		}
		$result = array();

		if (isset($_FILES[$inputName])) {
			if (!is_dir($path)) {
				mkdir($path, 0755, TRUE);
			}
			$config['upload_path'] = $path;
			$config['allowed_types'] = '*';
			$config['max_size'] = '0';

			if ($overwrite) {
				$config['overwrite'] = 'TRUE';
			}

			if($nama_file!=""){
				$config['overwrite'] = 'TRUE';
	            $config['file_ext_tolower'] = 'TRUE';
	            $config['ext_not_overwrite'] = 'TRUE';
	            $config['file_name'] = $nama_file;
	        }

			$this->load->library('upload');
			$this->upload->initialize($config);

			$json['file'] = $_FILES[$inputName]['name'];
			if (!$this->upload->do_upload($inputName)) {
				$error = array('error' => $this->upload->display_errors());
				$result = array(
					'stats' => false,
					'data' => $error
				);
			} else {
				//$upload_data = $this->upload->data();
				$result = array(
					'stats' => true,
					'nama' => $json['file']
				);
			}
		}else{
			$result = array(
				'stats' => false,
				'data' => array('error'=>'No file selected')
			);
		}
		return $result;
	}

}

/* End of file model_public.php */
/* Location: ./application/models/model_public.php */