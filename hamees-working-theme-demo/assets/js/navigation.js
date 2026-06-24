( function () {
	'use strict';

	const button = document.querySelector( '.menu-toggle' );
	const navigation = document.querySelector( '.primary-navigation' );

	if ( ! button || ! navigation ) {
		return;
	}

	button.addEventListener( 'click', function () {
		const isOpen = navigation.classList.toggle( 'is-open' );
		button.setAttribute( 'aria-expanded', String( isOpen ) );
	} );

	navigation.addEventListener( 'click', function ( event ) {
		if ( event.target.matches( 'a' ) ) {
			navigation.classList.remove( 'is-open' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	window.addEventListener( 'resize', function () {
		if ( window.innerWidth > 900 ) {
			navigation.classList.remove( 'is-open' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );
}() );
