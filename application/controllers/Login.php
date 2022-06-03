<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('m_login');
 
    }
 
    function index(){
        $this->load->view('login/login');
    }
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password,
        );
       $cek = $this->m_login->cek_login("admin_login",$where)->num_rows();
       if($cek > 0){
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            
            $this->session->set_userdata($data_session);
            redirect(base_url('explore'));
        }else{
            $this->session->set_flashdata('info' , 'Username & Password salah!');
			$this->load->view('login/login');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }
}
?>