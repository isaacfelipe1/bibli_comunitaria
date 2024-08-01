<?php
	namespace controllers;
	class FormPesquisaUsuarioController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('formPesquisaUsuario.php');
		}
	}
?>