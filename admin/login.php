<?php
session_start();
// Mevcut Değerler

$mevcut_kullanici_adi = "admin";

$mevcut_sifre = "123456";

 

// Formdan gelen değerler
	$kadi=$_POST["username"];
	$parola=$_POST["password"];
 

// Eğer bilgiler eşleşiyorsa oturumumuzu başlatalım

if ($kadi == $mevcut_kullanici_adi && $parola == $mevcut_sifre){

    $_SESSION['oturum'] = true;

    $_SESSION['username'] = $kadi;


    header("refresh: 0; url=ekle.php");

}elseif (empty($kadi) || empty($parola)){

    echo "Lütfen kullanıcı adı ya da şifrenizi girmeyi unutmayin..";
	echo "Giriş Sayfasına Yönlendiriliyorsunuz Lütfen Bekleyin";	
	header("refresh: 5; url=index.php");

}elseif ($kadi != $mevcut_kullanici_adi){

    echo "Girdiğiniz kullanıcı adı veya şifre hatalı, lütfen tekrar deneyin!!";
	echo "Giriş Sayfasına Yönlendiriliyorsunuz Lütfen Bekleyin";
	header("refresh: 5; url=index.php");

}elseif ($kadi != $parola){

    echo "Girdiğiniz sifre veya kullanıcı adı hatalı, lütfen tekrar deneyin!!";
	echo "Giriş Sayfasına Yönlendiriliyorsunuz Lütfen Bekleyin";
	header("refresh: 5; url=index.php");

}

?>