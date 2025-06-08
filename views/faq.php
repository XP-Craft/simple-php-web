<h1>FAQ</h1>
<?php foreach ($config['faqs'] as $faq): ?>
    <div>
        <h3>Q: <?php echo $faq['q']; ?></h3>
        <p>A: <?php echo $faq['a']; ?></p>
    </div>
<?php endforeach; ?>
