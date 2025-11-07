<?php
// Pokretanje sesije za potrebe CAPTCHA i poruka forme
session_start();

// Uključivanje gornjeg dijela stranice (header)
include 'includes/header.php';
?>

<!-- Google Karta preko cijele širine -->
<div class="map-container-full">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.43615414342!2d15.95218231556845!3d45.81532497910686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6e2e7c331d7%3A0x7de75690b59f3a69!2sVinogradska%20cesta%2077%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1678886400000!5m2!1shr!2shr"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<!-- Kontakt forma i informacije -->
<div class="container page-content">
    <h1>Kontaktirajte Nas</h1>
    <div class="contact-wrapper">
        <div class="contact-form">
            <h2>Pošaljite nam upit</h2>
            <?php if (isset($_SESSION['form_message'])): ?>
                <div class="form-message <?php echo $_SESSION['form_status']; ?>">
                    <?php
                        echo $_SESSION['form_message'];
                        unset($_SESSION['form_message']);
                        unset($_SESSION['form_status']);
                    ?>
                </div>
            <?php endif; ?>
            <form action="send_mail.php" method="POST">
                <div class="form-group">
                    <label for="name">Ime i prezime</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email adresa</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Poruka</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <div class="form-group captcha-group">
                    <label for="captcha">Upišite tekst sa slike:</label>
                    <img src="captcha.php" alt="CAPTCHA slika" class="captcha-image">
                    <input type="text" id="captcha" name="captcha" required>
                </div>
                <button type="submit" class="btn">Pošalji</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Informacije</h2>
            <p><strong>Adresa:</strong><br>Vinogradska cesta 77, Zagreb</p>
            <p><strong>Email:</strong><br><a href="mailto:info@konobabresic.hr">info@konobabresic.hr</a></p>
            <p><strong>Telefon:</strong><br>01 234 5678</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
