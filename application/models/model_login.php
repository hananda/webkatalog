<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function getLogin()
	{
		$username = trim($this->input->post('u'));
        $password = trim($this->input->post('p'));
        /* Kondisi jika password salah */
            //echo 'Username atau password anda salah!';

        $password=md5($password);

        $filter = array(
            's_user_nama'=>$username,
            's_user_pass'=>$password
        );
        $q=$this->db->get_where('s_user', $filter);
	
		return $q;
	}

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */