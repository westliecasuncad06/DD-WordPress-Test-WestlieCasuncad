<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kiddies
 */

global $post;
$kiddies_page_layout = esc_html( get_post_meta( $post->ID, 'kiddies_page_layout', true ) ); 
if (empty($kiddies_page_layout)) {
    $kiddies_page_layout = 'layout-1';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($kiddies_page_layout == "layout-1") { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title entry-title-large">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php kiddies_post_thumbnail(); ?>
	<?php } ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kiddies' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'kiddies' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
