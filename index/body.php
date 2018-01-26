<div class="jumbotron">
  <div class="container text-center">
  <img class="logo" style="width:auto; height:250px; 
     padding:5px;
     float:left" src="images/logo.png">
  <h1>Cumhuriyet Üniversitesi Mühendislik Projesi <br> İkinci Ödevi</h1>
  <h4>Enes Yıldız 2014123070</h4>
  </div>
</div>
<div class="container-fluid bg-3 text-center">    
  <form method="post">
 <input type="text" name="aramasorgusu" placeholder="Aramak istediğiniz filmi yazınız">
 <input type="submit" class="fsSubmitButton" name="ara" value="Ara">
</form><br>
<br>
 <br>
</div>
   <div class="row content">

  <center>
<?php
	  error_reporting(0);
	  $buton=$_POST["ara"];
	  if(isset($buton)){
		  include "sonuc.php";
	  }
	  else{
		  include "main.php";
	  }
?>


  </div>
  </center>
</div><br>
<br><br>