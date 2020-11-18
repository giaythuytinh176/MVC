<?php

\MVC\libs\Session::destroy();
//header("refresh:1;url=".\MVC\controllers\UrlControllers::url("shop/login"));
header("Location: " . \MVC\controllers\UrlControllers::url());
