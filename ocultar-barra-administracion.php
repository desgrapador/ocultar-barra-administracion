<?php
/*
Plugin Name: Ocultar Barra de Administración
Plugin URI: https://martinenrique.com/ocultar-barra-administracion/
Description: Este plugin oculta la barra de administración en el front-end.
Version: 1.0
Author: Martín Enrique
Author URI: https://martinenrique.com
License: GPL2
*/

// Función para ocultar la barra de administración
function ocultar_barra_administracion() {
  show_admin_bar(false);
}
add_action('after_setup_theme', 'ocultar_barra_administracion');
