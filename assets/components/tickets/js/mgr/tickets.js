var Tickets = function(config) {
	config = config || {};
	Tickets.superclass.constructor.call(this,config);
};
Ext.extend(Tickets,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('tickets',Tickets);

Tickets = new Tickets();

Tickets.PanelSpacer = { html: '<br />' ,border: false, cls: 'tickets-panel-spacer' };