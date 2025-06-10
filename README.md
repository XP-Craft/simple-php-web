# simple-php-web

**A minimal PHP project** to demonstrate how simple and clean plain PHP can be — no frameworks, just includes and good structure.

## 🎯 Purpose

This project shows how to build a maintainable, structured PHP site using:

*   `include`/`require` for layout and components
*   `config.php` for site data and settings
*   Basic routing with `index.php?page=...` or just `?page=...`
*   Reusable components like navbar and footer

## 📁 Folder Structure

```
simple-php-web/
├── index.php
├── config.php
├── routes.php
├── components/
│   ├── layout.php
│   ├── navbar.php
│   └── footer.php
├── views/
│   ├── home.php
│   ├── pricing.php
│   ├── about.php
│   ├── contact.php
│   ├── faq.php
│   └── 404.php
└──  css/
    └── style.css
```

## ⚙️ config.php Example

```php
<?php
return [
    'site_name' => 'simple-php-web',
    'pricings' => [
        ['title' => 'Basic', 'price' => '$10/mo'],
        ['title' => 'Pro', 'price' => '$20/mo'],
        ['title' => 'Enterprise', 'price' => 'Contact us'],
    ],
    'faqs' => [
        ['q' => 'Is this Laravel?', 'a' => 'No, just PHP.'],
        ['q' => 'Can I use this to learn?', 'a' => 'Absolutely.'],
    ],
];
```

## 🧭 routes.php Example

```php
<?php
return [
    'home' => [
        'view' => 'views/home.php',
        'title' => 'Home'
    ],
    'contact' => [
        'view' => 'views/contact.php',
        'title' => 'Contact'
    ],
];
```

## 🚀 How to Run

1.  Clone the repo
2.  Run PHP’s built-in server:  
    `php -S localhost:8000`
3.  Visit `http://localhost:8000` in your browser

## 🧩 Features

*   Dynamic routing with `?page=`
*   Automatic 404 fallback
*   Config-driven data (pricing, FAQs)
*   Semantic HTML with a basic stylesheet
*   Active nav link highlighting

## 📄 License

MIT – Use this for learning or small projects. Contributions welcome!
