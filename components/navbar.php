<!--nav>
    <a href="?page=home" <?php if ($current_page === 'home') echo 'class="active"'; ?>>Home</a>
    <a href="?page=pricing" <?php if ($current_page === 'pricing') echo 'class="active"'; ?>>Pricing</a>
    <a href="?page=about" <?php if ($current_page === 'about') echo 'class="active"'; ?>>About</a>
    <a href="?page=contact" <?php if ($current_page === 'contact') echo 'class="active"'; ?>>Contact</a>
    <a href="?page=faq" <?php if ($current_page === 'faq') echo 'class="active"'; ?>>FAQ</a>
</nav-->
<nav>
    <a href="?page=home&alert_type=info&alert_message=Welcome+home%2C+PHP+hero!" <?php if ($current_page === 'home') echo 'class="active"'; ?>>Home</a>
    <a href="?page=pricing&alert_type=success&alert_message=Wow%2C+our+prices+are+awesome!" <?php if ($current_page === 'pricing') echo 'class="active"'; ?>>Pricing</a>
    <a href="?page=about&alert_type=info&alert_message=Just+a+few+PHP+files+doing+cool+stuff." <?php if ($current_page === 'about') echo 'class="active"'; ?>>About</a>
    <a href="?page=contact&alert_type=warning&alert_message=We+don%27t+bite...+usually." <?php if ($current_page === 'contact') echo 'class="active"'; ?>>Contact</a>
    <a href="?page=faq&alert_type=error&alert_message=These+FAQs+are+so+frequent%2C+they+need+a+vacation." <?php if ($current_page === 'faq') echo 'class="active"'; ?>>FAQ</a>
</nav>
