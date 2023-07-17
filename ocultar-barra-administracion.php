<?php
/*
Plugin Name: Ocultar Barra de Administración
Description: Este plugin oculta la barra de administración en el front-end.
*/

// Función para ocultar la barra de administración
function ocultar_barra_administracion() {
  show_admin_bar(false);
}
add_action('after_setup_theme', 'ocultar_barra_administracion');
