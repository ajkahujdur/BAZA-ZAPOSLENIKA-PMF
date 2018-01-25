<?php
session_start();
require_once("konekcija.php");

$datumOd = $_POST['datumOd'];
$datumDo = $_POST['datumDo'];
$opis = $_POST['opis'];

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$user = $_SESSION['username'];
//upit koji mi vrada idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die("nije proslo");
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];

$upitAI = "call insertAkademskoIskustvo('{$id}', '{$datumOd}', '{$datumDo}', '{$opis}')";
$rezAI = mysql_query($upitAI);

if($rezAI){
	header("location:profil.php");
	//echo '<br>Vratite se na sva<a href="forma_akademska_iskustva.php"> akademska iskustva</a>';
}
else {?>
  <script type="text/javascript">
  
  alert("Unos podataka nije prosao!");
	history.back();
	
  </script>
<?php

}


?>