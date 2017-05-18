<?php 
class M_data extends CI_Model{
	function tampil_data(){
		$query = $this->db->get('data_pembeli');
		return $query->result_array();
	}

	function tampil_bayar(){
		$query2 = $this->db->get('bukti_pembayaran');
		return $query2->result_array();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function edit_data($where, $table) {
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
?>