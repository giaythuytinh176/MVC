<?php

use MVC\controllers\UrlControllers;
require_once __DIR__ . '/vendor/autoload.php';
\MVC\libs\Session::init();
$urlcontrollers = new UrlControllers();
$urlcontrollers->index();
