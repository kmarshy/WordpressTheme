<?php get_header(); ?>
	
	<!-- main content for the home page -->
	<div class="container">
	
	    <!-- Easing Slider pugin on index page -->
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 50 ); } ?>

			 <div class="panel panel-default panel-body">
				<div class="row">	 
						<div class="col-md-10">

						<!-- displays the latest 3 posts -->
						<?php 
							query_posts('posts_per_page=3');
								while(have_posts()) : the_post();?>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y') ?></p>

						        <?php endwhile; wp_reset_query(); ?>


						 </div> 
				</div>		       
			</div>
	</div>			

<?php get_footer();?>