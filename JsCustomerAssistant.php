<?php

namespace JsCustomerAssistant;

use Shopware\Components\Plugin;
use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Model\ModelManager;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Doctrine\DBAL\Connection;
use Shopware\Components\Plugin\Context\ActivateContext;
use JsCustomerAssistant\Models\Assistant;
use JsCustomerAssistant\Models\CustomerAssistant;


class JsCustomerAssistant extends Plugin  {


    /**
     * {@inheritdoc}
     */
    public function install(InstallContext $installContext) {
        $this->createDatabase();
    }

    public function activate(ActivateContext $activateContext) {
        $activateContext->scheduleClearCache(ActivateContext::CACHE_LIST_DEFAULT);
    }

    /**
     * @param ModelManager $modelManager
     * @return array
     */
    private function getClasses(ModelManager $modelManager) {
        return [
            $modelManager->getClassMetadata(Assistant::class),
            $modelManager->getClassMetadata(CustomerAssistant::class)
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall(UninstallContext $uninstallContext) {
        if (!$uninstallContext->keepUserData()) {
            $this->removeDatabase();
        }
    }

    private function createDatabase() {
        $modelManager = $this->container->get('models');
        $tool = new SchemaTool($modelManager);
        $classes = $this->getClasses($modelManager);
        $tool->updateSchema($classes, true); // make sure use the save mode
    }

    private function removeDatabase() {
        $modelManager = $this->container->get('models');
        $tool = new SchemaTool($modelManager);
        $classes = $this->getClasses($modelManager);
        $tool->dropSchema($classes);
    }


}
