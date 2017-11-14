


<?php get_header(); ?>



<div class=" page-wrap col-xs-12 col-sm-8 col-sm-offset-2">

	<h1> Search Results For: <?php echo get_search_query(); ?>  </h1>

	<?php if (have_posts()): ?>
		<?php while (have_posts() ): the_post(); ?>

			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; ?>
	<?php else: ?>
		<h4>OOPS! I did it again... </h4>
	<?php endif; ?>

</div>	



<?php get_footer(); ?>