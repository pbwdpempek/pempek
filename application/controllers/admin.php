<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect("login");
		}
		$this->load->model('m_data');
	}
 
	function index(){
		$data['data_pembeli'] = $this->m_data->tampil_data();
		$data['bukti_pembayaran'] = $this->m_data->tampil_bayar();
		$this->load->view('admin_panel', $data);

	}
}
