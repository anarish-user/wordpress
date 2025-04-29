<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title">
			<?php
			/* translators: Search query. */
			printf( __( 'Search Results for: %s', 'chro' ), '<span>' . get_search_query() . '</span>' );
			?>
			</h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'chro' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End the loop.

			the_posts_pagination(
				array(
					/* translators: Hidden accessibility text. */
					'prev_text'          => chro_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'chro' ) . '</span>',
					/* translators: Hidden accessibility text. */
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'chro' ) . '</span>' . chro_get_svg( array( 'icon' => 'arrow-right' ) ),
					/* translators: Hidden accessibility text. */
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'chro' ) . ' </span>',
				)
			);

		else :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'chro' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
