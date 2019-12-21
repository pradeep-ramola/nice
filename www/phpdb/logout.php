<?php
session_start();
session_destroy();
header('Location:/../NICE/www/index.php');
?>