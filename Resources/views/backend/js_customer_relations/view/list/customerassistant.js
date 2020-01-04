//

Ext.define('Shopware.apps.JsCustomerRelations.view.list.Customerassistant', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.customerassistant-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.JsCustomerRelations.view.detail.Window'
        };
    }
});
