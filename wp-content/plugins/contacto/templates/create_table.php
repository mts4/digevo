<?php
register_activation_hook(__FILE__, 'create_table_form');
function create_table_form()
{
    global $wpdb;
    $table_contacto = $wpdb->prefix . 'form_contacto';
    $charset_collate = $wpdb->get_charset_collate();

    $query = "CREATE TABLE IF NOT EXISTS $table_contacto(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(40) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(12) NOT NULL,
        country varchar(30) NOT NULL,
        enterprise varchar(40),
        industry varchar(30) NOT NULL,
        message varchar(1000),
        creationDate datetime NOT NULL,
        UNIQUE (id)
    ) $charset_collate";
    include_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($query);
}