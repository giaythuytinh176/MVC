<?php

use MVC\controllers\UrlControllers;

require_once __DIR__ . '/vendor/autoload.php';
\MVC\libs\init::start();

(new UrlControllers)->index();
