<?php
/**
	Plugin Name: HU-IvM Embedder
	Description: Plugin voor het embedden van diverse externe media, geschreven voor HU-IvM.
	Version: 2.0.1
	Plugin URI: https://github.com/HU-IvM/HU-IvM-Embedder
	Author: Ronald Broekhuizen & Twan Verstegen
	Author URI: https://www.media-engineers.nl
	License: GPLv2
	Text Domain: huivm-embedder
*/

/* Update Checker */
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/HU-IvM/HU-IvM-Embedder',
	__FILE__,
	'huivm-embedder'
);

//Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');
$myUpdateChecker->getVcsApi()->enableReleaseAssets();



/* Flourish */

function huivm_embedder_flourish( $atts ) {
   $a = shortcode_atts( array(
      'id' => '',
      'type' => '',
   ), $atts );
   return '<div class="flourish-embed '.$a['type'].'" data-src="visualisation/'.$a['id'].'"><script src="https://public.flourish.studio/resources/embed.js"></script></div>';
}

add_shortcode('flourish', 'huivm_embedder_flourish');

/* Localfocus */

function huivm_embedder_localfocus( $atts ) {
   $a = shortcode_atts( array(
      'id' => '',
   ), $atts );
   return '<iframe class="localfocusvisual" frameborder="0" style="width:100%;height:550px;overflow:hidden" src="https://localfocuswidgets.net/'.$a['id'].'"></iframe>';
}

add_shortcode('localfocus', 'huivm_embedder_localfocus');

/* HU MAM */

function huivm_embedder_mam( $atts ) {
   $a = shortcode_atts( array(
      'id' => '',
      'type' => 'video',
   ), $atts );
   $playerAudio = "gUDjC9bv";
   $playerVideo = "Kv4Phafj";
   if ($a['type'] == "audio")
   {
	   return '<div style="position:relative;overflow:hidden;width:600px;height:40px;margin:20px 0px;"><iframe width="600" height="40" src="https://stream.hu.nl/players/'.$a['id'].'-'.$playerAudio.'.html"></iframe></div>';
   }
   else # Dan zal het wel video zijn, me dunkt
   {
	   return '<div style="position:relative;overflow:hidden;width:100%;padding-top: 56.25%;"><iframe style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%;height:100%;" src="https://stream.hu.nl/players/'.$a['id'].'-'.$playerVideo.'.html" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
   }
}

add_shortcode('MAM', 'huivm_embedder_mam');
add_shortcode('mam', 'huivm_embedder_mam');

/* Knightlab */

function huivm_embedder_knightlab( $atts ) {
   $a = shortcode_atts( array(
      'id' => '',
   ), $atts );
   return '<div style="position:relative;overflow:hidden;width:100%;padding-top: 56.25%;"><iframe style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%;height:100%;" src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source='.$a['id'].'&font=Default&lang=en&initial_zoom=2&height=100%" width="100%" frameborder="0"></iframe></div>';
}

add_shortcode('knightlab', 'huivm_embedder_knightlab');

?>
