<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$dados = array(
		'titulo'=>'Emasystem - Seu mail manager',
		'autor'=>'Design and developed by Ivo Shelf [ivoshelf@gmail.com]',
		'view_principal'=>'bem-vindo',
		);
		$this->load->view('home',$dados);
	}
}