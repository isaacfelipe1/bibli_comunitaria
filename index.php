
<?php

define('INCLUDE_PATH', '/');

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . INCLUDE_PATH . DIRECTORY_SEPARATOR . $classPath . '.php';

    if (file_exists($filePath)) {
        include($filePath);
    } else {
        die('Nao conseguimos encontrar a classe ' . $class . ' no caminho ' . $filePath);
    }
});

$application = new Application();
$application->run();
?>






