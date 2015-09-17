
		<footer>

			<section class="destacado full clearflix">
				<h3><?php _e( 'Ponte en contacto con nosostros', 'byadr' ); ?></h3>
				<a class="btn__contacto" href=""><?php _e( '¿A qué esperas?', 'byadr' ); ?></a>
			</section>

		


			<section >
			 	<ul class="cualidades">  
					<?php dynamic_sidebar('tres_col'); ?> 
				</ul>
			</section>

		

			<section class="pie">
				 
					<nav class="footer_menu"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></nav>
				 
			</section>

		</footer>
		 
		<?php wp_footer(); ?>

	</body>
</html>
