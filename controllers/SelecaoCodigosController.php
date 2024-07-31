<?php
	namespace controllers;
	/**
	* 
	*/
	class SelecaoCodigosController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('selecaoCodigos.php');
		}
	}
?>