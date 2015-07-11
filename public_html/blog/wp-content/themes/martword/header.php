<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="msapplication-TitleColor" content="#002F4C">
	<meta name="theme-color" content="#002F4C">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_enqueue_script('jquery'); ?>
	<?php 
	if ( is_singular() ){
		wp_enqueue_script( 'comment-reply' );
		?>
		<meta property="og:site_name" content="<?php bloginfo('name')?>" /> 
		<meta property="og:url" content="<?=get_permalink()?>" /> 
		<meta property="og:title" content="<?=trim(wp_title('', false))?>" /> 
		<meta property="og:type" content="website" />
		<?php
		if( get_the_excerpt() != '' ){
			$strContent = get_the_excerpt();
		} else {
			// No excerpt so use the first paragraph
			the_post();
			$strContent = wp_strip_all_tags( get_the_content() );
			$strContent = preg_replace( '/\n.*/', '', $strContent );
		}
		?><meta property="og:description" content="<?=$strContent?>"/>
		<?php 
		if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { 
			$thumbTag = get_the_post_thumbnail();
			$thumbTag = preg_replace( '/<img/', '<meta property="og:image"', $thumbTag ); 
			$thumbTag = preg_replace( '/ src=/', ' content=', $thumbTag ); 
			$thumbTag = preg_replace( '/ class="[^"]*"/', '', $thumbTag ); 
			$thumbTag = preg_replace( '/ alt="[^"]*"/', '', $thumbTag ); 
			$thumbTag = preg_replace( '/ width="[^"]*"/', '', $thumbTag ); 
			$thumbTag = preg_replace( '/ height="[^"]*"/', '', $thumbTag ); 
			echo $thumbTag;
		} 
		?>

		<meta property="fb:admins" content="511938722" />

		<?php
	} 
	?>
	<?php wp_head(); ?>

</head>
<body>
<div id="wrapper">

	<?php lw_header_image(); ?>

	<div id="header">
		
		<nav>
			<ul class="lstNav">
				<?=lw_homebtn(__('Home','lightword'))?>	
				<?=wp_list_categories(array(  'odererby' => 'count',
											  'order' => 'DESC',
											  'title_li' => null
											))?>
				<?=lw_wp_list_pages()?>
			</ul>
		</nav>

		<div id="top_bar">
			<?php echo lw_searchbox(); ?>
		</div>

	</div>
	<div id="content">
