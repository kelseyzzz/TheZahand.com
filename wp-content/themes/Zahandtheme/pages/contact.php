<?php 

	/*

	Template Name: Contact KAZA
	
	*/

 ?>

 <?php get_header(); ?>




<?php


 
 if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		}

?>


<div class="contact-header">
<?php the_field('contact_header') ?>
</div>

<div class="contact-bg" style="background-image: url(<?php the_field('background_') ?>);">
</div>

<div class="contact-info">
<?php the_field('contact_info') ?>
</div>

<div class="insta-feed">
<?php the_field('instagram') ?>
</div>


<!-- <?php	echo do_shortcode('[wpforms id="137" title="false" description="false"]');
	?> -->




	



 <?php get_footer(); ?>