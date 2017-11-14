




<?php

$uniqueID = esc_attr(uniqid('search-form')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
	<input type="search" id="<?php echo $uniqueID; ?>" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">

	<input type="submit" value="go" class="search-submit">
</form>


