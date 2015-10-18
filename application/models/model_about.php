<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_about extends CI_Model {

	public function _get()
	{
		$about = $this->db->query("SELECT * FROM m_about")->row();
		return $about;
	}

    public function _update()
    {
        $id = $this->input->post('idabout');
        $isi = $this->input->post('isi');
        $filter = array('m_about_id'=>$id);
        $data = array(
        	'm_about_desc'=>$isi
        );

        $this->db->where($filter);
        $this->model_public->update('m_about',$data);


        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil diubah';
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal diubah';
            $result['status'] = false;
        }
        return $result;
    }

    public function _getDesc()
    {
        $desc = $this->db->get('m_about')->row()->m_about_desc;
        return $desc;
    }
}

/* End of file model_about.php */
/* Location: ./application/models/model_about.php */