<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bunga extends CI_Model {

	public function _save()
    {
        $bunga = $this->model_public->_getTipeBunga();
        
        foreach ($bunga->result() as $r) {
        	$data = array();
        	$data['t_bunga_prosentase'] = $this->input->post("bunga_".$r->t_bunga_id);
        	$data['t_bunga_cicilan'] = $this->input->post("cicilan_".$r->t_bunga_id);
        	$this->db->where('t_bunga_id', $r->t_bunga_id);
        	$this->model_public->update("t_bunga",$data);
        }

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil diubah';
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal diubah';
            $result['status'] = false;
        }
        return $result;
    }

}

/* End of file model_bunga.php */
/* Location: ./application/models/model_bunga.php */