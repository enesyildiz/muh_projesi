<?php
ob_start();
include "../connect.php";
	$fid=$_GET["fid"];
	$gun=$_POST["gun"];
	$ay=$_POST["ay"];
	$yil=$_POST["yil"];
	$gender=$_POST["gender"];
	$education=$_POST["education"];
	$kadro=$_POST["kadro"];
	$senaryo=$_POST["senaryo"];
	$akis=$_POST["akis"];
	$cekim=$_POST["cekim"];
	$genel=$_POST["genel"];
	$altyazi=$_POST["altyazi"];
	$category=$_POST["category"];
	$userid;
			

	if(!isset($_COOKIE['user'])){

		if ($baglanti->query("INSERT INTO borndate (day, month,year) VALUES ('$gun','$ay','$yil')")) // Veri ekleme sorgumuzu yazıyoruz.
		{
			$query = $baglanti->query("SELECT * FROM borndate order by id desc limit 1", PDO::FETCH_ASSOC);

		if ( $query->rowCount() )
		{
     		foreach( $query as $row )
			{
				$userid=$row['Id'];

	 		}
		}
			
			
		if ($baglanti->query("INSERT INTO users (fk_borndate, Education,gender) VALUES ('$userid','$education','$gender')"))
		{
				setcookie("user",$userid, time() + (86400 * 30), "/");

			
		$baglanti->query("INSERT INTO survey (filmId, userId,kadroPuan,senaryoPuan,akis,genel,language,category) VALUES ('$fid','$userid','$kadro','$senaryo','$akis','$genel','$altyazi','$category')");
			header("Location: ../index.php");
		}
		}
		}
		else
		{
					$userid=$_COOKIE['user'];
					$temp=false;
					$query=$query = $baglanti->query("SELECT * FROM survey where userId=".$userid."", PDO::FETCH_ASSOC);
					if ( $query->rowCount() )
						{
     						foreach( $query as $row)
							{	
								if($fid==$row['filmId']){
									$temp=true;
								}

	 						}
					}			
			if($temp==true){header("Location:../index.php?id=".$temp."");}
			else{
					$baglanti->query("INSERT INTO survey (filmId, userId,kadroPuan,senaryoPuan,akis,genel,language,category) VALUES ('$fid','$userid','$kadro','$senaryo','$akis','$genel','$altyazi','$category')");
					header("Location:../index.php");
			}
	}
	ob_end_flush();
	?>