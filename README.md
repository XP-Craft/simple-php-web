 simple-php-web – Plain PHP Demo Site body { font-family: sans-serif; line-height: 1.6; padding: 2em; background-color: #f8f9fa; color: #212529; } code, pre { background-color: #eee; padding: 0.5em; display: block; overflow-x: auto; border-radius: 4px; } h1, h2, h3 { color: #007bff; } ul { padding-left: 1.5em; }

# 🧪 simple-php-web

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
│   ├── navbar.php
│   └── footer.php
├── layouts/
│   └── base.php
├── views/
│   ├── home.php
│   ├── pricing.php
│   ├── about.php
│   ├── contact.php
│   ├── faq.php
│   └── 404.php
├── css/
│   └── style.css
└── js/
    └── script.js
```

## ⚙️ config.php Example

```
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
