<?php
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
