Ext.define('Shopware.apps.JsCustomerAssistant.model.Assistant', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'JsCustomerAssistant',
            detail: 'Shopware.apps.JsCustomerAssistant.view.detail.Assistant'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string' },
        { name : 'email', type: 'string' },
    ]
});
