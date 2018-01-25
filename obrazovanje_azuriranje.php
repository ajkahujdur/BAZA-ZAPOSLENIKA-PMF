<?php
session_start();
require_once("konekcija.php");
require_once("korisnik.php");

		$osnovnaSkola = $_POST['osnovnaSkola'];
		$srednjaSkola = $_POST['srednjaSkola'];
		$fakultet = $_POST['fakultet'];
		$strucnaSprema = $_POST['strucnaSprema'];
		
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		
		function zatvori($konekcija){
			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");
		}
		
		$user = $_SESSION['username'];
		
		$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
		$rez = mysql_query($idUpit) or die(mysql_error());
		$ucitava = mysql_fetch_array($rez);
		$id = $ucitava['idKorisnik'];
		
		$upitSS = "select idStrucnaSprema from strucna_sprema where nazivStrucnaSprema = '".$strucnaSprema."'";
		$rezSS = mysql_query($upitSS) or die(mysql_error());
		$SSucitao = mysql_fetch_array($rezSS);
		$idSS =$SSucitao['idStrucnaSprema'];
		
		zatvori($konekcija);
		
		$upitProvjera = "call provjeraObrazovanja('{$id}')";
		$rezProvjera = mysql_query($upitProvjera) or die(mysql_error());
		$ucitavaProvjera = mysql_fetch_array($rezProvjera);
		$podaciProvjera = $ucitavaProvjera['obrazovanje_idObrazovanje'];
		
		zatvori($konekcija);
		
		if($podaciProvjera >= 1)
		{
			$upitUpdate = "call updateObrazovanje('{$id}', '{$osnovnaSkola}', '{$srednjaSkola}','{$fakultet}', '{$idSS}')";
			$rezUpdate = mysql_query($upitUpdate) ;
			if($upitUpdate) {
				header("location:profil.php");
			}
			else { 
				?>
				  <script type="text/javascript">
				  
				  alert("Greska!");
					history.back();
					
				  </script>
				<?php 
			}
		}
		else{
		zatvori($konekcija);
			$upitObrazovanje = "call insertObrazovanjeKorisnik($id, '{$osnovnaSkola}', '{$srednjaSkola}','{$fakultet}', '{$idSS}')";
			$rezObrazovanje=mysql_query($upitObrazovanje);
			if($rezObrazovanje){
				header("location:profil.php");
			}
			else { 
				?>
				  <script type="text/javascript">
				  
				  alert("Greska!");
					history.back();
					
				  </script>
				<?php 
			}
		}
		
?>