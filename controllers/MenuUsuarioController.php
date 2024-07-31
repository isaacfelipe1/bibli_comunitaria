<?php
	namespace controllers;
	/**
	* 
	*/
	class MenuUsuarioController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('menuUsuario.php');
		}
	}
?>