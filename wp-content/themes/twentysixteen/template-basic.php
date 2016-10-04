<?php
/**
 * Template Name: Basico
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

get_header();


$id = get_the_ID();
$post = get_post($id);
$img_fondo = wp_get_attachment_url( get_post_thumbnail_id($id));
$childs_pages = get_pages(array("child_of" => $post->post_parent));
?>

<div class="contenedor-img-fluid" style="position:absolute;top:0;left:0;background-image:url(<?=$img_fondo?>);">
	<div class="m-x-3 box-basic texto-negro-xs">
		<?=$post->post_content?>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
