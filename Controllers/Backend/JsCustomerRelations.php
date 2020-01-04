<?php

use JsCustomerAssistant\Models\CustomerAssistant;

class Shopware_Controllers_Backend_JsCustomerRelations extends \Shopware_Controllers_Backend_Application {
    protected $model = CustomerAssistant::class;
    protected $alias = 'customerAssistant';

    protected function getListQuery() {
        $builder = parent::getListQuery();

        $builder->leftJoin('customerAssistant.company', 'company')
            ->leftJoin('customerAssistant.assistant', 'assistant');

        $builder->addSelect(array('assistant', 'company'));

        return $builder;
    }

    protected function getDetailQuery($id) {
        $builder = parent::getDetailQuery($id);

        $builder->leftJoin('customerAssistant.company', 'company')
            ->leftJoin('customerAssistant.assistant', 'assistant');

        $builder->addSelect(array('assistant', 'company'));

        return $builder;
    }
}
