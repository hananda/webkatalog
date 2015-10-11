<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in()
{
	$CI =& get_instance();
	$url_login =  'login';
	$url =  $CI->uri->uri_string();
    $iduser = $CI->session->userdata("user_id");
    $uname = $CI->session->userdata("user_nama");
	
	if (@$iduser){
		if (@$url == "login"){
			redirect(base_url().'home','refresh');
		}else if(@$url == "logout"){
			return true;
		}
	}else{
		if (@$url != 'login')
			redirect(base_url().'login','refresh');
	}

	return true;
}
