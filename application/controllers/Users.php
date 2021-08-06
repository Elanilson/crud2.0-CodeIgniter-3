<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index(){
		$data['users'] = $this->users_model->index();
		$data['title'] = "Users - CodeIgniter";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function edit($id){
		$data['user'] = $this->users_model->show($id);
		$data['title'] = "Edit - CodeIgniter";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	public function update($id){
		$game = $_POST;
		$this->users_model->update($id,$game);
		redirect('users');

	}
}
