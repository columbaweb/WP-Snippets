<?php if ( is_page(array( 38, 40, 42, 44 ))) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'menu1' ) ); ?>
<?php } elseif ( is_page(array( 46, 95, 97, 99, 101, 103 ))) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'menu2' ) ); ?>      
<?php } else {  ?>
	<p>Nothing found</p>
<?php }?>