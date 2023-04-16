<?php 
    /**
     * php/menus/menu-header-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.04.16)
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-4',
            'menu_id' => 'Header-Primary'
        )
    );
?>