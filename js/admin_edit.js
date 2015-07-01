(function($) {
	// we create a copy of the WP inline edit post function
	var $wp_inline_edit = inlineEditPost.edit;
	// and then we overwrite the function with our own code
	inlineEditPost.edit = function( id ) {
		// "call" the original WP edit function
		// we don't want to leave WordPress hanging
		$wp_inline_edit.apply( this, arguments );

		// now we take care of our business

		// get the post ID
		var $post_id = 0;
		if ( typeof( id ) == 'object' )
			$post_id = parseInt( this.getId( id ) );

		if ( $post_id > 0 ) {
			// define the edit row
			var $edit_row = $( '#edit-' + $post_id );
			var $post_row = $( '#post-' + $post_id );
			
			console.log('#post-' + $post_id );
			console.log('post_row: '+ $post_row);
			console.log('edit_row: '+ $edit_row);

			// get the data
			var $horario = $('.column-Horario*', $post_row).html();
			console.log($horario);


			// populate the data
			$( ':input[name="post_horariomissa"]', $edit_row ).val($horario);
			console.log($( ':input[name="post_horariomissa"]', $edit_row ));
			
		}
	};

})(jQuery);