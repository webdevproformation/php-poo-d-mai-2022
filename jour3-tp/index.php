<?php // http://localhost/php-poo/jour3-tp
declare(strict_types=1);

spl_autoload_register(function($className){
    require "lib/" . $className . ".php";
});

?>

