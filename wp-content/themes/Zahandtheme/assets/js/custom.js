

jQuery( document ).ready(function( $ ) {

	$('.filter-link').on('click', function(e){
		e.preventDefault();
		if ( !$(this).hasClass('show-all')) {
		var term = $(this).attr('data-id');
		$('.thumbnails').hide();
		$('.'+term).fadeIn();
		} else {
			$('thumbnails').fadeIn();
		}


	});
});