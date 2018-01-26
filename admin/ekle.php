<!DOCTYPE html>
<?php include "../connect.php"?>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css.css">
<?php
	session_start();
	if(!isset($_SESSION['oturum'])){
		header("Location:index.php");
	} ?>
<body>
<center>
<div class="container">
<div class="col-md-12">
<form action="upload.php" method="post" enctype="multipart/form-data">
    Yüklemek için bir resim seç<br>&emsp;&emsp;&emsp;&emsp;
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    Film İsmi:<br>
    <input type="text" class="form-control" name="mname" id="mname"><br><br>
    IMDB Puanı:<br>
    <input type="text" class="form-control" name="imdb" id="imdb"><br><br>
    Açıklama:<br>
	<textarea rows="4"  class="form-control" name="aciklama" id="aciklama"></textarea><br><br>
    <input type="submit" value="Yükle" name="submit"><br><br>
    <a href="cikis.php">Çıkış Yap</a>
</form>
	</div>
	</div>
<div class="col-md-12">
<table class="table">
	
	<tr>
		<th>Film ismi</th>
		<th>İmdb</th>
		<th>Açıklama</th>
		<th>Resim</th>
		<th></th>
		<th></th>
	</tr>

<!-- Åimdi ise verileri sÄ±ralayarak Ã§ekmek iÃ§in PHP kodlamamÄ±za geÃ§iyoruz. -->

<?php 

$query = $baglanti->query("SELECT * FROM movies"); 

		if ( $query->rowCount() )
		{
     		foreach( $query as $row )
			{
$id=$row["ID"];
$name = $row['mname']; 
$imdb = $row['imdb'];
$aciklama = $row['aciklama'];
$img=$row['imageurl'];

?>
	
	<tr>
		<td><?php echo $name;  ?></td>
		<td><?php echo $imdb; ?></td>
		<td><?php echo $aciklama; ?></td>
		<td><?php echo $img; ?></td>
		<td><a href="duzenle.php?id=<?php echo	$id ;?>" class="btn btn-primary">Düzenle</a></td>
		<td><a href="sil.php?id=<?php echo $id;?>" class="btn btn-danger">Sil</a></td>
	</tr>
	

<?php 
			}	
		} 
	?>

</table>
	</div>
</center>
</body>
</html>