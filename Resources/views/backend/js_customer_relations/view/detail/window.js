//

Ext.define('Shopware.apps.JsCustomerRelations.view.detail.Window', {
    extend: 'Shopware.window.Detail',
    alias: 'widget.customerassistant-detail-window',
    title : '{s name=title}Relations details{/s}',
    height: 420,
    width: 900,
    configure: function() {
        return {
            associations: []
        }
    }
});
