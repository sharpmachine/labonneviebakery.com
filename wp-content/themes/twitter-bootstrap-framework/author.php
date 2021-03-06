<?php get_header(); ?>

		<section id="page" class="span8">


<?php
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'smm' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

<?php
// If a user has filled out their description, show a bio on their entries.
if ( get_the_author_meta( 'description' ) ) : ?>
				<div id="entry-author-info">
					<div id="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'smm_author_bio_avatar_size', 60 ) ); ?>
					</div><!-- #author-avatar -->
					<div id="author-description">
						<h2><?php printf( __( 'About %s', 'smm' ), get_the_author() ); ?></h2>
						<?php the_author_meta( 'description' ); ?>
					</div><!-- #author-description	-->
				</div><!-- #entry-author-info -->
<?php endif; ?>

<?php
	rewind_posts();
	 get_template_part( 'loop', 'author' );
?>
		</section><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
