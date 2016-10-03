<?php
/**
 * Template Name: Slider
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
    		<div style="width:100%;height:100%;background-image:url(<?=$img_fondo?>);background-repeat:no-repeat;background-size:100% 100%;">
    			<div class="col-xs-12 col-md-6 box-slider">
    				<h1 class="display-3"><?=$pagina->post_title?></h1>
    				<p class="text-slider"><?=$pagina->post_content?></p>
    			</div>
    		</div>
    	</div>
  	<?php

  		}
  	?>
    <!--<div class="carousel-item">
      <img src="<?=$img_fondo?>">
    </div>
    <div class="carousel-item">
      <img src="<?=$img_fondo?>">
    </div>-->
  </div>
  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>


<!--<div class="container-fluid m-a-0 text-xs-center" style="position:relative;top:0;bottom:0;width:100%;height:100%;background-image:url(<?=$img_fondo?>);background-repeat:no-repeat;background-size:100% 100%;">-->
<?php 


?>

<!--</div>-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
