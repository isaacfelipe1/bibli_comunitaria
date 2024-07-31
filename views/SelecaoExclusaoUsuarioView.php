<?php
	namespace views;

	class SelecaoExclusaoUsuarioView extends View{

		const DEFAULT_HEADER = 'header2.php';
		const DEFAULT_FOOTER = 'footer.php';
		
		public function render($body,$header = null,$footer = null){
			if($header == null)
			{
				include('views/templates/'.self::DEFAULT_HEADER);
			}

			include('views/templates/'.$body);

			if($footer == null){
				include('views/templates/'.self::DEFAULT_FOOTER);
			}
		}

	}
?>