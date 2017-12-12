console.log("Hello World from main.js!");


jQuery( document ).ready(function( $ ) {



	 var $headerW = $('.header-words');

	 $headerW.waypoint(function (){
	 	$headerW.addClass('js-hero-animate');
	 }, { offset:'60%'} );


	
	 var $roxyQ = $('.roxy-quote');

	 $roxyQ.waypoint(function (){

	 	$roxyQ.addClass('roxy-show');
	 }, { offset:'60%'} );


		
		$(function() {
		  $('a[href*=#]').on('click', function(e) {
		    e.preventDefault();
		    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		  });
		});



});