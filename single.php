<?php get_header(); ?>

		<div class="container">
			<!-- to display the full content of the post -->
			 <div class="panel panel-default panel-body">
			 	<?php while(have_posts()): the_post();?>
			 		<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			 		<p><?php the_content(''); ?></p>
			 		<p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y'); ?></p>

			 	<?php endwhile; wp_reset_query();?>	
			 </div>
		</div>	 
<?php get_footer(); ?>