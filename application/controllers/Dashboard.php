<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		permission();
		$this->load->model('games_model');
		$this->load->model('users_model');
		$this->load->model('shearch_model');
	}

	public function index(){
		$data['games'] = $this->games_model->index();
		$data["users"]  = $this->users_model->dashboard_index();
		$data['title'] = "Dashboard";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/dashboard',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}

	public function shearch(){

		$data['title'] = 'Resultado da pesquisa por *'.$_POST['shearch'].'*';
		$data['result'] = $this->shearch_model->shearch($_POST);

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/result',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}


	
}
