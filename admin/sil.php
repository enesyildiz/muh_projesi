<?php
	session_start();
	if(!isset($_SESSION['oturum'])){
		header("Location:index.php");
	} ?>
<?php 
include "../connect.php";
if ($_GET)
$query = $baglanti->query("SELECT * FROM movies where id=".(int)$_GET['id']); 

		if ( $query->rowCount() )
		{
     		foreach( $query as $row )
			{
$img=$row['imageurl'];
	$img="../".$img;
	if(is_file($img)){
		unlink($img);
	}
	else{
		echo "resim bulunamadı";
	}		
			}
			}
{
if ($baglanti->query("DELETE FROM movies WHERE id =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:ekle.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>