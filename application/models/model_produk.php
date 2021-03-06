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
            $r[1] = $d['m_categories_id'];
            $r[2] = $i;
            $r[3] = $d['m_product_nama'];
            $r[4] = $d['m_categories_nama'];
            if ($d['m_product_active'] == 'T') {
                $icondelete = '<a class="btndelete" data-aktif="T" style="cursor:pointer;" title="Klik untuk mengaktifkan"><i class="fa fa-remove"></i></a>';
            }
            $r[5] = '<a class="btnharga" style="cursor:pointer;" data-id="'.$d['m_product_id'].'" title="Menentukan Harga produk"><i class="fa fa-money"></i></a>
            <a class="btnupload" style="cursor:pointer;" data-id="'.$d['m_product_id'].'" title="Upload Foto"><i class="fa fa-upload"></i></a>
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
            $r[3] = '<a class="btndeletefoto" style="cursor:pointer;" title="Hapus Foto"><i class="fa fa-trash-o"></i></a>
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

    public function _getHarga()
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

		$query = "SELECT t_price.*,m_type_nama,m_transmisi_nama
				FROM t_price
                LEFT JOIN m_type ON t_price.m_type_id = m_type.m_type_id
                LEFT JOIN m_transmisi ON t_price.m_transmisi_id = m_transmisi.m_transmisi_id 
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
            $iconaktif = '<a class="btnaktifharga" data-aktif="1" style="cursor:pointer;" title="Klik untuk menonaktifkan menjadi harga utama"><i class="fa fa-check"></i></a>';
            $r = array();
            $r[0] = $d['t_price_id'];
            $r[1] = $d['m_type_id'];
            $r[2] = $d['m_transmisi_id'];
			$r[3] = $i;
            $r[4] = $d['m_type_nama'];
            $r[5] = $d['m_transmisi_nama'];
            $r[6] = $d['t_price_nominal'];
            if ($d['t_price_view'] == '0') {
                $iconaktif = '<a class="btnaktifharga" data-aktif="0" style="cursor:pointer;" title="Klik untuk menjadikan harga utama"><i class="fa fa-remove"></i></a>';
            }
			$r[7] = '<a class="btndeleteharga" style="cursor:pointer;" title="Hapus Foto"><i class="fa fa-trash-o"></i></a>
            <a class="btneditharga" style="cursor:pointer;" title="Edit"><i class="fa fa-edit"></i></a>'.$iconaktif;
            array_push($result, $r);
            $i++;
        }

        $records["data"] = $result;
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        return $records;
	}

    public function _getMobilNewest()
    {
        $data = array();
        $this->db->order_by('m_product_updated_date', 'desc');
        $data['first'] = $this->db->get('v_product',4,0);
        $data['second'] = $this->db->get('v_product',4,4);
        return $data;
    }

    public function _update()
    {
        $id = $this->input->post('idproduk');
        $nama = $this->input->post('namaproduk');
        $kategori = $this->input->post('kategori');
        $desc = $this->input->post('desc');

        $filter = array('m_product_id'=>$id);
        $data = array(
            'm_product_nama'=>$nama,
            'm_product_desc'=>$desc,
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

    public function _deleteharga()
    {
        $id = $this->input->post('idharga');

        $filter = array('t_price_id'=>$id);
        $this->db->where($filter);
        
        $this->db->where($filter);
        $this->db->delete('t_price');

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil di hapus';
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

    public function _save_harga()
    {
        $idharga = $this->input->post('idharga');
        $idproduk = $this->input->post('idproduk');
        $tipe = $this->input->post('tipe');
        $transmisi = $this->input->post('transmisi');
        $harga = $this->input->post('harga');

        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM t_price WHERE m_type_id = ".$tipe." AND m_transmisi_id = ".$transmisi." AND m_product_id = ".$idproduk)->row()->JUMLAH;

        if ($jumlah > 0) {
            $result['message'] = 'Harga untuk tipe dan transmisi ini sudah ada !';
            $result['status'] = false;
        }else{
            $data = array(
                'm_product_id'=>$idproduk,
                'm_type_id'=>$tipe,
                'm_transmisi_id'=>$transmisi,
                't_price_nominal'=>$harga,
            );
            
            if ($idharga) {
                $filter = array('t_price_id'=>$idharga);
                $desc = 'diubah';
                $this->db->where($filter);
                $this->model_public->update('t_price',$data);
            }else{
                $desc = 'ditambah';
                $this->model_public->insert('t_price', $data);
            }

            if ($this->db->affected_rows()>0) {
                $result['message'] = 'Data berhasil '.$desc;
                $result['status'] = true;
            }else{
                $result['message'] = 'Data gagal '.$desc;
                $result['status'] = false;
            }
        }

        return $result;
    }

    public function _setmainfoto()
    {
        $id = $this->input->post('idfoto');
        $idproduk = $this->input->post('idproduk');
        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM t_photoproduct WHERE t_photoproduct_main = 1 AND m_product_id = ".$idproduk)->row()->JUMLAH;
        
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

    public function _setmainharga()
    {
        $idproduk = $this->input->post('idproduk');
        $jumlah = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM t_price WHERE t_price_view = 1 AND m_product_id = ".$idproduk)->row()->JUMLAH;
        
        $id = $this->input->post('idharga');
        $aktif = $this->input->post('aktif');

        if (($jumlah > 0) && $aktif == '0') {
            $result['message'] = 'Anda hanya bisa mengaktifkan 1 harga sebagai harga utama !';
            $result['status'] = false;
        }else{
            $aktif = ($aktif == '1') ? '0' : '1';
            $filter = array('t_price_id'=>$id);
            $data = array('t_price_view'=>$aktif);
            
            $this->db->where($filter);
            $this->model_public->update('t_price',$data);

            if ($this->db->affected_rows()>0) {
                $result['message'] = 'Harga berhasil di '.(($aktif == '1') ? 'aktifkan sebagai harga utama' : 'non aktifkan sebagai harga utama');
                $result['status'] = true;
            }else{
                $result['message'] = 'Harga gagal di '.(($aktif == '1') ? 'aktifkan sebagai harga utama' : 'non aktifkan sebagai harga utama');
                $result['status'] = false;
            }
        }

        return $result;
    }

}

/* End of file model_m_product.php */
/* Location: ./application/models/model_m_product.php */