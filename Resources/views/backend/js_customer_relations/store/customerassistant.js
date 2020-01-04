Ext.define('Shopware.apps.JsCustomerRelations.store.Customerassistant', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'JsCustomerRelations'
        };
    },
    model: 'Shopware.apps.JsCustomerRelations.model.Customerassistant'
});
