<?php

namespace MVC\controllers;

class CheckoutControllers extends WebControllers
{
    public function checkoutView($params)
    {
        $this->view("index/checkout");
    }
}