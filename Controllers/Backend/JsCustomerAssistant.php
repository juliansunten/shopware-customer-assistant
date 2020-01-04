<?php


use JsCustomerAssistant\Models\Assistant;

class Shopware_Controllers_Backend_JsCustomerAssistant extends \Shopware_Controllers_Backend_Application
{
    protected $model = Assistant::class;
    protected $alias = 'assistant';
}
