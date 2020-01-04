Ext.define('Shopware.apps.JsCustomerAssistant.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.assistant-list-window',
    height: 450,
    title : '{s name=window_title}Customer Assistant listing{/s}',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.JsCustomerAssistant.view.list.Assistant',
            listingStore: 'Shopware.apps.JsCustomerAssistant.store.Assistant'
        };
    }
});
