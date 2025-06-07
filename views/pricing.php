<h1>Pricing</h1>
<?php foreach ($config['pricings'] as $plan): ?>
    <div style="border:1px solid #ccc; margin:1em 0; padding:1em;">
        <h2><?php echo($plan['title'] . '-' . $plan['price'])</h2>
        <ul>
            <?php foreach ($plan['features'] as $feature): ?>
                <li><?php echo($feature) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>
