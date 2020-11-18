<?php

namespace MVC\Models;

use MVC\libs\Database;

class LangModels
{
    public function getLangDB($langNeedTranslate = null)
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
        if ($lang == "english") return $langNeedTranslate;
        $field = "{$lang}_lang";
        $sql = "SELECT * FROM languages WHERE english_lang LIKE '$langNeedTranslate'";
        $stmt = Database::getInstance()->query($sql);
        $data = $stmt->fetch(Database::getInstance()::FETCH_ASSOC);
        if (empty($data)) return "No data.";
        else return $data[$field];
    }
}