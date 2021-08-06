<?php

class Shearch_model extends CI_Model {

	public function shearch($shearch){

		if(empty($shearch)){

			return array();

		}else{
			$shearch = $this->input->post('shearch');
			$this->db->like('name',$shearch);
			return $this->db->get('tb_games')->result_array(); 
		}
	}
}