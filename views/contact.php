<h1>Contact Us</h1>
<form method="post" action="#">
    <label for="name">Your Name:</label><br>
    <input type="text" name="name" id="name"><br><br>

    <label for="message">Message:</label><br>
    <textarea name="message" id="message" rows="5"></textarea><br><br>

    <input type="submit" value="Send">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<p><strong>Thank you, ' . htmlspecialchars($_POST['name']) . '! Your message has been received.</strong></p>';
}
?>
