<?php

/*
Plugin Name: myplugin
Description: En cours de création et de développement
Version: 1.0.0
Author: Team Zelda-Link/D.Vjn
Author URI: http://rtfm.com
License: GNU GPL
*/

function changeText_footer_admin() {  
    echo 'Team Zelda-Link/D.Vjn est le responsable de tout ce bordel !'; 
} 
add_filter('admin_footer_text', 'changeText_footer_admin');

function changeColor($atts){
    extract(shortcode_atts(['color'=>'red',],$atts));
    return "<p style='color:{$color}'> Coucou, ce texte va devenir tout rouge !<p>";
}
add_shortcode('text', 'changeColor');