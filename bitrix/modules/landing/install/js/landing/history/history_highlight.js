;(function() {
	"use strict";

	BX.namespace("BX.Landing.History");

	BX.Landing.History.Highlight = function()
	{
		BX.Landing.UI.Highlight.apply(this);
		this.layout.classList.add("landing-ui-highlight-animation");
		this.animationDuration = 300;
	};


	BX.Landing.History.Highlight.getInstance = function() {
		if (!top.BX.Landing.History.Highlight.instance)
		{
			top.BX.Landing.History.Highlight.instance = new BX.Landing.History.Highlight();
		}

		return top.BX.Landing.History.Highlight.instance;
	};

	BX.Landing.History.Highlight.prototype = {
		constructor: BX.Landing.History.Highlight,
		__proto__: BX.Landing.UI.Highlight.prototype,

		show: function(element, rect)
		{
			BX.Landing.UI.Highlight.prototype.show.call(this, element, rect);

			return new Promise(function(resolve) {
				setTimeout(resolve, this.animationDuration);
				this.hide();
			}.bind(this));
		}
	}
})();