<?php

//dummy_user_id
session_start();

//Include required PHPMailer files
require $path_prefix . 'libraries/phpmailer/PHPMailer.php';
require $path_prefix . 'libraries/phpmailer/SMTP.php';
require $path_prefix . 'libraries/phpmailer/Exception.php';


//Assign fund id 
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = 0;
}

//Assign fund id 
if (isset($_SESSION['fund_id'])) {
    $fund_id = $_SESSION['fund_id'];
} else {
    $fund_id = 0;
}

//Assign acces level value

if (isset($_SESSION['access_level_id'])) {
    $access_level_id = $_SESSION['access_level_id'];
} else {
    $access_level_id = 0;
}

// Avoid Confirm Page Reload Promt
// echo '
// <script>
//     if ( window.history.replaceState ) {
//         window.history.replaceState( null, null, window.location.href );
//     }
// </script
// ';

//essentials
$mail = new mail;
$db_query_obj = new db_query;
$page_redirect  = new page_redirect;
$validation_check_obj  = new validation;



//dependants
$data_object = new data_object($db_query_obj);

$global_transaction = new global_transaction($user_id, $db_query_obj, $data_object);

//module/class objects
$populate_select_obj = new populate_select($db_query_obj);   
$notifications_obj = new notifications($user_id, $db_query_obj, $global_transaction, $data_object);
 
