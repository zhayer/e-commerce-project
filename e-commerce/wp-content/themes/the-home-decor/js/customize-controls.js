( function( api ) {

	// Extends our custom "the-home-decor" section.
	api.sectionConstructor['the-home-decor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );