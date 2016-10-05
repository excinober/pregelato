<?php
/**
 * Template Name: Home
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container-fluid m-a-0 text-xs-center contenedor-img-fluid" style="background-image:url(img/fondo-home.png);">

	<h1 class="display-2 text-xs-center text-blanco titulo-home">MÁQUINAS DE HELADO SUAVE</h1>
	<button class="btn btn-primary p-x-3 p-y-1 m-t-2" id="solicitar-cotizacion"><h4 style="font-family: GillSansStd;">SOLICITAR COTIZACIÓN<h4></button>
	

<!--<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">-->
		<?php
		// Start the loop.
		/*while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;*/
		?>

	<!--</main>--><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

<!--</div>--><!-- .content-area -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
