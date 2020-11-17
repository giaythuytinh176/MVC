<?php

namespace MVC\controllers;

class ToolControllers
{
    public static function PrettyShow($cmd, $stop = false)
    {
        echo "<br>";
        print("<pre>" . print_r($cmd, true) . "</pre>");
        echo "<br>";
        if ($stop) die();
    }
}