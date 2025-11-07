<?php
session_start();

// Postavke za CAPTCHA sliku
$width = 120;
$height = 40;
$font_size = 20;
$num_chars = 5;

// Generiranje nasumičnog teksta
$captcha_text = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $num_chars);
$_SESSION['captcha_text'] = $captcha_text;

// Kreiranje slike
$image = imagecreatetruecolor($width, $height);

// Boje
$bg_color = imagecolorallocate($image, 240, 240, 240); // Svijetlo siva pozadina
$text_color = imagecolorallocate($image, 50, 50, 50);   // Tamna boja teksta
$line_color = imagecolorallocate($image, 200, 200, 200); // Boja linija za smetnje

// Ispunjavanje pozadine
imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);

// Dodavanje linija za smetnje
for ($i = 0; $i < 5; $i++) {
    imageline($image, 0, rand() % $height, $width, rand() % $height, $line_color);
}

// Dodavanje točkica za smetnje
for ($i = 0; $i < 500; $i++) {
    imagesetpixel($image, rand() % $width, rand() % $height, $line_color);
}

// Odabir fonta (putanja do fonta - provjeriti postoji li na sustavu)
$font = getcwd() . '/fonts/Merriweather-Regular.ttf';
if (!file_exists($font)) {
    // Ako font ne postoji, koristi ugrađeni
    $font = 5;
    $x = ($width - (imagefontwidth($font) * $num_chars)) / 2;
    $y = ($height - imagefontheight($font)) / 2;
    imagestring($image, $font, $x, $y, $captcha_text, $text_color);
} else {
    // Izračunavanje pozicije za centriranje teksta
    $textbox = imagettfbbox($font_size, 0, $font, $captcha_text);
    $x = ($width - $textbox[4]) / 2;
    $y = ($height - $textbox[5]) / 2;
    imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $captcha_text);
}

// Postavljanje headera i prikaz slike
header('Content-Type: image/png');
imagepng($image);

// Oslobađanje memorije
imagedestroy($image);
?>
