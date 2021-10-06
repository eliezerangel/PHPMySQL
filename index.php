<?php
include('content/head.php');
include('content/header.php');

session_start();
    if (!isset($_SESSION['id']))
    { 
        include('content/nav.php');
    }
    else
    {
        include('content/navauth.php');
    }

include('content/routes.php');
include('content/footer.php');
?>