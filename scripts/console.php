<?php
    // Autoload files using Composer autoload
    require_once __DIR__ . '/../vendor/autoload.php';
    $app = new \Core\Crater($argv);
    $app->run();
?>