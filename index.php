<?php
$config = include 'config.php';

// Define available routes with metadata
$routes = [
    'home' => [
        'view' => 'views/home.php',
        'title' => 'Home'
    ],
    'pricing' => [
        'view' => 'views/pricing.php',
        'title' => 'Pricing'
    ],
    'about' => [
        'view' => 'views/about.php',
        'title' => 'About Us'
    ],
    'contact' => [
        'view' => 'views/contact.php',
        'title' => 'Contact'
    ],
    'faq' => [
        'view' => 'views/faq.php',
        'title' => 'FAQ'
    ],
];

$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($current_page, $routes)) {
    $view = $routes[$current_page]['view'];
    $page_title = $routes[$current_page]['title'];
} else {
    // fallback to 404 or home
    $view = 'views/home.php';
    $page_title = 'Home';
    $current_page = 'home';
}

include 'layouts/base.php';

?>
