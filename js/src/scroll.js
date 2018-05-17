

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


jQuery(document).ready(function( $ ) {

	var getAdminBarHeight = function() {
		return ( $( 'body' ).hasClass( 'admin-bar' ) ? $( '#wpadminbar' ).height() : 0 );
	};

	if ( $( 'body' ).hasClass( 'home' ) ) {

		// scroll handler
		var scrollToAnchor = function( id ) {

			// grab the element to scroll to based on the name
			var elem = $("a[name='"+ id +"']"),
				menu = $("nav ul");

			// if that didn't work, look for an element with our ID
			if ( typeof( elem.offset() ) === "undefined" ) {
				elem = $("#"+id);
			}

			// if the destination element exists
			if ( typeof( elem.offset() ) !== "undefined" ) {

				// do the scroll
				$('html, body').animate({
					scrollTop: elem.offset().top - menu.height() - getAdminBarHeight() - 10
				}, 1000 );

			}

		};

		// bind to click event
		$("a").click(function( event ) {

			// only do this if it's an anchor link
			if ( $(this).attr("href").match("#") ) {

				// prevent default propagation
				event.preventDefault();

				// scroll to the location
				var href = $(this).attr('href').replace('#', '');
				scrollToAnchor( href );

				// fallback to prevent jitter
				return false;

			}

		});

		var scroll_on_load = getUrlParameter('scroll');
		if ( scroll_on_load != 'undefined' ) {
			scrollToAnchor( scroll_on_load );
		}

	}

});
