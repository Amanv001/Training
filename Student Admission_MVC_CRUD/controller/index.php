<?php
include('model/index.php');
    $page = 'home';
    print_r($_GET);
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if ($page == 'home') {
        include('view/home.php');
    }
    else if($page == 'about'){
        include('view/about.php');
    }
    else if($page == '')

?>