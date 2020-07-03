<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class C_login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('url');
	}

	public function index()
	{
		if($this->session->userdata('authenticated'))
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';


		$this->load->view('pendaftar/header', $data);
		$this->load->view('pendaftar/menu', $data);
		$this->load->view('pendaftar/login_pendaftar', $data);
	}

	public function login()
	{
		$username_register = $this->input->post('username_register');
		$password_register = $this->input->post('password_register');

		$tb_register = $this->M_login->get($username_register);

		if(empty($tb_register)){
			$this->session->set_flashdata('message', 'Username tidak ditemukan');
			redirect('pendaftar/C_login');
		}else{
			if($password_register == $tb_register->password_register){
				$session = array(
					'authenticated'=>true,
					'username_register'=>$tb_register->username_register,
					'nama_register'=>$tb_register->nama_register
				);

				$this->session->set_userdata($session);
				redirect('pendaftar/login_pendaftar');
			}else{
				$this->session->set_flashdata('message', 'Password Salah');
				redirect('pendaftar/C_login');
			}
		}
	}
}