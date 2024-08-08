<?php
namespace views;

class View {

    const DEFAULT_HEADER = 'header.php';
    const DEFAULT_FOOTER = 'footer.php';

    public function render($body, $header = null, $footer = null) {
        // Inclui o header padrão se um personalizado não for fornecido
        if ($header == null) {
            include('views/templates/' . self::DEFAULT_HEADER);
        } else {
            include('views/templates/' . $header);
        }
        include('views/templates/' . $body);
		
        if ($footer == null) {
            include('views/templates/' . self::DEFAULT_FOOTER);
        } else {
            include('views/templates/' . $footer);
        }
    }
}
?>
