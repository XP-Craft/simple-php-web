<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title . ' - ' . $config['site_name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include __DIR__ . '/navbar.php'; ?>

<?php include __DIR__ . '/alert.php'; ?>

<main>
    <?php include __DIR__ . '/../' . $view; ?>
</main>

<?php include __DIR__ . '/footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
