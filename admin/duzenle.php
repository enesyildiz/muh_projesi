<?php 
include "../connect.php"; // veritabanı bağlantımızı sayfamıza ekliyoruz. 
	session_start();
	if(!isset($_SESSION['oturum'])){
		header("Location:index.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Düzenle</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<?php 

$sorgu = $baglanti->query("SELECT * FROM movies WHERE id =".(int)$_GET['id']); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc =$sorgu->fetch(PDO::FETCH_ASSOC); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
<div class="col-md-12">

<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>İsim</td>
			<td><input type="text" name="isim" class="form-control" value="<?php echo $sonuc['mname']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
		</tr>
		<tr>
			<td>IMDB</td>
			<td><input type="text" name="imdb" class="form-control" value="<?php echo $sonuc['imdb']; ?>"></td>
		</tr>

		<tr>
			<td>Açıklama</td>
			<td><textarea name="aciklama" rows="8" class="form-control"><?php echo $sonuc['aciklama']; ?></textarea></td>
		</tr>
		<tr>
			<td>Resim Dosyası</td>
			<td><input type="text" name="img" class="form-control" value="<?php echo $sonuc['imageurl']; ?>"></td>				
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$isim = $_POST['isim']; // Post edilen değerleri değişkenlere aktarıyoruz
	$imdb = $_POST['imdb'];
	$img = $_POST['img'];
	$aciklama = $_POST['aciklama'];

	if ($isim<>"" && $imdb<>""&& $img<>""&& $aciklama<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($baglanti->query("UPDATE movies SET mname = '$isim', imdb = '$imdb', imageurl='$img', aciklama='$aciklama' WHERE id =".$_GET['id'])) // Veri güncelleme sorgumuzu yazıyoruz.
		{
			header("location:ekle.php"); // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>

</body>
</html>