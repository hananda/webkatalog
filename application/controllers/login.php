<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('model_login');
		$this->load->model('model_user');
	}

	public function index()
	{
        is_logged_in();
		$data = array();
        $data['perusahaan'] = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;
		$this->load->view('login', $data, FALSE);
	}

    public function changepasswd()
    {
        is_logged_in();
        $data = array();
        $data['content'] = $this->load->view('changepasswd', $data, TRUE);
        $this->load->view('main', $data, FALSE);
    }

    public function savepass()
    {
        $result = array();
        $result = $this->model_user->_savepass();
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

	public function validateLogin()
	{
        $url = base_url().'home';
		$q=$this->model_login->getLogin();

        if($q->num_rows() > 0){
            $data_user = $q->row();
            $perusahaan = $this->model_public->_getInfoPerusahaan()->row()->m_perusahaan_label_web;

            //setting session terhadap data user
            $newdata = array(
                        'login_time' => time(),
                        'user_id'   => $data_user->s_user_id,
                        'user_nama'      => $data_user->s_user_nama,
                        'label_app' => $perusahaan
                        ); 
            // if($data_user->tipe_user == 3)
            //     $url = base_url()."datapribadi";
            $_SESSION['user_id'] = $data_user->s_user_id;
            $this->session->set_userdata($newdata);
            $output = array(
                'status' => true,
                'message' => '',
                'url'=> $url, 
            );

		}else{
			$output = array(
                'status' => false,
                'message' => 'Username dan password salah', 
            );
		}
        $this->output->set_content_type('application/json')->set_output(json_encode($output ));
	}

	public function logout()
	{
        session_destroy();
		$this->session->sess_destroy(); 
        redirect(base_url().'login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */