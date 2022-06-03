<?php

class explore extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('M_Manajemen');
        $this->load->library('form_validation');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}
	public function index(){
		$data['judul'] = 'explore';
		$data['data_buku'] = $this->M_Manajemen->getAllbook();
		$this->load->view('templates/header', $data);
		$this->load->view('home/TUBES',$data);
		$this->load->view('templates/footer');
	}
	public function search(){
		$data['judul'] = 'search';
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
		}else{
			$data['keyword'] = null;
		}
		$data['data_buku'] = $this->M_Manajemen->GetbyNamabook($data['keyword']);
		$this->load->view('templates/header',$data);
		$this->load->view('home/search',$data);
		$this->load->view('templates/footer');
	}
	public function detail($id){
		$data['judul'] = 'Detail Buku';
		$data['data_buku'] = $this->M_Manajemen->GetbyIdbook($id);
		$this->load->view('templates/header',$data);
		$this->load->view('home/detail_buku',$data);
		$this->load->view('templates/footer');
	}
	public function chat(){
		$data['judul'] = 'Chat message';
		
		$this->load->view('templates/header',$data);
		$this->load->view('home/chat',$data);
	}
	public function pesanan(){
		$data['judul'] = 'Form Pemesanan';
		$this->load->view('home/form_pesan',$data);
	}

}