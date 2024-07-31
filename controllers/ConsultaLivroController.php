<?php
    namespace controllers;

    // use models\ConsultaLivroModel;

    class ConsultaLivroController extends Controller
    {
        public function __construct($view,$model){
			parent::__construct($view,$model);
		}

		public function index(){
			$this->view->render('consultaLivro.php');
		}
    }
?>
