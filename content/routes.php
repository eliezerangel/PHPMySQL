<?php 

if(isset($_GET['p'])){
    
    $p = $_GET['p'];

if($p == 'home')
    include('content/pages/home.php');
    else if ($p == 'contact')
    include('content/pages/contact.php');
    else if ($p == 'login')
    include('content/pages/login.php');
    else if ($p == 'oportunity')
    include('content/pages/oportunity.php');
    else if ($p == 'minhaconta')
    include('content/pages/minhaconta.php');
    else if ($p == 'about')
    include('content/pages/about.php');    
    else if ($p == 'logout')
    include('db/logoutuser.php');
}
else{
    include('content/pages/home.php');
}

?>