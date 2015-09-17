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

  
<section class="secciones full clearfix">

<?php if( have_rows('cat_secciones') ): ?>

		<?php while( have_rows('cat_secciones') ): the_row(); 
			// vars
			
			$titulo = get_sub_field('cat_titulo_seccion');
			$descrip = get_sub_field('cat_contenido');
			$image = get_sub_field('cat_imagen_seccion');
			$enlace = get_sub_field('cat_enlace');
			
			?>

			<div class="apartado column third">

				<div class="borde_redondo">
			 

					<?php if( $image ): ?>
						<div class="apartado_image">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					<?php endif; ?>

					<?php if( $titulo ): ?>
						<h3><?php echo $titulo; ?></h3>
					<?php endif; ?>

					<?php if( $descrip ): ?>
						<p><?php echo $descrip; ?></p>
					<?php endif; ?>

					<?php if( $enlace ): ?>
						<a class="btn__seccion borde_redondo" href="<?php echo $enlace;?>"><?php _e( 'Leer más', 'byadr' ); ?></a>
						 
				 

					<?php endif; ?>
				 
				</div>
			</div>			  

		<?php endwhile;?>
 
	<?php endif; ?>

 
	 
</section>

<?php get_footer(); ?>

