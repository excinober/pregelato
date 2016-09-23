<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pregelato');
//define('DB_NAME', 'linkgm_pregelato');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');
//define('DB_USER', 'linkgm_excinober');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');
//define('DB_PASSWORD', ';,v3?3Od@f7p');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ojLc_e0;L#Sf(g-Ba*J,;djpgH]Y8wb#aoVrB:~~)^{F8&<vq:,B$H$q~e6G=yHN');
define('SECURE_AUTH_KEY', '#2&*J^*/4|SD gri9ec7$FlH9:pNe8V@4aQ=rc)?E,U3olk),k%IJ=dz*No37pU6');
define('LOGGED_IN_KEY', 'i=d*^7ue,+VK,m9V-q=U!X-P0enNDBh&9ayeIZO)<5h7IZ5]8KcSG{?jn~.ZHkAT');
define('NONCE_KEY', '/J{ $38Q8DwOP/8l4QUy(Y&F&h HD&H#uyy=xV t#8VDrY[|k]dr27l-e(4x4To=');
define('AUTH_SALT', 'mS:FnC_)>1wc2:MHG,d%S@D8t_S6_i}_Awa;vf%+|hdi Ls_,T[Gs4YuB,NA%W#P');
define('SECURE_AUTH_SALT', '1sV{E))m<w}!aD^ Rb1;1.6b:*=4I1f0[99M[j;k{{S((cJ{iJT3;~&k~+8h)/;I');
define('LOGGED_IN_SALT', 'UZ U0I@X<s!+1?4q(p4~GmL,23cKhjs954?[kl8PzPBXT `yIa#Sw{D!nF,Ztw4@');
define('NONCE_SALT', 'YY^ejW,g*foc7|xe%5:m|aB1.VFr1fno[|Y`SQXBP(tC[^w{b9gQoF@Gi,M%R[th');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

