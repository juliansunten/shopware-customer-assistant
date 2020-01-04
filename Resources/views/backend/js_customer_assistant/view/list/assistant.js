//

Ext.define('Shopware.apps.JsCustomerAssistant.view.list.Assistant', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.assistant-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.JsCustomerAssistant.view.detail.Window'
        };
    }
});
