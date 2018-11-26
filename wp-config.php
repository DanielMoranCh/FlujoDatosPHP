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
define('DB_NAME', 'shurre_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'dimofra9');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '*damf12345*');

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
define('AUTH_KEY', 'x[+MFr<_[ajx{$sx$@#WX3fup~#RP%*%N__bU{/MfT^w&Wm!Pc;M_`[Mz4a:Zw>y');
define('SECURE_AUTH_KEY', ',xuq]6FBu4%#K4quPOJ.4Q=>kV8d{K|+t9hO`q-{VP+*z-8,Zq1-%AVmH{%%cH[N');
define('LOGGED_IN_KEY', 'Uk/|o)[YQ2<9v}/q ?W)2bt&tbd/[G/~@)QD~o}fHp%P0Ubitk#;K3UIxyXz$7<j');
define('NONCE_KEY', '3$ZF9BhVY$H9)>Q4l=|oFa{.N@W0_ipvdkza,P{ggG9;tW2)I`G=8Sk$_SV YO0Y');
define('AUTH_SALT', 'Ez{VVtZTo2tc0WE+}_}WZ/I2~3@@eW{ $Id)La[`P*c,RHD2DbI`o&V!C*$b&WLy');
define('SECURE_AUTH_SALT', 'Q0=mkKmSXgrDQMyN17u)bQ(O;V0r*U<cx?B-7=2?Dt&M<8fV:*^JR:o<]e`N`9mM');
define('LOGGED_IN_SALT', 'lj%D&SCd}9iVG>:D+$q~F`&#d>x^*F4*#)$<NA2IA(.[dECt/5?Fl~p@pK)35Nk(');
define('NONCE_SALT', '{_b^:Sm{ZYecDDD_!%N`;V#-]hcZH;z[u/[O]@| A&aBzC|3]>&7 ,-l*($ld!.L');

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

