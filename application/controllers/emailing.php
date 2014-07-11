<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emailing extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('emailing');
	}
	
	public function gerenciar()
	{
		$dados = array(
		'titulo'=>'Emasystem - Gerenciar Categorias',
		'autor'=>'Design and developed by Ivo Shelf [ivoshelf@gmail.com]',
		'view_principal'=>'gerenciar',
		);	
		$this->load->view('gerenciar',$dados);
	}
	
	public function criar()
	{
		$dados = array(
		'titulo'=>'Emasystem - Criar emailing',
		'autor'=>'Design and developed by Ivo Shelf [ivoshelf@gmail.com]',
		'view_principal'=>'criar',
		);		
		$this->load->view('criar',$dados);
	}
	
	public function acompanhar()
	{
		$dados = array(
		'titulo'=>'Emasystem - Acompanhar',
		'autor'=>'Design and developed by Ivo Shelf [ivoshelf@gmail.com]',
		'view_principal'=>'acompanhar',
		);		
		$this->load->view('acompanhar',$dados);
	}
	
	public function historico()
	{
		$dados = array(
		'titulo'=>'Emasystem - Acompanhar',
		'autor'=>'Design and developed by Ivo Shelf [ivoshelf@gmail.com]',
		'view_principal'=>'historico',
		);		
		$this->load->view('historico',$dados);
	}
	
}