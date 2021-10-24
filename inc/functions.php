<?php
 require('db/pdoconnection.php');
class functions extends dbcon{

 public function Method($Method){
  $this->$_SERVER['REQUEST_METHOD']==$Method;
 }

 public function redirect($url){
     return header("location:$url.php");
 }

 public function cleandata($value){
     return trim($value);
 }
 public function validate($value){
     return filter_var($value,FILTER_VALIDATE_EMAIL);
 }
 public function sanitize($value){
     return filter_var($value,FILTER_SANITIZE_STRING);

 }
 public function validateint($value){
     return filter_var($value,FILTER_VALIDATE_INT);
 }
 public function view($url,$model=''){
     global $view_bag;
   return require("views\layouts\layout.php");
}
 
}



?>


