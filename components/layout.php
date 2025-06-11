<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title . ' x ' . $config['site_name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include __DIR__ . '/../components/alert.php'; ?>

<?php include __DIR__ . '/../components/navbar.php'; ?>

<main>
    <?php include __DIR__ . '/../' . $view; ?>
</main>

<?php include __DIR__ . '/../components/footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
