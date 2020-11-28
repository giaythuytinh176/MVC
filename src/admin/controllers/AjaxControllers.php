<?php

namespace MVC\admin\Controllers;

class AjaxControllers extends ProductController
{
    public function StatusProduct(): void
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            echo $this->ActiveOrDisableProduct($id);
        }
    }

}