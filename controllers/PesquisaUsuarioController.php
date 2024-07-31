<?php
	namespace controllers;
	/**
	* 
	*/
	class PesquisaUsuarioController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('pesquisaUsuario.php');
		}
	}
?>