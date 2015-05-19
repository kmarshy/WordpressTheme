<?php
	// snipet for for linking the custome menu with wordpress backend
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'marshallTheme' ),
    ) );

?>