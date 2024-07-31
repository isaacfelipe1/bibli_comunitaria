<?php
	namespace controllers;
	/**
	* 
	*/
	class CadastroLoginController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('cadastroLogin.php');
		}
	}
?>