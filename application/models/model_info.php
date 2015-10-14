<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_info extends CI_Model {

	public function _get()
	{
		$dataorder = array();
        // $dataorder[3] = "tgl_awal_beasiswa";
        // $dataorder[4] = "tgl_akhir_beasiswa";

		$search = $this->input->post("search");

        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);
        $start = intval($_REQUEST['start']);
        $order = $this->input->post('order');

		$query = "SELECT *
				FROM m_perusahaan";
		if($search['value'] != ""){
            $query .=preg_match("/WHERE/i",$query)? " AND ":" WHERE ";
			$query .= "(m_perusahaan_nama = '". $search['value'] ."')";
		}
        // OR PROGRAM_TAHUN LIKE '%". strtolower($search) ."%'
		// var_dump($order);
		if($order[0]['column']){
            $query.= " order by 
                ".$dataorder[$order[0]["column"]]." ".$order[0]["dir"];
        }

        $iTotalRecords = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM (".$query.") A")->row()->JUMLAH;

        $query .= " LIMIT ". ($start) .",".(($start) + $iDisplayLength);
        
        $data = $this->db->query($query)->result_array();
        $i = $start + 1;
        $result = array();
        foreach ($data as $d) {
            $r = array();
            $icondelete = '<a class="btndelete" data-aktif="Y" style="cursor:pointer;" title="Klik untuk menonaktifkan"><i class="fa fa-check"></i></a>';
			$r[0] = $d['m_perusahaan_id'];
			$r[1] = $i;
			$r[2] = $d['m_perusahaan_nama'];
			$r[3] = $d['m_perusahaan_alamat'];
            $r[4] = $d['m_perusahaan_email'];
            $r[5] = $d['m_perusahaan_phone'];
			$r[6] = $d['m_perusahaan_fax'];
			if ($d['m_perusahaan_active'] == 'T') {
				$icondelete = '<a class="btndelete" data-aktif="T" style="cursor:pointer;" title="Klik untuk mengaktifkan"><i class="fa fa-remove"></i></a>';
			}
			$r[7] = '<a class="btnedit" style="cursor:pointer;" title="Edit"><i class="fa fa-edit"></i></a>
			'.$icondelete;
            array_push($result, $r);
            $i++;
        }

        $records["data"] = $result;
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        return $records;
	}

    public function _update()
    {
        $id = $this->input->post('idinfoperusahaan');
        $nama = $this->input->post('namaperusahaan');
        $alamat = $this->input->post('alamatperusahaan');
        $email = $this->input->post('emailperusahaan');
        $telp = $this->input->post('telpperusahaan');
        $fax = $this->input->post('faxperusahaan');
        $filter = array('m_perusahaan_id'=>$id);
        $data = array(
        	'm_perusahaan_nama'=>$nama,
        	'm_perusahaan_alamat'=>$alamat,
        	'm_perusahaan_email'=>$email,
        	'm_perusahaan_phone'=>$telp,
        	'm_perusahaan_fax'=>$fax,
        );

        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM m_perusahaan WHERE m_perusahaan_active = 'Y'")->row()->JUMLAH;
        if ($jumlah > 0) {
            $data['m_perusahaan_active'] = 'T';
        }
        
        if ($id) {
            $desc = 'diubah';
            $this->db->where($filter);
            $this->model_public->update('m_perusahaan',$data);
        }else{
            $desc = 'ditambah';
            $this->model_public->insert('m_perusahaan', $data);
        }

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil '.$desc;
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal '.$desc;
            $result['status'] = false;
        }
        return $result;
    }

    public function _delete()
    {
        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM m_perusahaan WHERE m_perusahaan_active = 'Y'")->row()->JUMLAH;
        
        $id = $this->input->post('idinfoperusahaan');
        $aktif = $this->input->post('aktif');

        if (($jumlah > 0) && $aktif == 'T') {
            $result['message'] = 'Anda tidak bisa mengaktifkan 2 info perusahaan !';
            $result['status'] = false;
        }else{
            $aktif = ($aktif == 'Y') ? 'T' : 'Y';
            $filter = array('m_perusahaan_id'=>$id);
            $data = array('m_perusahaan_active'=>$aktif);
            
            $this->db->where($filter);
            $this->model_public->update('m_perusahaan',$data);

            if ($this->db->affected_rows()>0) {
                $result['message'] = 'Data berhasil di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
                $result['status'] = true;
            }else{
                $result['message'] = 'Data gagal di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
                $result['status'] = false;
            }
        }

        return $result;
    }

}

/* End of file model_info.php */
/* Location: ./application/models/model_info.php */