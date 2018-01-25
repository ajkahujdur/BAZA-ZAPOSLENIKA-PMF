<?php
session_start();
require_once("konekcija.php");
require_once("korisnik.php");

		$datumRodjenja = $_POST['datumRodjenja'];
		$akademskoZvanje = $_POST['akademskoZvanje'];
		$odsjek = $_POST['odsjek'];

		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		
		function zatvori($konekcija){
			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");
		}
		
		$user = $_SESSION['username'];
		//upit koji mi vrada idKorisnika na osnovu usera u sesiji
		$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
		$rez = mysql_query($idUpit) or die("nije proslo");
		$ucitava = mysql_fetch_array($rez);
		$id = $ucitava['idKorisnik'];	
		
		//procedura za update datumRodjenja
		$u1 = "call updateDatumRodjenja('$id','{$datumRodjenja}')";
		$r1 = mysql_query($u1) or die("nije proslo");
		if($r1) return true;
		else { 
			?>
			  <script type="text/javascript">
			  
			  alert("Greska!");
				history.back();
				
			  </script>
			<?php 
		}
		
		
		$upitProvjeraOdsjeka = "call pr2($id)";
		$rezultatProvjeraOdsjeka = mysql_query($upitProvjeraOdsjeka) or die(mysql_error());
		$rezultatFetchOdsjek = mysql_fetch_array($rezultatProvjeraOdsjeka);
		$rezultatOdsjek = $rezultatFetchOdsjek['odsjek_idOdsjek'];
  
		zatvori($konekcija);
  
		$aa = "call pr1($id)"; 
		$rezultatProvjeraAkademskogZvanja = mysql_query($aa) or die(mysql_error());
		$rezultatFetchZvanje = mysql_fetch_array($rezultatProvjeraAkademskogZvanja);
		$rezultatZvanje = $rezultatFetchZvanje['radno_mjesto_idRadnoMjesto'];	
		//koristite uvijek mysql_error();
		zatvori($konekcija);
		
		$upitOdsjek = "call idOdsjek('{$odsjek}')";
		$rezOdsjek = mysql_query($upitOdsjek) or die(mysql_error());
		$ucitavaOdsjek = mysql_fetch_array($rezOdsjek);
		$idOdsjek = $ucitavaOdsjek['idOdsjek'];
  
		zatvori($konekcija);
		
		if($rezultatZvanje >= 1 and $rezultatOdsjek >= 1){
			$u2 = "call updateOdsjek($id, '{$idOdsjek}')";
			$r2 = mysql_query($u2) or die(mysql_error());
			zatvori($konekcija);
			$u3 = "call updateAkademskoZvanje($id, '{$akademskoZvanje}')";
			$r3 = mysql_query($u3) or die(mysql_error());
			if($r2 and $r3) header("location:profil.php");
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
			$upit1 = "call insertZvanjeOdsjek($id, '{$idOdsjek}', '{$akademskoZvanje}')";
			$rezultat1 = mysql_query($upit1);
			if($upit1) header("location:profil.php");
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