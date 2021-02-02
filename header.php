<?php/*Header Template*/?>

<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
</head>

<body>
<header>
  <div class="hamburgerContainer" id="hammy">
    <div id="one" class="hamburgerLine"></div>
    <div id="two" class="hamburgerLine"></div>
    <div class="overlay" id="overlayID">
      <?php $args = array ( 'theme_location' => 'primary');?>
      <?php wp_nav_menu($args); ?>
    </div>
  </div>
</header>
