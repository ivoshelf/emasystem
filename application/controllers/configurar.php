<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configurar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('configurar');
	}
	
	//TODO: Criar as funções para carregar as outras páginas conf
}