<tr>
	<td>
		
			<p>Bu filmin kadro kalitesine kaç puan verirsiniz?</p>
			<?php
			$Rkadro="";
			
				for ($k=1; $k<=10; $k++){
					$Rkadro="<input type=\"radio\" id=\"kadro\" name=\"kadro\" value=\"".$k."\">&nbsp;".$k."&nbsp;&nbsp;&nbsp;";
					echo $Rkadro;
					$Rkadro="";
				}
			?><br><br>
				
		</td>
	</tr>
	<tr>
		<td>

			<p>Bu filmin senaryo kalitesine kaç puan verirsiniz?</p>
			<?php
			$Rsen="";
				for ($k=1; $k<=10; $k++){
					$Rsen="<input type=\"radio\" id=\"senaryo\" name=\"senaryo\" value=\"".$k."\">&nbsp;".$k."&nbsp;&nbsp;&nbsp;";
					echo $Rsen;
					$Rsen="";
				}
			?><br><br>
		</td>
	</tr>
	<tr>
		<td>

			<p>Bu filmin akışına (sürükleyiciliğine) kaç puan verirsiniz?</p>
			<input type="radio" name="akis" value="0" id="akis" style="display:none;">
			<?php
			$Rakis="";
				for ($k=1; $k<=10; $k++){
					$Rakis="<input type=\"radio\"id=\"akis\" name=\"akis\" value=\"".$k."\">&nbsp;".$k."&nbsp;&nbsp;&nbsp;";
					echo $Rakis;
					$Rakis="";
				}
			?><br><br>
		</td>
	</tr>
	<tr>
		<td>
			<p>Bu filmin çekim kalitesine kaç puan verirsiniz?</p>
			<?php
			$Rcek="";
				for ($k=1; $k<=10; $k++){
					$Rcek="<input type=\"radio\" id=\"cekim\" name=\"cekim\" value=\"".$k."\">&nbsp;".$k."&nbsp;&nbsp;&nbsp;";
					echo $Rcek;
					$Rcek="";
				}
			?><br><br>
		</td>
	</tr>
	<tr>
		<td>
			<p>Filmin geneline kaç puan verirsiniz?</p>
			<?php
			$Rgen="";
				for ($k=1; $k<=10; $k++){
					$Rgen="<input type=\"radio\" id=\"genel\" name=\"genel\" value=\"".$k."\">&nbsp;".$k."&nbsp;&nbsp;&nbsp;";
					echo $Rgen;
					$Rgen="";
				}
			?><br><br>
		</td>
	</tr>
	<tr>
		<td>
			<p>Filmi nasıl izlediniz?</p>
			    <input type="radio" id="altyazi" name="altyazi" value="orjinal"> Orjinal&nbsp;&nbsp;
  				<input type="radio" id="altyazi" name="altyazi" value="dublaj"> Dublaj&nbsp;&nbsp;
  				<input type="radio" id="altyazi" name="altyazi" value="altyazi"> Altyazılı&nbsp;&nbsp;<br><br>
		</td>
	</tr>
	<tr>
		<td>
			<p>Sizce bu film hangi kategoride olmalı?</p>
				<input type="radio" id="category" name="category" value="aksiyon"> Aksiyon&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="macera"> Macera&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="komedi"> Komedi&nbsp;&nbsp;
				<input type="radio" id="category" name="category" value="romantik"> Romantik&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="korku"> Korku&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="fantastik"> Fantastik&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="psikolojik"> Psikolojik&nbsp;&nbsp;
  				<input type="radio" id="category" name="category" value="dram"> Dram&nbsp;&nbsp;
		</td>
	</tr>