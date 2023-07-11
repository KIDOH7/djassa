(function($) {
    "use strict";
    $(document).on('ready', function() {

		/*=====================================
			Video Popup
		======================================*/ 
		new ModalVideo('.js-modal-btn');

    });




})(jQuery);

window.addEventListener('DOMContentLoaded', function() {
    new ModalVideo(".js-video-btn");
});