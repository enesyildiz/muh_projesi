<?php
$servername = "localhost";
 $username = "root";
 $password = "";
 // VeritabanÄ± baÄŸlantÄ±mÄ±zÄ± yapÄ±yoruz.
try {
    @$baglanti = new PDO("mysql:host=$servername:3306;dbname=anket", $username, $password);
    // set the PDO error mode to exception
  @$baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Baglanti yapilamadi: " . $e->getMessage();
    }
@$baglanti->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");// TÃ¼rkÃ§e karakter sorunu olmamasÄ± iÃ§in utf8'e Ã§eviriyoruz.
?>