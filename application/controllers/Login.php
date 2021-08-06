<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$data['title'] = 'Login';
		$this->load->view('pages/login');

	}
	public function login(){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$user = $this->login_model->login($email,$password);

		if($user){
			$this->session->set_userdata('logger_user', $user);
			redirect('dashboard');

		}else{
			redirect('login');
		}

	}

	public function logout(){
		$this->session->unset_userdata('logger_user');
		redirect('login');
	}


	
}
