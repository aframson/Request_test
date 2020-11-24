<?php 
include 'engine.php';

$function  = $_GET['func'];

if (function_exists($function)) {
      $function();
}else{
      echo'<script>window.location.href="404.php"</script>';
}