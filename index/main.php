﻿ <?php
	  
$query = $baglanti->query("SELECT * FROM movies", PDO::FETCH_ASSOC);
	  	  $film="";

		if ( $query->rowCount() )
		{
     		foreach( $query as $row )
			{
				$id=$row['ID'];
		 		$film="<div class=\"col-sm-2 resim\"><a href=\"index/detay.php?id=".$id."\"><img src=\"".$row['imageurl']."\"><p>".$row['mname']."</p></a></div>";
         		echo $film;	
		 		$film="";
	 		}
		}
?>