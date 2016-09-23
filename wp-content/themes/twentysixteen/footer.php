<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php
if (isset($_POST["submitContact"])) {
	
	$to = "ebenitesg@gmail.com";
	$subject = "Contácto Pregelato";

	$message = '
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>
	<body>
	<p>
	Nombre: '.$_POST["nombre"].'
	Empresa: '.$_POST["empresa"].'
	Email: '.$_POST["email"].'
	Teléfono: '.$_POST["telefono"].'
	Asunto: '.$_POST["asunto"].'
	</p>
	</body>
	</html>';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: Pregelato<no-reply@pregelato.com>' . "\r\n";	

	if(mail($to,$subject,$message,$headers)){
		echo "<script> alert('Hemos recibido tu mensaje!'); </script>";
	}else{
		echo "<script> alert('No fue posible recibir tu mensaje. Por favor intenta de nuevo o llámanos'); </script>";
	}
}
?>

		</div><!-- .site-content -->

		<footer class="container-fluid p-a-2" style="position:absolute;bottom:0;width:100%;background-color:#1D70B7;z-index:999;">
			<div class="container" id="box-form-contact" style="display:none;">				
				<div class="col-xs-12 col-md-4 offset-md-4">
					<a href="#" class="pull-xs-right text-blanco" id="close-form-contact">Cerrar X</a>
					<form id="form-contact" method="post" class="m-y-1">
						<div class="form-group m-a-0">
						    <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
						</div>
						<div class="form-group m-a-0">					 
						    <input type="text" name="empresa" class="form-control" id="formGroupExampleInput" placeholder="Empresa">
						</div>
						<div class="form-group m-a-0">
						    <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
						</div>
						<div class="form-group m-a-0">
						    <input type="text" name="telefono" class="form-control" id="formGroupExampleInput" placeholder="Teléfono">
						</div>
						<div class="form-group m-a-0">
						    <textarea name="asunto" name="asunto" placeholder="Asunto" class="form-control"></textarea>
						</div>
						<input type="hidden" name="submitContact" value="1">
					</form>
				</div>
			</div>
			<div class="container">
				<div class="col-xs-12 col-md-4">
					<p class="text-blanco text-xs-center m-a-0">info@pregelato.com</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<center>
						<button class="btn btn-sm btn-primary" id="contacto">CONTACTO</button>
						<button class="btn btn-sm btn-primary" id="submit-form-contact" style="display:none;">ENVIAR</button>
					</center>
				</div>
				<div class="col-xs-12 col-md-4">
					<p class="text-blanco text-xs-center m-a-0">(57+2) 3333333</p>
				</div>
			</div>
		</footer>

		<!--<footer id="colophon" class="site-footer" role="contentinfo" style="position:absolute;bottom:0;">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav>
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav>
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div>--><!-- .site-info -->
		<!--</footer>--><!-- .site-footer -->
	<!--</div>--><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?=bloginfo('siteurl')?>/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	function openContact(){
		$("#box-form-contact").css("display","block");
		$("#contacto").css("display","none");
		$("#submit-form-contact").css("display","block");			
	}

	function closeContact(){
		$("#box-form-contact").css("display","none");
		$("#submit-form-contact").css("display","none");
		$("#contacto").css("display","block");
	}

	$(function(){

		$("#solicitar-cotizacion").click(function(){
			openContact();
		})

		$("#contacto").click(function(){
			openContact();
		})

		$("#close-form-contact").click(function(){
			closeContact();					
		})

		$("#submit-form-contact").click(function(){
			var nombre = $("input[name|='nombre']").val();
			var empresa = $("input[name|='empresa']").val();
			var email = $("input[name|='email']").val();
			var telefono = $("input[name|='telefono']").val();
			var asunto = $("textarea[name|='asunto']").val();

			if (nombre == '') {
				alert("Por favor ingrese su nombre");
			}else if (email == '') {
				alert("Por favor ingrese su email");
			}else if (telefono == '') {
				alert("Por favor ingrese su número de teléfono");
			}else if (asunto == '') {
				alert("Por favor llene el asunto");
			}else{
				$("#form-contact").submit();
			}			
		})
	})
</script>
</body>
</html>
