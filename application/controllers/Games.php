<?php 
class Games extends CI_Controller{

	public function __construct(){
		parent::__construct();
		permission();
		$this->load->model('games_model');
	}
	public function index(){

		$data['games'] = $this->games_model->index();
		$data['title'] = 'Games';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/games',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}
		//novo
	public function new (){

		$data['games'] = $this->games_model->index();
		$data['title'] = "New gamer";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/form-game',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);

	}
	// inserir novo registro
	public function insert(){
		$game = $_POST;
		$game['user_id'] = $_SESSION["logger_user"]["id"];

		$this->games_model->insert($game);
		redirect('games');

	}
	//abre a pagina form-game com os campos preenchidos
	public function edit($id){
		$data['game'] = $this->games_model->show($id);
		$data['title'] = "Editar gamer";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/form-game',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);

	}
	//alterar
	public function update($id){
		$game = $_POST;
		$this->games_model->update($id,$game);
		redirect('games');

	}
	public function delete($id){
		$this->games_model->delete($id);
		redirect('games');
	}

	public function mygames(){

		$data['games'] = $this->games_model->mygames_index();
		$data['title'] = "My Games - CodeIgniter";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/my-games',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);

	}


}