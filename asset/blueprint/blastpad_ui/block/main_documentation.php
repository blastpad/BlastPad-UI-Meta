<?php	
	require_once ( "../../blastpad_source/vendor/blastpad/0.0.5/module/code/blastpad_code.php" );
	$blastpad_code = new blastpad_code();
?>

<main class="bp_wide">
	<section>
		<div class="bp_center_justify">
			<p class="bp_large_break"></p>
			<div>
				<h1 class="bp_brand"><a href="http://blastpad.co/ui">BlastPad UI</a></h1>
				<span class="bp_big_text">A lightweight CSS front-end framework</span>
			<div>	
			<p class="bp_large_break"></p>
			
		</div>
		<div class="bp_left_justify">
			<h2 class="bp_center_justify">Getting Started</h2>
			
			<p>Getting started with BlastPad UI is quick and easy. </p>
			
			<p>If you are starting a new project, just copy and paste this basic starter template into your HTML file.</p>
			
			<p class="bp_small_break"></p>
			
			<h3 class="bp_center_justify">Starter Template</h3>
			<code class="bp_snippet">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8" /&gt;
	&lt;meta http-equiv="content-type" content="text/html; charset=utf-8" /&gt;
	&lt;title&gt;BlastPad UI Boilerplate Example&lt;/title&gt;	
	&lt;meta name="description" content="" /&gt;
	&lt;meta name="keywords" content="" /&gt;
	&lt;meta name="HandheldFriendly" content="true" /&gt;
	&lt;meta name="MobileOptimized" content="320" /&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" /&gt;
	&lt;meta http-equiv="cleartype" content="on" /&gt;
	&lt;!--[if IE]&gt;
		&lt;script src="//html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
	&lt;![endif]--&gt;
	&lt;link href="http://blastpad.co/ui/vendor/blastpad_ui/0.0.6/asset/module/css/blastpad_ui.min.css" rel="stylesheet" type="text/css" /&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div class="bp_container bp_wide"&gt;
		&lt;!-- Place your custom content here. --&gt;
			&lt;div class="bp_center_justify"&gt;
				&lt;h1&gt;BlastPad UI&lt;/h1&gt;&lt;h3&gt;Boilerplate Example&lt;/h3&gt;
				&lt;p&gt;This is a plain boilerplate template for BlastPad UI.&lt;/p&gt;
				&lt;p&gt;Your custom content goes here.&lt;/p&gt;
			&lt;/div&gt;	
		&lt;!-- End of custom content. --&gt;
	&lt;/div&gt;&lt;!-- End of bp_container div. --&gt;
&lt;/body&gt;
&lt;/html&gt;
				<?php //echo $blastpad_code->get( __DIR__ . "../../../../../vendor/blastpad_ui/0.0.6/example/boilerplate/index.htm" ); ?>
			</code>

		<p>You can view a working demo of the <a href="<?php echo "../vendor/blastpad_ui/0.0.6/example/boilerplate/index.htm"; ?>">boilerplate example here</a>.</p> 

		<p class="bp_large_break"></p>

		<h3 class="bp_center_justify">BlastPad UI Link</h3>
		<p>If you already have an existing file, just add the following code between the <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code> of your HTML document.  
		This will include the BlastPad UI CSS stylesheet in your document.</p>
			
		<code class="bp_snippet">&lt;link href="http://blastpad.co/ui/vendor/blastpad_ui/0.0.6/asset/module/css/blastpad_ui.min.css" rel="stylesheet" type="text/css" /&gt;</code>
			
		<p class="bp_large_break"></p>	
		<h3 class="bp_center_justify">Self-hosted</h3>
			
		<p>If you prefer to self-host the BlastPad UI code instead of linking to it, you can download the code from <a href="https://github.com/blastpad/BlastPad_UI">GitHub</a>.</p>
		
		<p>Unzip the file and place it in your project directory.  Then between the <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code> of your HTML document, add the following code, replacing the phrase "yourfilepath" with the link to where you placed the <code>blastpad_ui.min.css</code> file.</p>
		
		<code class="bp_snippet">&lt;link href="http://yourfilepath/vendor/blastpad_ui/asset/css/blastpad_ui.min.css" rel="stylesheet" type="text/css" /&gt;</code>
		
		
			
		<p class="bp_large_break"></p>
		
		<h3 class="bp_center_justify">Examples</h3>
		
		<p>You can also view the <a href="../example">examples</a> to help you get started.</p>
	
		<p class="bp_large_break"></p>
					
			
		<h2 class="bp_center_justify">The Styles</h2>
		
		<h3 class="bp_center_justify">Defaults</h3>
		
		<p>BlastPad UI comes with some default styling out of the box.  These styles include reset (so that styles look similar in different browsers), typography, colors, link styles and other basic styling.
		</p>
		
		<p class="bp_small_break"></p>
		
		<p>In case you don't want to use the default styling, it's possible to turn them off.  Just use the following code instead:</p>
		
		<code class="bp_snippet">&lt;link href="http://blastpad.co/ui/asset/css/?mode=extra" rel="stylesheet" type="text/css" /&gt;</code>
		
		<h3 class="bp_center_justify">Namespaced classes</h3>
		
		<p>Apart from the default styles, most BlastPad UI classes are prefixed with "bp_" so they don't conflict with other CSS styles.</p>
		
		<p>If you just want to use the default styling without the extras, add the following code instead:</p>
		
		<code class="bp_snippet">&lt;link href="http://blastpad.co/ui/asset/css/?mode=default" rel="stylesheet" type="text/css" /&gt;</code>
		
		<h3 class="bp_center_justify">Minimal</h3>
		
		<p>You can also just pick and choose which modules you want to use.</p>
		
		<p>The modules are in the <code>blastpad_ui\asset\module\css</code> directory.</p>

	
	<p>&nbsp;</p>
		<!--h3 class="bp_center_justify">The Modules</h3-->
		
		<!--span class="bp_square bp_small bp_blue">Form</span-->
	
	
		
		<p class="bp_large_break"></p>
		<p class="bp_big_text bp_right_justify">That's it!</p>
		</div>
	</section>
</main>