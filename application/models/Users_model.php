<?php

class Users_model extends CI_Model{

	public function dashboard_index(){
		$this->db->order_by('id','DESC');
		$this->db->limit(5);
		return $this->db->get('tb_users')->result_array();
	}

	public function index(){
		return $this->db->get('tb_users')->result_array();
	}

	public function insert($user){
		$this->db->insert('tb_users',$user);
	}
	public function show($id){

		return $this->db->get_where('tb_users',array(
			'id'=> $id
		))->row_array();

	}
	public function update($id,$game){
		$this->db->where('id',$id);
		return $this->db->update('tb_users',$game);
	}

}