//

Ext.define('Shopware.apps.JsCustomerAssistant', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.JsCustomerAssistant',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.Assistant',

        'detail.Assistant',
        'detail.Window'
    ],

    models: [ 'Assistant' ],
    stores: [ 'Assistant' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
