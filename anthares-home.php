<?php
/**
 * Plugin Name: Anthares Home
 * Description: Home modular do Universo Anthares via shortcode [anthares_home]. Seções carregadas sob demanda, poster otimizado com fallback progressivo para vídeo em loop.
 * Version: 0.2.0
 * Author: Anthares
 * Text Domain: anthares-home
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // acesso direto bloqueado
}

define( 'ANTH_HOME_VERSION', '0.2.0' );
define( 'ANTH_HOME_PATH', plugin_dir_path( __FILE__ ) );
define( 'ANTH_HOME_URL', plugin_dir_url( __FILE__ ) );

require_once ANTH_HOME_PATH . 'includes/class-anthares-content.php';
require_once ANTH_HOME_PATH . 'includes/class-anthares-home.php';

Anthares_Home::instance();
