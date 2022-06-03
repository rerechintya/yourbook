<?php
 
class Manajemen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('M_Manajemen');
		//load library form validation
        $this->load->library('form_validation');
	}


	public function index()
	{
        $data['judul'] = 'Manajemen Buku';
		$data['data_buku'] = $this->M_Manajemen->getAllbook();
		$this->load->view('templates/header', $data);
		$this->load->view('manajemen/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Buku';
		$this->form_validation->set_rules('nama_buku','nama_buku','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		$this->form_validation->set_rules('desk','desk','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('tag','tag','required');
		$this->form_validation->set_rules('harga','harga','required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('manajemen/tambah', $data);
		}
		else{

			$data = [
				"nama_buku" => $this->input->post('nama_buku', true),
				"penulis" => $this->input->post('penulis', true),
				"penerbit" => $this->input->post('penerbit', true),
				"desk" => $this->input->post('desk', true),
				"kategori" => $this->input->post('kategori', true),
				"tag" => $this->input->post('tag', true),
				"harga" => $this->input->post('harga', true),
			];

			$config['upload_path'] 		= APPPATH. '../assets/img/';
			$config['allowed_types'] 	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048000'; // max size in KB
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('img')){
				$errors = array('error' => $this->upload->display_errors());
				$this->load->view('manajemen/tambah', $error);
			}
			else{
				$upload_data = $this->upload->data();
				$data['img'] = $upload_data['file_name'];	
				$this->M_Manajemen->tambahDataBuku($data);
				$this->session->set_flashdata('sukses','Buku berhasil ditambah');
				redirect('Manajemen');
			}
		}
	}	

    public function hapus($id)
	{
		$this->M_Manajemen->hapusDataBuku($id);
		redirect('Manajemen');
    }

    public function edit($id)
	{
		$data['judul'] = 'Form Edit Data Buku';
		$data['data_buku'] = $this->M_Manajemen->getbyId($id);

		$path = '../assets/img/';
		$kondisi = array('id' => $id );

		$this->form_validation->set_rules('nama_buku','nama_buku','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		$this->form_validation->set_rules('desk','desk','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('tag','tag','required');
		$this->form_validation->set_rules('harga','harga','required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('manajemen/edit', $data);
		}
		else{
			$data = [
				"nama_buku" => $this->input->post('nama_buku', true),
				"penulis" => $this->input->post('penulis', true),
				"penerbit" => $this->input->post('penerbit', true),
				"desk" => $this->input->post('desk', true),
				"kategori" => $this->input->post('kategori', true),
				"tag" => $this->input->post('tag', true),
				"harga" => $this->input->post('harga', true),
			];

			$config['upload_path'] 		= APPPATH. '../assets/img/';
			$config['allowed_types'] 	= 'jpg|png|jpeg';
			$config['max_size'] 		= '2048000'; // max size in KB
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('img')){
				$errors = array('error' => $this->upload->display_errors());
				$this->load->view('manajemen/tambah', $error);
			}
			else{
				$data = [
					"nama_buku" => $this->input->post('nama_buku', true),
					"penulis" => $this->input->post('penulis', true),
					"penerbit" => $this->input->post('penerbit', true),
					"desk" => $this->input->post('desk', true),
					"tag" => $this->input->post('tag', true),
					"harga" => $this->input->post('harga', true),
				];
				$upload_data = $this->upload->data();
				$data['img'] = $upload_data['file_name'];

				//hapus foto pada direktori
				@unlink($path.$this->input->post('filelama'));
				
				$this->M_Manajemen->editDataBuku($data, $kondisi);
				redirect('Manajemen');
			}
		}
    }
	public function caribuku()
	{
		$data['judul'] = 'Manajemen Buku';
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
		}else{
			$data['keyword'] = null;
		}
		$data['data_buku'] = $this->M_Manajemen->GetbyNamabook($data['keyword']);
		$this->load->view('templates/header', $data);
		$this->load->view('manajemen/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function proses()
	{
        $data['judul'] = 'Manajemen Buku';
		$data['data_buku'] = $this->M_Manajemen->getAllbook();
		$this->load->view('templates/header', $data);
		$this->load->view('manajemen/proses', $data);
		$this->load->view('templates/footer');
	}
}
