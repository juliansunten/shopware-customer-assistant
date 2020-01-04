Ext.define('Shopware.apps.JsCustomerAssistant.store.Assistant', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'JsCustomerAssistant'
        };
    },
    model: 'Shopware.apps.JsCustomerAssistant.model.Assistant'
});
