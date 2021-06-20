<?php 


session_start();
    unset($_SESSION['Auth']);
header('Location: Auth_form.php');
 

