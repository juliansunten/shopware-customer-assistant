//
Ext.define('Shopware.apps.JsCustomerRelations', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.JsCustomerRelations',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.Customerassistant',

        'detail.Customerassistant',
        'detail.Window'
    ],

    models: [ 'Customerassistant' ],
    stores: [ 'Customerassistant' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
