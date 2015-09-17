 <?php get_header(); ?>

<?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full'); ?>
	
<section class="hero" style="background-image: url(<?php if(has_post_thumbnail() ) { echo $thumb[0]; } else{header_image();}?> );">
	<div class="claim">
		<h2><?php the_field('claim_titulo'); ?></h2>
		<h1><?php the_field('claim_seo'); ?></h1>

<?php if( have_rows('claim_cta') ): ?>

	<?php while( have_rows('claim_cta') ): the_row(); 

		// vars
		
		$texto = get_sub_field('claim_texto');
		$pagina = get_sub_field('claim_pagina');
		$tel = get_sub_field('claim_tel');
		$link = get_sub_field('claim_link');
		
		?>

		<div class="btn">

			<?php if( $link ): ?>
				<a href="<?php echo $link;?>"><?php echo $texto; ?></a>

			<?php elseif( $pagina ): ?>
				<a href="<?php echo $pagina;?>"><?php echo $texto; ?></a>

			<?php elseif( $tel ): ?>
				<a href="<?php echo 'tel:' . $tel;?>"><?php echo $texto; ?></a>
			<?php elseif( $tel ): ?>
				<a></a>

			<?php endif; ?>
		
		</div>			 
			 
	<?php endwhile;?>
 
<?php endif; ?>

 	</div>
</section>

<section class="main wrapper clearfix">

		 		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post">
					 	<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <!-- Muestra el título del post --></h2>					
						<p><?php the_excerpt(); ?></p>
						<a href="<?php echo get_permalink(); ?>"> Read More...</a>
					</div>

			<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			
				<?php endif; ?>

			<?php posts_nav_link(); ?>


		 

	 

</section>

 

<?php get_footer('blog'); ?>

