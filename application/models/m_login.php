<?php
 
class m_login extends CI_Model{
    public function save_regis($table,$data){
        $this->db->insert($table,$data);
    }
    function cek_login($table,$where){ 
        return $this->db->get_where($table,$where);
    } 
    public function check_username($username)
	{
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('admin_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
}