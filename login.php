<?php
 require('inc/functions.php');
$db = new functions;
$view_bag=array(
    'title'=>'Login panel',
);
$db->view('login');
?>