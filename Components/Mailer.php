<?php

namespace JsCustomerAssistant\Components;

class Mailer {


    public function __construct()
    {
    }

    public function sendMail($args) {

        mail ( 'julian.sunten95@gmail.com', 'Test' , 'Neue Bestellung');
        return;
    }
}
