<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produk extends CI_Model {

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

        $query = "SELECT m_product.*,m_categories.m_categories_nama
                FROM m_product 
                LEFT JOIN m_categories ON m_product.m_categories_id = m_categories.m_categories_id";
        if($search['value'] != ""){
            $query .=preg_match("/WHERE/i",$query)? " AND ":" WHERE ";
            $query .= "(m_product_nama LIKE '%". $search['value'] ."%')";
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
            $r[0] = $d['m_product_id'];
            $r[1] = $i;
            $r[2] = $d['m_product_nama'];
            $r[3] = $d['m_categories_nama'];
            $r[4] = $d['m_product_price'];
            if ($d['m_product_active'] == 'T') {
                $icondelete = '<a class="btndelete" data-aktif="T" style="cursor:pointer;" title="Klik untuk mengaktifkan"><i class="fa fa-remove"></i></a>';
            }
            $r[5] = '<a class="btnupload" style="cursor:pointer;" data-id="'.$d['m_product_id'].'" title="Upload Foto"><i class="fa fa-upload"></i></a>
            <a class="btnedit" style="cursor:pointer;" title="Edit"><i class="fa fa-edit"></i></a>
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

    public function _getFoto()
	{
		$dataorder = array();
        // $dataorder[3] = "tgl_awal_beasiswa";
        // $dataorder[4] = "tgl_akhir_beasiswa";

		$search = $this->input->post("search");
        $idproduk = $this->input->post("idproduk");
        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);
        $start = intval($_REQUEST['start']);
        $order = $this->input->post('order');

		$query = "SELECT t_photoproduct.*
				FROM t_photoproduct 
                WHERE m_product_id = ".$idproduk;
		if($search['value'] != ""){
            $query .=preg_match("/WHERE/i",$query)? " AND ":" WHERE ";
			$query .= "(m_product_nama LIKE '%". $search['value'] ."%')";
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
            $icondelete = '<a class="btnaktif" data-aktif="1" style="cursor:pointer;" title="Klik untuk menonaktifkan menjadi foto utama"><i class="fa fa-check"></i></a>';
			$r[0] = $d['t_photoproduct_id'];
			$r[1] = $i;
            $r[2] = '<img src="'.base_url().'foto_product/'.$idproduk.'/'.$d['t_photoproduct_nama'].'" width="128" height="128" />';
			if ($d['t_photoproduct_main'] == '0') {
                $icondelete = '<a class="btnaktif" data-aktif="0" style="cursor:pointer;" title="Klik untuk menjadikan foto utama"><i class="fa fa-remove"></i></a>';
            }
            $r[3] = '<a class="btndelete" style="cursor:pointer;" title="Hapus Foto"><i class="fa fa-trash-o"></i></a>
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
        $id = $this->input->post('idproduk');
        $nama = $this->input->post('namaproduk');
        $kategori = $this->input->post('kategori');
        $price = $this->input->post('price');
        $disc = $this->input->post('disc');
        $price2 = $this->input->post('price2');
        $desc = $this->input->post('desc');

        $filter = array('m_product_id'=>$id);
        $data = array(
            'm_product_nama'=>$nama,
            'm_product_desc'=>$desc,
            'm_product_disc'=>$disc,
            'm_product_price'=>$price,
            'm_product_price_disc'=>$price2,
            'm_categories_id'=>$kategori,
        );
        
        if ($id) {
            $desc = 'diubah';
            $this->db->where($filter);
            $this->model_public->update('m_product',$data);
        }else{
            $desc = 'ditambah';
            $this->model_public->insert('m_product', $data);
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
        $id = $this->input->post('idproduk');
        $aktif = $this->input->post('aktif');
        $aktif = ($aktif == 'Y') ? 'T' : 'Y';
        $filter = array('m_product_id'=>$id);
        $data = array('m_product_active'=>$aktif);
        
        $this->db->where($filter);
        $this->model_public->update('m_product',$data);

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
            $result['status'] = false;
        }
        return $result;
    }

    public function _deletefoto()
    {
        $id = $this->input->post('idfoto');
        $idproduk = $this->input->post('idproduk');

        $filter = array('t_photoproduct_id'=>$id);
        $this->db->where($filter);
        $namafile = $this->db->get('t_photoproduct')->row()->t_photoproduct_nama;
        
        $this->db->where($filter);
        $this->db->delete('t_photoproduct');

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil di hapus';
            unlink("foto_product/".$idproduk."/".$namafile);
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal di hapus';
            $result['status'] = false;
        }
        return $result;
    }

    public function _savefile($filename="")
    {
        $id = $this->input->post('idproduk');

        $data = array(
            'm_product_id'=>$id,
            't_photoproduct_nama'=>$filename,
        );
        
        $desc = 'ditambah';
        $this->model_public->insert('t_photoproduct', $data);

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil '.$desc;
            $result['status'] = true;
        }else{
            $result['message'] = array('error'=>'Data gagal '.$desc);
            $result['status'] = false;
        }
        return $result;
    }

    public function _setmainfoto()
    {
        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM t_photoproduct WHERE t_photoproduct_main = 1")->row()->JUMLAH;
        
        $id = $this->input->post('idfoto');
        $aktif = $this->input->post('aktif');

        if (($jumlah > 0) && $aktif == '0') {
            $result['message'] = 'Anda hanya bisa mengaktifkan 1 foto sebagai foto utama !';
            $result['status'] = false;
        }else{
            $aktif = ($aktif == '1') ? '0' : '1';
            $filter = array('t_photoproduct_id'=>$id);
            $data = array('t_photoproduct_main'=>$aktif);
            
            $this->db->where($filter);
            $this->model_public->update('t_photoproduct',$data);

            if ($this->db->affected_rows()>0) {
                $result['message'] = 'Foto berhasil di '.(($aktif == '1') ? 'aktifkan sebagai foto utama' : 'non aktifkan sebagai foto utama');
                $result['status'] = true;
            }else{
                $result['message'] = 'Data gagal di '.(($aktif == '1') ? 'aktifkan sebagai foto utama' : 'non aktifkan sebagai foto utama');
                $result['status'] = false;
            }
        }

        return $result;
    }

}

/* End of file model_m_product.php */
/* Location: ./application/models/model_m_product.php */