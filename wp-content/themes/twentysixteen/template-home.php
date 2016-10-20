<?php
/**
 * Template Name: Slider Home
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
<div id="carousel-paginas" class="carousel slide" data-ride="carousel" style="height:100%;"> 

  <ol class="carousel-indicators">
  	<?php 
  		foreach ($childs_pages as $key => $pagina) {

  			if ($pagina->ID == $id) {
  	?>
  				<li data-target="#carousel-paginas" data-slide-to="<?=$key?>" class="active"></li>
  	<?php
  			}else{
	?>
				<li data-target="#carousel-paginas" data-slide-to="<?=$key?>"></li>
	<?php
  			}
  		}
  	?>
  </ol>
  <div class="carousel-inner" role="listbox" style="height:100%;">

  	<?php
  		foreach ($childs_pages as $key => $pagina) {
  			$img_fondo = wp_get_attachment_url( get_post_thumbnail_id($childs_pages[$key]->ID));
  	?>
  		<div class="carousel-item <?php if ($id==$pagina->ID) echo 'active'; else echo ''; ?>" style="height:100%;">
    		<div class="contenedor-img-fluid-home" style="background-image:url(<?=$img_fondo?>);">
    			<div class="col-xs-12 box-slider text-xs-center">
    				<div><?=$pagina->post_content?></div>
    			</div>
    		</div>
    	</div>
  	<?php

  		}
  	?>    
  </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
