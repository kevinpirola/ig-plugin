<?php
/*
    Plugin Name: Instruments Genealogy
    Plugin URI: http://instrumentsgenealogy.com
    Description: This plugins adds everything that is needed to handle instruments genealogy's site.
    Author: Gianmarco Laggia
    Version: 0.1
    Author URI: http://instrumentsgenealogy.com
*/

add_action( 'admin_menu', 'ig_plugin_menu' );

function ig_plugin_menu() {
    add_menu_page( 'Instruments Genalogy Settings', 'Instr. Genealogy', 'manage_options', 'ig-menu', 'ig_plugin_options');
    add_submenu_page( 'ig-menu', 'Brands', 'Brands', 'manage_options', 'ig-menu-brands', 'ig_plugin_options');
    add_submenu_page( 'ig-menu', 'Models', 'Models', 'manage_options', 'ig-menu-models', 'igMenuModels');
}

function ig_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

function igMenuModels(){
    if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    ?>
<h1>Models</h1>
<p>Here goes the model list</p>
<div class="row" style="border: 1px solid red;">
    <div class="col-md-4" style="border: 1px solid green">o</div>
    <div class="col-md-4" style="border: 1px solid green">o</div>
</div>
    <?php
}

?>