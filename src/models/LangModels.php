<?php

namespace MVC\models;

use MVC\libs\Database;

class LangModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getLangDB($langNeedTranslate = null)
    {
        $lang = \MVC\libs\Languages::CheckLang();
        if ($lang == "english") return $langNeedTranslate;
        $field = "{$lang}_lang";
        $data = $this->CRUDmodels->select("languages", ['english_lang' => $langNeedTranslate]);
        if (empty($data)) {
            return !empty($langNeedTranslate) ? $langNeedTranslate : "No data.";
        } else {
            return $data[$field];
        }
    }
}