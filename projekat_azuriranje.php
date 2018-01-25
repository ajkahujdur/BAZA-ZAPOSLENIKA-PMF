<?php
session_start();
require_once("konekcija.php");

$voditeljProjekta = $_POST['voditeljProjekta'];
$institucija_finansiranje = $_POST['institucija_finansiranje'];
$godinaPocetka = $_POST['godinaPocetka'];
$godinaZavrsetka = $_POST['godinaZavrsetka'];
$nazivProjekta = $_POST['nazivProjekta'];

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$user = $_SESSION['username'];
//upit koji mi vrada idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die(mysql_error());
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];


$upitProjekat = "call insertProjekat('{$id}', '{$voditeljProjekta}', '{$institucija_finansiranje}', '{$godinaPocetka}', '{$godinaZavrsetka}', '{$nazivProjekta}')";

$rezProjekat = mysql_query($upitProjekat) ;
if($rezProjekat){ 
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