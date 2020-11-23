<?php

namespace MVC\libs;

use MVC\controllers\UrlControllers;

class Languages
{
    public function setLang($lang)
    {
        if (isset($lang)) {
            $_SESSION['lang'] = $lang;
            header('Location:' . UrlControllers::url());
        }
    }

    public static function getLangData($lang)
    {
        return (new \MVC\models\LangModels())->getLangDB($lang);
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