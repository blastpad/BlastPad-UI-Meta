<?php 

function minify_css(){
	
	$asset_directory = "../../vendor/blastpad_ui/0.0.6/asset/";
	$module_directory = $asset_directory . "module/css/";
	$motif_directory = $asset_directory . "motif/css/";
	$css_mode = isset( $_GET[ "mode" ] ) ? $_GET[ "mode" ] : "all";
	$option[ "minify" ] = isset( $_GET[ "minify" ] ) ? $_GET[ "minify" ] : true;
	
	$css_module = array(
			"general",
			"grid",
			"typography",
			"color",
			"form",
			"menu",
			"table",
			"container",
			"media",
		);
		
	$css_file = array( $module_directory . "reset/default.css" );
	foreach ( $css_module as $directory ){
		if ( ( $css_mode == "default" ) or ( $css_mode == "all" ) ){
			array_push( $css_file, $module_directory . $directory . "/default.css" );
		}
		if ( ( $css_mode == "extra" ) or ( $css_mode == "all" ) ){
			array_push( $css_file, $module_directory . $directory . "/extra.css" );
		}	
	}
	
	if ( $css_mode == "all" ){
		array_push( $css_file, $motif_directory . "rounded.css" );
	}

	$data = "";
	
	// Minify.
	require_once ( "../../../blastpad_source/vendor/blastpad/0.0.5/module/minifier/blastpad_minifier.php" );
	$blastpad_minifier = new blastpad_minifier();
	$data = $blastpad_minifier->minify( $css_file, $option );
	echo $data;
}

minify_css();	
?>