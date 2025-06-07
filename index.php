<?php

$config = include 'config.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'pricing':
        $view = 'views/pricing.php';
        break;
    case 'home':
    default:
        $view = 'views/home.php';
        break;
}

include 'layouts/base.php';

?>
