<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package SimClick
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
				else {
					$image = '';

					// Get the first image in page, returns false if there is no image.
					$first_image = simclick_get_first_image( $post->ID, 'post-thumbnail', '' );

					// Set value of image as first image if there is an image present in the page.
					if ( $first_image ) {
						$image = $first_image;
					}

					echo $image;
				}
				?>
			</a>
		</div>

		<div class="entry-container">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>

				<div class="entry-meta">
					<?php simclick_entry_category();
					simclick_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header>

			<?php
				$excerpt = get_the_excerpt();
				echo '<div class="entry-summary"><p>' . $excerpt . '</p></div><!-- .entry-summary -->';
			?>
		</div><!-- .entry-container -->
	</div> <!-- .hentry-inner -->
</article>
