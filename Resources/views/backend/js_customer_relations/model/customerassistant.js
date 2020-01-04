Ext.define('Shopware.apps.JsCustomerRelations.model.Customerassistant', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'JsCustomerRelations',
            detail: 'Shopware.apps.JsCustomerRelations.view.detail.Customerassistant'
        };
    },

    fields: [
		{ fieldLabel: 'Firma', displayField: 'company', name : 'companyId', type: 'string' },
        { name : 'assistantId', type: 'string' },
    ],
    associations: [
		{
        relation: 'ManyToOne',
        field: 'assistantId',
        model: 'Shopware.apps.JsCustomerAssistant.model.Assistant',
        type: 'hasMany',
        name: 'getAssistant',
		associationKey: 'assistant'
    	},
        {
            relation: 'ManyToOne',
            field: 'companyId',
            type: 'hasMany',
            model: 'Shopware.apps.Base.model.Address',
            name: 'getCompany',
            associationKey: 'company'
        }
	]
});
