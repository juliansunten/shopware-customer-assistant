//

Ext.define('Shopware.apps.JsCustomerRelations.view.detail.Customerassistant', {
    extend: 'Shopware.model.Container',
    padding: 20,

    configure: function() {
        return {
            controller: 'JsCustomerRelations',
            fieldSets: [
                {
                    title: '',
                    fields: {
                        id: {
                            allowBlank: false
                        },
                        companyId: {
                            allowBlank: false
                        },
                        assistantId: {
                            allowBlank: false
                        }
                    }
                },
            ],
        };
    }
});
