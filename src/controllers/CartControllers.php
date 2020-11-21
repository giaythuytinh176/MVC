<?php

namespace MVC\controllers;

class CartControllers extends WebControllers
{
    public function cartView($params)
    {
        $this->view("order/cart");
    }
}