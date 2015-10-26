<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_article extends CI_Model {

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
                FROM m_article WHERE m_article_active = 'Y'";
        if($search['value'] != ""){
            $query .=preg_match("/WHERE/i",$query)? " AND ":" WHERE ";
            $query .= "(m_article_title = '". $search['value'] ."')";
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
            $r[0] = $d['m_article_id'];
            $r[1] = $i;
            $r[2] = $d['m_article_title'];
            $r[3] = '<a class="btnedit" style="cursor:pointer;" title="Edit"><i class="fa fa-edit"></i></a>
            <a class="btndelete" data-aktif="Y" style="cursor:pointer;" title="Klik untuk menonaktifkan"><i class="fa fa-remove"></i></a>
            ';
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
        $id = $this->input->post('idarticle');
        $judul = $this->input->post('judulartikel');
        $isi = $this->input->post('isi');
        $filter = array('m_article_id'=>$id);
        $data = array('m_article_title'=>$judul,'m_article_desc'=>$isi);
        
        if ($id) {
            $desc = 'diubah';
            $this->db->where($filter);
            $this->model_public->update('m_article',$data);
        }else{
            $desc = 'ditambah';
            $this->model_public->insert('m_article', $data);
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
        $id = $this->input->post('idarticle');
        $aktif = $this->input->post('aktif');
        $aktif = ($aktif == 'Y') ? 'T' : 'Y';
        $filter = array('m_article_id'=>$id);
        $data = array('m_article_active'=>$aktif);
        
        $this->db->where($filter);
        $this->model_public->update('m_article',$data);

        if ($this->db->affected_rows()>0) {
            $result['message'] = 'Data berhasil di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
            $result['status'] = true;
        }else{
            $result['message'] = 'Data gagal di '.(($aktif == 'Y') ? 'aktifkan' : 'non aktifkan');
            $result['status'] = false;
        }
        return $result;
    }

    public function _getdesc()
    {
        $idarticle = $this->input->post('idarticle');
        $desc = $this->db->query("SELECT m_article_desc FROM m_article WHERE m_article_id = ".$idarticle)->row();
        return $desc;
    }

}

/* End of file model_m_article.php */
/* Location: ./application/models/model_m_article.php */