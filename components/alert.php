<?php
// dynamic alerts via URL
if (isset($_GET['alert_type'], $_GET['alert_message'])) {
    $config['alerts'][] = [
        'type' => $_GET['alert_type'],
        'message' => $_GET['alert_message'],
    ];
}

// display alerts
if (!empty($config['alerts'])):
    foreach ($config['alerts'] as $alert):
        $type = $alert['type'];
        $message = $alert['message'];
?>
    <div class="alert alert-<?php echo $type; ?>">
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php
    endforeach;
endif;
?>
