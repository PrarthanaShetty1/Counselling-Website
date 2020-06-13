<?php
/**
 * The template for displaying services posts on the front page
 *
 * @package SimClick
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php

				// Default value if there is no first image
				$image = '';

				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'simclick-testimonial' );
				} else {
					echo simclick_get_no_thumb_image( 'simclick-testimonial' );
				}
				?>
			</a>
		</div>

		<div class="entry-container">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>
			</header>

			<?php
				$excerpt = get_the_excerpt();
				echo '<div class="entry-summary"><p>' . $excerpt . '</p></div><!-- .entry-summary -->';
			?>
		</div><!-- .entry-container -->
	</div> <!-- .hentry-inner -->
</article> <!-- .article -->
