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

    public static function dd($var)
    {
        echo "<pre>";
        print_r($var);
        exit;
    }

    public static function textarea($var, $stop = false, $cols = 100, $rows = 30, $char = 'UTF-8')
    {
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

    public static function ConvertName($valFromDB)
    {
        $NameProductToString = preg_replace("/^[\W]+$/", "-", $valFromDB['ProductName']);
        $NameProductToString = str_replace(array("\r", "\n", "\s", "\t", " "), "-", $NameProductToString);
        $NameProductToString = strtolower($NameProductToString);
        $NameProductToString = html_entity_decode($NameProductToString, ENT_QUOTES, "utf-8");// xoa cac ki tu dac biet trong chuoi
        $NameProductToString = transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove', $NameProductToString);//convert chu co dau sang ko dau
        return $NameProductToString;
    }
}