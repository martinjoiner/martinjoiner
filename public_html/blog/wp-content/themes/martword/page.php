<?php get_header(); ?>
<div id="content-body">

	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<div <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?> id="post-<?php the_ID(); ?>">

		<div class="postContent">

			<h1 class="postTitle"><?php the_title(); ?></h1>

			<?php the_content(''); ?>
			<?php if(function_exists('wp_print')) { print_link(); } ?>
			<?php wp_link_pages('before=<div class="nav_link">'.__('PAGES','lightword').': &after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>

			<?php if ( comments_open() && $lw_disable_comments == "false" ) : comments_template(); endif; ?>

		</div><!-- /.postContent -->

	</div>
	<?php endwhile; else: ?>

		<h2><?php _e('Not Found','lightword'); ?></h2>
		<p><?php  _e("Sorry, but you are looking for something that isn't here.","lightword"); ?></p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
