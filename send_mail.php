<?php
// Skripta za obradu i slanje podataka iz kontakt forme

// Pokretanje sesije kako bismo mogli koristiti $_SESSION varijable
session_start();

// Provjera je li forma poslana putem POST metode
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Prikupljanje i čišćenje podataka iz forme
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    $captcha_input = trim($_POST["captcha"]);

    // 2. Validacija CAPTCHA
    $expected_captcha = $_SESSION['captcha_num1'] + $_SESSION['captcha_num2'];

    if ($captcha_input != $expected_captcha) {
        // Ako CAPTCHA nije točna, postavi poruku o grešci i preusmjeri
        $_SESSION['form_message'] = "Sigurnosno pitanje nije točno. Molimo pokušajte ponovno.";
        $_SESSION['form_status'] = "error";
        header("Location: kontakt.php");
        exit;
    }

    // 3. Validacija ostalih polja
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Ako neko polje nedostaje ili email nije ispravan
        $_SESSION['form_message'] = "Molimo ispunite sva polja ispravno.";
        $_SESSION['form_status'] = "error";
        header("Location: kontakt.php");
        exit;
    }

    // 4. Slanje emaila
    $to = 'drazenambrozic@gmail.com';
    $subject = "Novi upit s web stranice Konoba Brešić";

    $email_content = "Ime i prezime: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Poruka:\n$message\n";

    $headers = "From: $name <$email>";

    // Slanje emaila pomoću PHP mail() funkcije
    if (mail($to, $subject, $email_content, $headers)) {
        // Ako je email uspješno poslan
        $_SESSION['form_message'] = "Hvala Vam na poruci! Javit ćemo Vam se uskoro.";
        $_SESSION['form_status'] = "success";
    } else {
        // Ako je došlo do greške pri slanju
        $_SESSION['form_message'] = "Došlo je do greške prilikom slanja poruke. Molimo pokušajte ponovno.";
        $_SESSION['form_status'] = "error";
    }

} else {
    // Ako se skripti pristupi direktno, a ne putem POST metode
    $_SESSION['form_message'] = "Neispravan zahtjev.";
    $_SESSION['form_status'] = "error";
}

// Preusmjeravanje nazad na kontakt stranicu
header("Location: kontakt.php");
exit;
?>
