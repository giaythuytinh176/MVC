<?php

namespace MVC\Models;

use MVC\libs\Database;

class LangModels
{
    public function getLangDB($langNeedTranslate = null)
    {
        $lang = \MVC\libs\Languages::CheckLang();
        if ($lang == "english") return $langNeedTranslate;
        $field = "{$lang}_lang";
        $sql = "SELECT * FROM languages WHERE english_lang LIKE '$langNeedTranslate'";
        $stmt = Database::getInstance()->query($sql);
        $data = $stmt->fetch(Database::getInstance()::FETCH_ASSOC);
        if (empty($data)) return !empty($langNeedTranslate) ? $langNeedTranslate : "No data.";
        else return $data[$field];
    }
}