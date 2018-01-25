
<?php
session_start();
require_once("konekcija.php");

$nazivKnjige = $_POST['nazivKnjige'];
$isbn = $_POST['isbn'];
$izdavac = $_POST['izdavac'];
$godinaIzdavanja = $_POST['godinaIzdavanja'];
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


$upitKnjiga = "call ikk('{$id}', '{$nazivKnjige}', '{$isbn}', '{$izdavac}', '{$godinaIzdavanja}', '{$autori}' )";
$rezKnjiga = mysql_query($upitKnjiga) or die(mysql_error());
if($rezKnjiga){ 
	header("location:profil.php");
}
else 
{ 
	?>
	  <script type="text/javascript">
	  
	  alert("Greska!");
		history.back();
		
	  </script>
	<?php 
}

?>