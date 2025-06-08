<?php
$config = include 'config.php';
$routes = include 'routes.php';

$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($current_page, $routes)) {
    $view = $routes[$current_page]['view'];
    $page_title = $routes[$current_page]['title'];
} else {
    // Fallback to 404 Error view/page
    $view = 'views/404.php';
    $page_title = 'Page Not Found';
}

include 'components/layout.php';

?>
