<?php

namespace MVC\controllers;

class CheckoutControllers extends renderControllers
{
    public function checkoutView($params)
    {
        $this->view("order/checkout");
    }
}