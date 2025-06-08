<nav>
    <a href="?page=home" <?php if ($current_page === 'home') echo 'class="active"'; ?>>Home</a>
    <a href="?page=pricing" <?php if ($current_page === 'pricing') echo 'class="active"'; ?>>Pricing</a>
    <a href="?page=about" <?php if ($current_page === 'about') echo 'class="active"'; ?>>About</a>
    <a href="?page=contact" <?php if ($current_page === 'contact') echo 'class="active"'; ?>>Contact</a>
    <a href="?page=faq" <?php if ($current_page === 'faq') echo 'class="active"'; ?>>FAQ</a>
</nav>
