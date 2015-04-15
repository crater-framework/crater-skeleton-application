<?php
    include dirname(__DIR__).  '/Core/Crater.php';
    $app = new \Core\Crater($argv);
    $app->run();
?>