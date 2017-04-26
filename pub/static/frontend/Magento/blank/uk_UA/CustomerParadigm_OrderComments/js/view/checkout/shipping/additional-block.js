define(
    [
        'jquery',
        'ko',
        'uiComponent',
    ],
	function ($, ko, Component) {
    'use strict';
    var show_hide_custom_blockConfig = window.checkoutConfig.show_hide_custom_block;
		return Component.extend({
			defaults: {
				template: 'CustomerParadigm_OrderComments/checkout/shipping/additional-block'
			},
			canVisibleBlock: show_hide_custom_blockConfig
		});
});
