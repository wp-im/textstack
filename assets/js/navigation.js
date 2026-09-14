( function () {
	'use strict';

	var button = document.querySelector( '.menu-toggle' );
	var navigation = document.querySelector( '.main-navigation' );
	if ( ! button || ! navigation ) {
		return;
	}

	var closeMenu = function () {
		button.setAttribute( 'aria-expanded', 'false' );
		navigation.classList.remove( 'is-open' );
	};

	button.addEventListener( 'click', function () {
		var expanded = 'true' === button.getAttribute( 'aria-expanded' );
		button.setAttribute( 'aria-expanded', expanded ? 'false' : 'true' );
		navigation.classList.toggle( 'is-open', ! expanded );
	} );

	navigation.addEventListener( 'click', function ( event ) {
		if ( event.target.closest( 'a' ) ) {
			closeMenu();
		}
	} );

	document.addEventListener( 'keydown', function ( event ) {
		if ( 'Escape' === event.key ) {
			closeMenu();
			button.focus();
		}
	} );

	document.addEventListener( 'click', function ( event ) {
		if ( ! navigation.contains( event.target ) && ! button.contains( event.target ) ) {
			closeMenu();
		}
	} );

	window.addEventListener( 'resize', function () {
		if ( window.matchMedia( '(min-width: 721px)' ).matches ) {
			closeMenu();
		}
	} );
}() );
