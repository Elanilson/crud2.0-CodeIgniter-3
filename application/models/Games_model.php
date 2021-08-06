<?php

Class Games_model extends CI_Model{

	public function index(){
		$this->db->order_by('name','ASC');
		return $this->db->get('tb_games')->result_array();
	}
	public function dashboard_index(){
		$this->db->order_by('id','DESC');
		$this->db->limit(5);
		return $this->db->get('tb_games')->result_array();

	}

	public function insert($game){
		$this->db->insert('tb_games',$game);
	}
	//exibir os dados 
	public function show($id){

		return $this->db->get_where('tb_games',array('id' =>$id))->row_array();

	}
	public function update($id,$game){
		$this->db->where('id',$id);
		return $this->db->update('tb_games',$game);

	}
	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_games');

	}
	public function mygames_index(){
		$this->db->where('user_id',$_SESSION['logger_user']['id']);
		$this->db->order_by('id','DESC');
		return $this->db->get('tb_games')->result_array();
	}
}