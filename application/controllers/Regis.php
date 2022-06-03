<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regis extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login/SignUp');
	}

	public function register()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repass = $this->input->post('password2');
		if ($password != $repass) {
			$data['error_message'] = "Password and Re Enter Password ain't same";
			$this->load->view('login/SignUp', $data);
		} else if ($this->m_login->check_username($username)) {
			$data['error_message'] = 'Username already exist';
			$this->load->view('login/SignUp', $data);
		} else {
            $data = array(
                'username' => $username,
                'password' => $password,
				'name' =>$this->input->post('name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'number' => $this->input->post('number')
            );
			$result = $this->m_login->save_regis('admin_login',$data);
			if ($result) {
				// KERJAKAN DISINI
				$this->session->userdata($username);
				redirect('/explore');
			} else {
				//KERJAKAN DISINI
				redirect('/Login');
			}
		}
	}
}
