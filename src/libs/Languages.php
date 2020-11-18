<?php

namespace MVC\libs;

class Languages
{
    public function setLang($lang)
    {
        if (isset($lang)) {
            $_SESSION['lang'] = $lang;
            header('Location:' . $_SERVER['PHP_SELF']);
            exit();
        }
    }

    public static function getLangData($lang)
    {
        $data =  (new \MVC\models\LangModels())->getLangDB($lang);
        return $data;
    }

    /**
     * @return string
     */
    public static function CheckLang(): string
    {
        $checkLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : "vietnamese";
        switch ($checkLang) {
            case "french":
                $lang = "french";
                break;
            case "english":
                $lang = "english";
                break;
            default:
                $lang = "vietnamese";
        }
        return $lang;
    }
}