<!doctype html>
<?php include "../connect.php";?>

<?php
include "../index/header.php";
?>
<link rel="stylesheet" href="../style/style.css">

<body>
<center>
	<table>
<?php 
	$fid=$_GET['fid'];
	$hidden="<form method=\"post\"  action=\"oyla.php?fid=".$fid."\"><table>";

	echo $hidden;
	?>

	<?php
		if(isset($_COOKIE["user"])){
			include "film.php";
		}
		else{
			include "user.php";
			include "film.php";
		}

	?>
	
<tr>
	<td>
		<center><input type="submit" id="submit" value="Kaydet"></center>
	</td>
</tr>
</table>
</form>
</center>
<script>
$(document).ready(function(){
    $("#submit").on("click", function(event){
        form_kontrolu();
    });
});

});	
var form_kontrolu = function(){
    var gun = $("#gun").val();
    var ay = $("#ay").val();
    var yil = $("#yil").val();
    var cins = getRadio("gender");
	var egitim = getRadio("education");
    var kadro = getRadio("kadro");
    var senaryo = getRadio("senaryo");
    var akis = getRadio("akis");    
	var cekim = getRadio("cekim");
    var genel = getRadio("genel");
    var altyazi = getRadio("altyazi");
    var kategori = getRadio("category");
	var x="<?php echo isset($_COOKIE["user"]); ?>";

	if(x==""){
	if(gun==0|| ay==0|| yil==0){
		event.preventDefault();
		alert("Lütfen Formu Tam Doldurunuz");
	}
	else if(cins==undefined||egitim==undefined||kadro==undefined|| senaryo==undefined|| akis==undefined||cekim==undefined||genel==undefined|| altyazi==undefined||kategori==undefined){
		event.preventDefault();
		alert("Lütfen Formu Tam Doldurunuz");
	}
		}
	else if(x!=""){
	if( kadro==undefined|| senaryo==undefined|| akis==undefined||cekim==undefined||genel==undefined|| altyazi==undefined||kategori==undefined){
		event.preventDefault();
		alert("Lütfen Formu Tam Doldurunuz");
	}
	}

}
function getRadio(b){
var rates = document.getElementsByName(b);
var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
    }
}
	return rate_value;
}
</script>


<?php
include "../index/footer.php";
?>
 </body>
