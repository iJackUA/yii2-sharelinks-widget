jQuery.fn.yiiShareLinks = function (override) {

	var overrideSettings = override || {};

	return this.each(function (index) {
		var settings, parameters, winObj;

		settings = {
			height: 450, // sets the height in pixels of the window.
			width: 600, // sets the width in pixels of the window.
			toolbar: 0, // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
			scrollbars: 0, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
			status: 0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
			resizable: 1, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
			left: 0, // left position when the window appears.
			top: 0, // top position when the window appears.
			center: 1, // should we center the window? {1 (YES) or 0 (NO)}. overrides top and left
			createnew: 1, // should we create a new window for each occurance {1 (YES) or 0 (NO)}.
			location: 0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
			menubar: 0 // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
		};

		settings = jQuery.extend(settings, overrideSettings);

		// center the window
		if (settings.center == 1) {
			settings.top = (screen.height - (settings.height + 110)) / 2;
			settings.left = (screen.width - settings.width) / 2;
		}

		parameters = "location=" + settings.location + ",menubar=" + settings.menubar + ",height=" + settings.height + ",width=" + settings.width + ",toolbar=" + settings.toolbar + ",scrollbars=" + settings.scrollbars + ",status=" + settings.status + ",resizable=" + settings.resizable + ",left=" + settings.left + ",screenX=" + settings.left + ",top=" + settings.top + ",screenY=" + settings.top;

		jQuery(this).bind("click", function () {
			var name = settings.createnew ? "PopUpWindow" + index : "PopUpWindow";
			winObj = window.open(this.href, name, parameters);
			winObj.focus();

			return false;
		});
	});

};