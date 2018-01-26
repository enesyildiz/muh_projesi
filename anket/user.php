	<tr>
		<td><br>
			Doğum Tarihi:&nbsp;&nbsp;
			<select name="gun" id="gun">
                	<option value="0">Gün</option>
                	<?php
				$i=1;
				$opt="";
				while($i<=31){
					$opt="<option value=\"".$i."\">".$i."</option>";
					$i+=1;
					echo $opt;
				}
				?>
                </select>
                <select name="ay" id="ay">
                	<option value="0">Ay</option>
                	<option value="1">Ocak</option>
                	<option value="2">Şubat</option>
                	<option value="3">Mart</option>
                	<option value="4">Nisan</option>
                	<option value="5">Mayıs</option>
                	<option value="6">Haziran</option>
                	<option value="7">Temmuz</option>
                	<option value="8">Ağustos</option>
                	<option value="9">Eylül</option>
                	<option value="10">Ekim</option>
                	<option value="11">Kasım</option>
                	<option value="12">Aralık</option>
                </select>
                <select name="yil" id="yil">
                	<option value="0">Yıl</option>
                <?php
				$j=1915;
				$opti="";
				while($j<=2018){
					$opti="<option value=\"".$j."\">".$j."</option>";
					$j+=1;
					echo $opti;
				}
				?>
                </select>
                <br><br>
		</td>
	</tr>
	<tr>
		<td>
		  Cinsiyetiniz:&nbsp;&nbsp;
			  <input type="radio" id="gender" name="gender" value="male"> Erkek&nbsp;&nbsp;
  			  <input type="radio" id="gender" name="gender" value="female"> Kadın<br><br>
		</td>
	</tr>
	<tr>
		<td>
		Eğitim Durumunuz:<br>
		<input type="radio" id="education" name="education" value="1"> İlkokul&nbsp;&nbsp;
		<input type="radio" id="education" name="education" value="2"> Ortaokul&nbsp;&nbsp;
		<input type="radio" id="education" name="education" value="3"> Lise&nbsp;&nbsp;
		<input type="radio" id="education" name="education" value="4"> Önlisans&nbsp;&nbsp;
		<input type="radio" id="education" name="education" value="5"> Lisans&nbsp;&nbsp;
		<input type="radio" id="education" name="education" value="6"> Yüksek Lisans&nbsp;&nbsp;
		<input type="radio" name="education" value="7"> Akademik Eğitim&nbsp;&nbsp;<br><br>	
		</td>
	</tr>

	