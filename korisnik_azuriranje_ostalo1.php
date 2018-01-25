<?php
session_start();
require_once("konekcija.php");
require_once("korisnik.php");

		$djevojackoPrezime = $_POST['djevojackoPrezime'];
		$imeRoditelja = $_POST['imeRoditelja'];
		$mjestoRodjenja = $_POST['mjestoRodjenja'];
		$drzavaRodjenja = $_POST['drzavaRodjenja'];
		$adresaStanovanja = $_POST['adresaStanovanja'];
		$opcinaStanovanja = $_POST['opcinaStanovanja'];
		$drzavljanstvo = $_POST['drzavljanstvo'];
		$nacionalnost = $_POST['nacionalnost'];
		$vozackaDozvola = $_POST['vozackaDozvola'];
		$telefonPosao = $_POST['telefon'];
				
		
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		
		$user = $_SESSION['username'];

		$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
		$rez = mysql_query($idUpit);
		$ucitava = mysql_fetch_array($rez);
		$id = $ucitava['idKorisnik'];
		
		$u2 = "call updateOstalo($id, '{$mjestoRodjenja}', '{$adresaStanovanja}', '{$drzavaRodjenja}', '{$djevojackoPrezime}', '{$imeRoditelja}', '{$opcinaStanovanja}', '{$telefonPosao}', '{$nacionalnost}', '{$drzavljanstvo}', '{$vozackaDozvola}')";
		$r2 = mysql_query($u2);
		
		if($r2)
			//echo "id je: ".$ucitava[0];
			
			header("location:profil.php");
		
		else { 
				?>
				  <script type="text/javascript">
				  
				  alert("Greska!");
					history.back();
					
				  </script>
				<?php 
			}
		
?>