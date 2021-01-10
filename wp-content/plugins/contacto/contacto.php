<?php
/*
Plugin Name: Formulario de Contacto
Description: Plugin para el sitio Digevo
Author: Alexander Matias Urrutia Salazar
* shortcode [form_contacto]
*/
add_shortcode('form_contacto', 'template_form');
include 'templates/create_table.php';
include 'templates/layout_form.php';
include 'templates/admin_menu.php';