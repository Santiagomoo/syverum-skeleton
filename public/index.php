<?php

use Core\Boot\Application;

define('BASE_PATH', dirname(__DIR__, 1));


require BASE_PATH . '/vendor/autoload.php';


$app = new Application();
$app->run();
