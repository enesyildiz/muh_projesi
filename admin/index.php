<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php
	if(isset($_SESSION['oturum'])){
session_destroy();}
	?>
<body>
<center>
<h2>Admin Sayfasına Hoşgeldiniz</h2>

<button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş Yapmak İçin Tıklayın</button>
</center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/user.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Kullanıcı adınızı giriniz" id="username" name="username" autocomplete="off" required/>

      <label><b>Şifre</b></label>
      <input type="password" placeholder="Şifrenizi Giriniz" name="password" required/>
        
      <input type="submit" class="button" value="Giriş"/>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">İptal</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$("#login").click(function(){
  $(document).ready(function(){
    document.getElementById("username").focus();
});
	});
</script>

</body>
</html>