<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package News_Box
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
	$news_box_grid_number = 9 ;
}else{
	$news_box_grid_number = 12 ;
}

get_header();

 $news_box_lite_view_set = get_theme_mod( 'view_set','grid' );
 $newsbox__container = get_theme_mod( 'newsbox__container', 'container' );
?>
<div class="<?php echo esc_attr($newsbox__container); ?>">
	<div class="row">
		<div class="col-lg-<?php echo esc_attr( $news_box_grid_number ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// loop for grid
				if( $news_box_lite_view_set == 'grid' && !is_single()):
				?>
				<!-- <div class="row"> -->
					<div class="card-columns">
					<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'grid' );

			endwhile;
					?>
					</div>
				<!-- </div> -->
				<?php
			else: //loop for others

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						
					endwhile;
			endif;


			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

				</main><!-- #main -->
			</div><!-- #primary -->	
		</div>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
		<div class="col-lg-3">
			<div class="news-box-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
</div>

<?php
get_footer();
