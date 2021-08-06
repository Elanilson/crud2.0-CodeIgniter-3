<?php

function permission (){
	$ci = get_instance();
	$loggeUser = $ci->session->userdata('logger_user');
	if(!$loggeUser){
		$ci->session->set_flashdata('danger','Você precisa estar logado para acessar está página');
		redirect('login');

	}
	return $loggeUser;
}