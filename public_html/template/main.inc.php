<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<meta property="og:site_name" content="Martin Joiner" /> 
	<meta property="og:url" content="http://martinjoiner.co.uk/" /> 
	<meta property="og:title" content="Martin Joiner" /> 
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Martin Joiner is a highly creative full-stack web developer with a specialism in front-end. Based in Bristol, UK."/>
	<meta property="og:image" content="http://martinjoiner.co.uk/images/MartinSketch.jpg" />
	<meta property="fb:admins" content="511938722" /> 


	<title><?php
	if( isSet( $templateConfig["title"] ) ){
		print $templateConfig["title"] . ' - ';
	}
	?>Martin Joiner</title>

	<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	
	<!-- injector:css -->
	<link rel="stylesheet" href="/css/aa17ff68.style.min.css">
	<!-- endinjector -->

	<?php
	if( isSet( $templateConfig["css"] ) ){
		print $templateConfig["css"];
	}
	?>

	<?php
	if( isSet( $templateConfig["head"] ) ){
		include( $_SERVER['DOCUMENT_ROOT'] . $templateConfig["head"] );;
	}
	?>

</head>
<body>

	<nav id="header">
		<a href="/">Home</a>
		<a href="/cv/">CV</a>
		<a href="/portfolio/">Portfolio</a>
		<a href="/blog/" target="_blank" title="Open blog in a new window">Blog</a>
	</nav><!-- Close <div id="header"> -->

	<div class="headerSpace"></div>

	<div class="container">
	    <div class="masterwrapper">

        	<div id="wrapbody">

				<?php if( isSet( $templateConfig["content"] ) ){
					include( $_SERVER["DOCUMENT_ROOT"] . $templateConfig["content"] );
				} ?>

	        </div> <!-- Close wrapbody --> 
	    </div> <!-- Close masterwrapper -->

	</div> <!-- Close container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>

	<!-- injector:js -->
	<script src="/js/b932056b.martinjoiner.min.js"></script>
	<!-- endinjector -->

	<?php if( isSet( $templateConfig["js"] ) ){
		print $templateConfig["js"];
	} ?>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-15400129-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>

</body>
</html>
