<?php
session_start();
require_once("konekcija.php");

$nazivNaucniRad = $_POST['nazivNaucniRad'];
$datum = $_POST['datum'];
$opis = $_POST['opis'];
$autori = $_POST['autori'];

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$user = $_SESSION['username'];
//upit koji mi vrada idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die("nije proslo");
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];

$upitAI = "call insertNaucniRadKorisnik('{$id}', '{$nazivNaucniRad}', '{$datum}', '{$opis}' ,'{$autori}')";
$rezAI = mysql_query($upitAI);
if($rezAI){ 
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


?>