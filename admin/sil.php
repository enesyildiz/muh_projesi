<?php
	session_start();
	if(!isset($_SESSION['oturum'])){
		header("Location:index.php");
	} ?>
<?php 
include "../connect.php";
if ($_GET)
{
if ($baglanti->query("DELETE FROM movies WHERE id =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:ekle.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>