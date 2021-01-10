<?php
add_action("admin_menu", "contacto_menu");

function contacto_menu(){
    add_menu_page("Formulario Contacto", "Contacto", "manage_options","form_menu", "contacto_admin", "dashicons-feedback", 75);
}

function contacto_admin(){
    global $wpdb;
    $table_contacto = $wpdb->prefix . 'form_contacto';
    echo '<div class="wrap"><h1>Lista de Contactos</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Nombre</th><th>Correo</th><th>Telefono</th><th>Pais</th><th>Empresa</th><th>Industria</th><th>Mensaje</th><th>Fecha de Registro</th></tr></thead>';
    echo '<tbody id="the-list">';
    $result = $wpdb->get_results("SELECT * FROM $table_contacto");
    foreach ( $result as $user ) {
        $name = esc_textarea($user->name);
        $email = esc_textarea($user->email);
        $phone = esc_textarea($user->phone);
        $country = esc_textarea($user->country);
        $enterprise = esc_textarea($user->enterprise);
        $industry = esc_textarea($user->industry);
        $message = esc_textarea($user->message);
        $creationDate = esc_textarea($user->creationDate);
        echo "<tr><td>$name</td><td>$email</td><td>$phone</td><td>$country</td><td>$enterprise</td><td>$industry</td><td>$message</td><td>$creationDate</td></tr>";
    }
    echo '</tbody></table></div>';
}
