<?php get_header(); ?>

 

<section class="main wrapper clearfix">

		 		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post">
					 	<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <!-- Muestra el título del post --></h2>					
						<p><?php the_content(); ?></p>
						 
					</div>

			<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			
				<?php endif; ?>

			<?php posts_nav_link(); ?>


		 

	 

</section>

 

<?php get_footer('blog'); ?>

