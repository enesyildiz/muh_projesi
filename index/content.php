  <link rel="stylesheet" href="../style/style.css">
			

			<div class="col-sm-12 text-left main">
			<?php
				$id=$_GET['id'];
		$query = $baglanti->query("SELECT * FROM movies where id=".$id.";", PDO::FETCH_ASSOC);
		if ( $query->rowCount() )
		{
     		foreach( $query as $row)
			{
				$text="<center><br><br><h1>".$row['mname']."</h1><br><img src=\"../".$row['imageurl']."\"><br><br><br><p>".$row['aciklama']."</p><h3>IMDB: ".$row['imdb']."</h3></center>";
         		echo $text;
				$fid=$row['ID'];
		 		$text="";
	 		}
		}
				$temp=0;
				if(isset($_COOKIE['user'])){
				$userid=$_COOKIE['user'];
				
				$query=$query = $baglanti->query("SELECT * FROM survey where userId=".$userid."", PDO::FETCH_ASSOC);
			if ( $query->rowCount() )
		{
     		foreach( $query as $row)
			{	
				if($fid==$row['filmId']){
					$temp=1;
				}

	 		}
		}
				}
				
	
	$butonactive="<center> <a href=\"../anket/anket.php?fid=". $fid ."\"><button class=\"button\" style=\"vertical-align:middle\"><span>OY VER </span></button></a></center>	</div>
	<br>";
	$butonpassive="<center> <a href=\"#\"><button class=\"button\" style=\"vertical-align:middle\"><span>OY VER </span></button></a></center>	</div>
	<br>";
				
			if($temp==1){
			echo $butonpassive;
			$temp=0;
			}
			else{
			echo $butonactive;
			}
	?>
