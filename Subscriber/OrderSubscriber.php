<?php

namespace JsCustomerAssistant\Subscriber;
use JsCustomerAssistant\Components\Mailer;
use Doctrine\DBAL\Connection;
use Enlight\Event\SubscriberInterface;

class OrderSubscriber implements SubscriberInterface{

    private $pluginDirectory;
    private $mailer;
    private $connection;

    /**
     * @param Connection $connection
     */


    public function __construct($pluginName, $pluginDirectory, Connection $connection, Mailer $mailer){
        $this->pluginDirectory = $pluginDirectory;
        $this->mailer = $mailer;
        $this->connection = $connection;

    }

    public static function getSubscribedEvents() {
        return [
            'Shopware_Modules_Order_SendMail_Filter' => 'onOrderCreation'
        ];
    }

    public function onOrderCreation($args) {
        $context = $args->get('context');
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('js_assistant');
        var_dump($context['sOrderDetails'][0]['userID']);
        $data = $queryBuilder->execute()->fetchAll();
        var_dump($data);
        return;
    }
}

