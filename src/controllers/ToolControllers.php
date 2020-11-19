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

    public static  function textarea($var, $cols = 100, $rows = 30, $stop = false, $char = 'UTF-8') {
        $cols = ($cols == 0) ? 100 : $cols;
        $rows = ($rows == 0) ? 30 : $rows;
        if ($char === false) $char = 'ISO-8859-1';
        echo "\n<br /><textarea cols='$cols' rows='$rows' readonly='readonly'>";
        if (is_array($var)) $text = htmlspecialchars(print_r($var, true), ENT_QUOTES, $char);
        else $text = htmlspecialchars($var, ENT_QUOTES, $char);
        if (empty($text) && !empty($var)) { // Fix "empty?" textarea bug
            $char = ($char == 'ISO-8859-1') ? '' : 'ISO-8859-1';
            if (is_array($var)) $text = htmlspecialchars(print_r($var, true), ENT_QUOTES, $char);
            else $text = htmlspecialchars($var, ENT_QUOTES, $char);
        }
        echo "$text</textarea><br />\n";
        if ($stop) exit;
    }
}