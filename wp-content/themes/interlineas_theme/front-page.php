<?php get_header(); ?>


<?php /*  Hero
______________________________________________________ */
?>


<?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full'); ?>
	
<section class="hero" style="background-image: url(<?php if(has_post_thumbnail() ) { echo $thumb[0]; } else{header_image();}?> );">
	<div class="claim">
		<h2><?php the_field('claim_titulo'); ?></h2>
		<h1><?php the_field('claim_seo'); ?></h1>


		<?php if( have_rows('claim_cta') ): ?>

		<?php while( have_rows('claim_cta') ): the_row(); 

			
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

 
<?php /*  Contenido
______________________________________________________ */
?>

<article class="wrapper">
	<div class="main__home">		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							 
			<?php the_content(); ?> <!-- Muestra el contenido del post -->
					 			
		<?php endwhile; else : ?>
			<?php _e( 'Sorry, no posts matched your criteria.', 'byadr' ); ?>

		<?php endif; ?>

	</div>	

</article>


<?php /*  Categorias
______________________________________________________*/
?>

<?php
$args = array( 
	'post_type' => 'categorias', 
	'posts_per_page' => 6,
	 );

$loop = new WP_Query( $args );

?>

<?php if( $loop->have_posts() ) : ?> 

	<section class="borde full clearfix">

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
 
 <?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'full');  ?>
<div class="descripcion column half"  >
	<a href="<?php the_permalink() ?>">
		<div class="thumb" style="background-image: url(<?php if(has_post_thumbnail() ) { echo $bg[0]; } else{header_image();}?> );">
			<h4><?php the_title(); ?></h4>
			<p><?php the_content(); ?></p>
		</div>
	</a>
</div>
 
	<?php endwhile; ?>

	</section>
<?php endif; ?>


<?php get_footer(); ?>
