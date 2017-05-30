<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('email');
	}

	function index(){
		$data['data_pembeli'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin_panel',$data);
	}
	

	function tambah(){
		$this->load->view('form_pembeli');
	}
	
	function sukses(){
		$this->load->view('sukses');
	}
	
function gagal(){
		$this->load->view('gagal');
	}
	function tambah_aksi(){
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$tanggal_diambil = $this->input->post('tanggal_diambil');
		$adaan = $this->input->post('adaan2');
		$lenjer = $this->input->post('lenjer2');
		$kapalselam = $this->input->post('kapalselam2');
		$kulit = $this->input->post('kulit2');
		$no_ktp = $this->input->post('no_ktp');
		$no_hp = $this->input->post('no_hp');
		$status = $this->input->post('status');
		$total = $this->input->post('total');
		
 
		$data = array(
			'nama_user' => $nama_user,
			'alamat_user' => $alamat_user,
			'tanggal_diambil' => $tanggal_diambil,
			'adaan' => $adaan,
			'lenjer' => $lenjer,
			'kapalselam' => $kapalselam,	
			'kulit' => $kulit,
			'no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
			'status' => $status,
			'total' => $total
			);
	
		$this->m_data->input_data($data,'data_pembeli');
		redirect('crud/sukses');
	}
	
		
	function edit($no_ktp) {
    $where = array('no_ktp' => $no_ktp);
    $data['data_pembeli'] = $this->m_data->edit_data($where,'data_pembeli')->result();
    $this->load->view('form_beli',$data);
  }
  
  function uppload() {
	$this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
   
       $config['upload_path'] = './upload/'; //variabel path untuk config upload
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
 	$config['max_size'] = '5000';
	  
       $this->upload->initialize($config);
 
       $no_ktp      = $this->input->post('no_ktp'); 
 
       if($_FILES['gambar']['name'])
       {
           if ($this->upload->do_upload('gambar'))
           {
               $gambar = $this->upload->data();
               $data = array(
                 'gambar' =>$gambar['file_name'],
                 'no_ktp' =>$this->input->post('no_ktp')
 
               );
  
               $this->m_data->input_data($data, 'bukti_pembayaran'); //akses model untuk menyimpan ke database
 
               redirect('crud/sukses'); //jika berhasil maka akan ditampilkan view vupload
 
           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
redirect('crud/gagal');
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //$this->load->view('form_pembeli', $er_upload); //jika gagal maka akan ditampilkan form upload
           }
       }

	}

       
function update() {
		
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$tanggal_diambil = $this->input->post('tanggal_diambil');
		$adaan = $this->input->post('adaan');
		$lenjer = $this->input->post('lenjer');
		$kapalselam = $this->input->post('kapalselam');
		$kulit = $this->input->post('kulit');
		$no_ktp = $this->input->post('no_ktp');
		$no_hp = $this->input->post('no_hp');
		$status = $this->input->post('status');
		$total = $this->input->post('total');
		
       	$data = array(
			'nama_user' => $nama_user,
			'alamat_user' => $alamat_user,
			'tanggal_diambil' => $tanggal_diambil,
			'adaan' => $adaan,
			'lenjer' => $lenjer,
			'kapalselam' => $kapalselam,	
			'kulit' => $kulit,
			'no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
			'status' => $status,
			'total' => $total
			);
			
		 $where = array(
      'no_ktp' => $no_ktp
      );

      $this->m_data->update_data($where,$data,'data_pembeli');
      redirect('admin/index');
	}

function hapus($no_ktp){
    $where = array('no_ktp' => $no_ktp);
    $this->m_data->hapus_data($where,'data_pembeli');
	$this->m_data->hapus_data($where,'bukti_pembayaran');
    redirect('admin/index');
  }
  
}

?>
