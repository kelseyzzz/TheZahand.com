<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>


<nav>
    <div class="navbar-header">
     
      <!-- <a class="navbar-brand kaza" href=" <?php echo home_url(); ?> ">KELZEY</a> -->
    </div>

      <ul class="header-ul">
      	<?php
      		$menu_items = wp_get_nav_menu_items('Main Navigation');
      		foreach ($menu_items as $mi) {
      			$title = $mi->title;
      			$url = $mi->url;
      			echo '<li><a href="'.$url.'">'.$title.'</a></li>';
      		}
      	?>
      </ul>
</nav>
 