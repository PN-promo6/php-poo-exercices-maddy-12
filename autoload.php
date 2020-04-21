<?php
spl_autoload_register(function ($className) {
    //__DIR__ est une constante qui represente le repertoire du fichier actuel
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
