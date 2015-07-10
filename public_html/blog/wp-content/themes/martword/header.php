<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_enqueue_script('jquery'); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>
<div id="wrapper">

	<?php lw_header_image(); ?>

	<div id="header">
		
		<nav>
			<ul class="lstNav">
				<?=lw_homebtn(__('Home','lightword'))?>	
				<?=wp_list_categories('title_li=')?>
				<?=lw_wp_list_pages()?>
			</ul>
		</nav>

		<div id="top_bar">
			<?php echo lw_searchbox(); ?>
		</div>

	</div>
	<div id="content">
