<?php

/* 
plugin name: Super Hero 
description: activa el plugin de super-heros 
version: 1.0
author:  Paula Silva
Author URI: https://github.com/PFernanda2397

*/

function estilos_plugin(){
    $estilos_url = plugin_dir_url(__FILE__); 
    wp_enqueue_style( 'super_hero', $estilos_url.'/assets/css/estilo.css', '', '1.0', 'all');  
}

add_action('wp_enqueue_scripts', 'estilos_plugin');