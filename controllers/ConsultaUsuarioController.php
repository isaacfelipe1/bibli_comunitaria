<?php
	namespace controllers;
	class ConsultaUsuarioController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('consultaUsuario.php');
		}
	}
?>