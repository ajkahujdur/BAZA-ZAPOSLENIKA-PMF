<?php
session_start();
require_once("konekcija.php");

$mentor_kome = $_POST['mentor_kome'];
$datum = $_POST['datum'];
$ciklus_studija = $_POST['ciklus_studija'];

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$user = $_SESSION['username'];
//upit koji mi vrada idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die(mysql_error());
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];

$upitAI = "call insertMentorstva('{$mentor_kome}', '{$datum}', '{$ciklus_studija}','{$id}')";
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