Ext.define('Shopware.apps.JsCustomerRelations.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.customerassistant-list-window',
    height: 450,
    title : '{s name=window_title}Customer Relations listing{/s}',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.JsCustomerRelations.view.list.Customerassistant',
            listingStore: 'Shopware.apps.JsCustomerRelations.store.Customerassistant'
        };
    }
});
