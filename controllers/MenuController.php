<?php
	namespace controllers;
	class MenuController extends Controller
	{
		
		public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('menu.php');
		}
	}
?>