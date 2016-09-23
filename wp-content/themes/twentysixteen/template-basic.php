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
/*var_dump($childs_pages[0]->ID);
exit();*/
?>

<div style="position:absolute;top:0;left:0;width:100%;height:100%;background-image:url(<?=$img_fondo?>);background-repeat:no-repeat;background-size:100% 100%;">
	<div class="m-x-3" style="font-size:1.3rem;line-height:1.5rem;margin-top:12%;">
		<?=$post->post_content?>
	</div>  
</div>
<!--<div class="container-fluid m-a-0 text-xs-center" style="position:relative;top:0;bottom:0;width:100%;height:100%;background-image:url(<?=$img_fondo?>);background-repeat:no-repeat;background-size:100% 100%;">-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
