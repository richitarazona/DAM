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
define('DB_NAME', 'datos1');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'alumno');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'alumno');

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
define('AUTH_KEY', 'DcbwcN(p[%bgRb.!12VvvW#HcUt).XD2j?Gsv0cKC}l#^3mELN0<Y^2Ffw$K UtB');
define('SECURE_AUTH_KEY', 'y>i(o}(v22J[+N%A-]%)]k=nFjO5(g{kKWKSt? yUN0O)a[dbZioxacR9V!w&@U}');
define('LOGGED_IN_KEY', 'Ak b39MCv3da`..NdU#S4QE?nCyOqVk.SmG50U.~BGup:oZGJLu|[gmn`1&(,Zxg');
define('NONCE_KEY', 'Fo^RAx|DReI1v`gRz23 ^C.#0n~[ iew~c|4H:i_P{Sq-2Cm1_u5IEVNkisK1[ZC');
define('AUTH_SALT', 'fjq0DDel2rVCTaE:^kw=wEaj$b86T`_W0>)H}W4=}6CVe.v1ylDK@cEsPuE-)ihF');
define('SECURE_AUTH_SALT', 'ICK5gdFg{U;(O],wyC/p~ w%y(Fz.]]=UaY>4jcuk.,*`L+j{1y4WK=xkZ!P+s*?');
define('LOGGED_IN_SALT', 'o@m4eeus.3~V3,4Fg?D^<.},TizU{23PZsFMB2:3[y~1IlD[nf/V!)V0%P+6=kFi');
define('NONCE_SALT', '6dr:_,VP_U?3TUOv$bM`.xFf0}4?8iiK+f@20K$Y6W%&v.DuD TS/>b_^!osq3 v');

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

