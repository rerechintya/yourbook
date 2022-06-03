<?php

class M_Manajemen extends CI_model
{

	public function getAllbook(){
		$this->db->select('*');
		$this->db->from('data_buku');
		$query = $this->db->get();
		return $query->result_array();
	}
	
    public function getbyId($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('data_buku')->row_array();
	}

    public function tambahDataBuku($data)
	{
        $insert['nama_buku'] = $data['nama_buku'];
		$insert['penulis'] = $data['penulis'];
		$insert['penerbit'] = $data['penerbit'];
		$insert['desk'] = $data['desk'];
		$insert['kategori'] = $data['kategori'];
		$insert['tag'] = $data['tag'];
		$insert['harga'] = $data['harga'];
		$insert['img'] = $data['img'];

		$this->db->insert('data_buku', $insert);
    }

    public function hapusDataBuku($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('data_buku');
    }

    public function editDataBuku($data , $kondisi)
	{
		$this->db->update('data_buku', $data, $kondisi);
		return TRUE;
    }
	public function GetbyNamabook($keyword)
	{
		$this->db->like('penulis' , $keyword);
		$this->db->or_like('nama_buku' ,$keyword);
		$this->db->or_like('penerbit', $keyword);

		$result = $this->db->get('data_buku')->result_array();
		return $result;
	}
	public function GetbyIdbook($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('data_buku')->result_array();
		return $result;
	}
}