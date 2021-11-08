<?php
/**
 * Plugin name: Popup game 
 * Description: A popup game.
 * Plugin URI: http://localhost
 * Version: 1.0 
 * Author: Oliver Linaa Aaby, Theis Aagaard, Victoria Engelbrecht, Lasse Kock
 * License: GPL2
 */

 function game(){
     $mycode = '
     <section id="gamewrapper"> 
     <div id="game">
     <script src="https://cdn.htmlgames.com/embed.js?game=HauntedHouseHiddenObjects&amp;bgcolor=white"></script>
     </div>
     </section>
     ';
     return $mycode;
 }
 function register_styles_plugin_game(){
     wp_enqueue_style('CostumStylesheet',plugins_url('popupgame/css/style.css'));

     wp_enqueue_script('CostumScript',plugins_url('popupgame/js/script.js'),array(),null,true);

 }
 
 add_shortcode('game', 'game');
 add_action('wp_enqueue_scripts','register_styles_plugin_game');

?>