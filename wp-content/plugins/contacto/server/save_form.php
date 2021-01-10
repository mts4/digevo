<?php
//include 'config.php';
$path = preg_replace('/wp-content.*$/', '', __DIR__);
include($path . 'wp-load.php');
global $wpdb;
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$pais = filter_var($_POST['pais'], FILTER_SANITIZE_STRING);
$empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
$industria = filter_var($_POST['industria'], FILTER_SANITIZE_STRING);
$mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
$datenow = date('Y-m-d H:i:s');


if (!empty($name) && !empty($email) && !empty($phone) && !empty($pais) && !empty($industria)) {
    $result = $wpdb->insert('wp_form_contacto', array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'country' => $pais,
        'enterprise' => $empresa,
        'industry' => $industria,
        'message' => $mensaje,
        'creationDate' => $datenow,
    ));
    if ($result == true) {
        echo '{"success": true}';
    } else {
        echo '{"success": false}';
    }
} else {
    echo '{"success": false}';
}
