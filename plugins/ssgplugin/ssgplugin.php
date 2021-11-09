<?php
/**
 * Plugin name: SSG Plugin 
 * Description: A plugin for goodmorning, evening and night.
 */


 function examplefunction(){
     $mycode = '<h2 id="welcometext"></h2>';

    
     return $mycode;
 }

function register_styles_plugin(){
    wp_enqueue_style('ssgstylesheet',plugins_url('ssgplugin/css/style.css'));
    wp_enqueue_script('ssgscript',plugins_url('ssgplugin/js/script.js'),array(),null,true);
}

 add_shortcode('ssgplugin', 'examplefunction');
 add_action('wp_enqueue_scripts','register_styles_plugin');
 
?>