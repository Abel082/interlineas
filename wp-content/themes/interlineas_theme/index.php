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


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					 
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <!-- Muestra el título del post --></h2>
						<p><?php the_content(); ?> <!-- Muestra el contenido del post --></p>
						<p><?php the_time('F j, Y'); ?> <!-- Muestra la fecha --></p>
						<p><?php the_author() ?> <!-- Muestra el nombre del autor --></p>
						<p><?php the_tags( 'Tags: ', ', ', '<br />' ); ?>  <!-- Muestra las etiquetas (tags)  --></p>
						<p><?php the_category(', ') ?> <!-- Muestra las categorías --></p>
						<p><?php edit_post_link(); ?> <!-- Enlace para editar el post, que solo verán los usuarios con permisos de editor.--></p>
						<p><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?> <!-- Mostrará el enlace a los comentarios, indicando cuantos hay. No sale por defecto en página o post simple.--></p>
						 
					 

		<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		
			<?php endif; ?>













 
	

<?php get_footer(); ?>

