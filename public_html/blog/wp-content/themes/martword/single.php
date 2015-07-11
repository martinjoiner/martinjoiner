<?php get_header(); ?>
<div id="content-body">

	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?> id="post-<?php the_ID(); ?>">

			<div class="postContent">
				<?php lw_simple_date(); ?>

				<h2 class="postTitle"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php the_content(''); ?>
				<?php if(function_exists('wp_print')) { print_link(); } ?>

				<?php wp_link_pages('before=<div class="nav_link">'.__('PAGES','lightword').': &after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>

				<?php if ($lw_enjoy_post == "true" && is_attachment() != TRUE) : ?>
					<div class="promote clear">
						<h3><?php _e('Enjoy this article?','lightword'); ?></h3>
						<p><a href="<?php bloginfo('rss2_url'); ?>"><?php  _e('Consider subscribing to our rss feed!','lightword'); ?></a></p>
					</div>
				<?php endif; ?>

				<?php if ($lw_post_author == "Single page" || $lw_post_author == "Both" && is_attachment() != TRUE) : ?>
					<div class="about_author clear">
						<span class="alignleft"><?php echo get_avatar( get_the_author_id(), '28' );   ?></span>
						<div class="alignleft" style="width:470px;">
							<h4><?php _e('About','lightword'); ?> <a href="<?php the_author_url(); ?> "><?php the_author(); ?></a></h4>
							<?php the_author_description(); if(!get_the_author_description()) _e('No description. Please complete your profile.','lightword'); ?></div>
							<div class="clear"></div>
					</div>
				<?php endif; ?>

				<div class="cat_tags clear">
					<span class="category">
						<?php _e('Filed under:','lightword'); 
						echo " ";
						the_category(', ');
						?>
					</span>
					
					<?php
					if( get_the_tags() ){ 
						echo '<span class="tags">';
						_e('Tagged as:','lightword'); 
						echo " "; 
						the_tags('','',''); 
						echo '</span>';
					} 
					?>
					<div class="clear"></div>
				</div>

				<div class="cat_tags_close"></div>

				<?php comments_template(); ?>

				<div class="next_previous_links">
					<span class="alignleft"><?php next_post('&laquo; %','', 'yes'); ?></span>
					<span class="alignright"><?php previous_post('% &raquo;','', 'yes'); ?></span>
					<div class="clear"></div>
				</div>

			</div><!-- /.postContent -->

		</div><!-- /#post-xxx -->

	<?php endwhile; else: ?>

		<h2><?php _e('Not Found','lightword'); ?></h2>
		<p><?php  _e("Sorry, but you are looking for something that isn't here.","lightword"); ?></p>

	<?php endif; ?>

</div><!-- /#content-body -->

<?php get_footer(); ?>
