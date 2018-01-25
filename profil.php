<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="stil_profil.css">
<link rel="icon" type="image/jpg" href="logo_pmf.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--uključeni linkovi za datepicker-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="datepicker.js"></script>
<script src="prikazivanje_profil.js"></script>

<?php
session_start();
require_once("konekcija.php");

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");
$user = $_SESSION['username'];
$upit1 = "select * from korisnik where username='".$user."'";
$rez1 =  @mysql_query($upit1) or die($upit1."<br>".mysql_error());
$podaci = mysql_fetch_array($rez1);
$id  = $podaci['idKorisnik'];

$upitSlika = "select slika from slika_korisnik where korisnik_idKorisnik = '".$id."'";
$rezSlika = mysql_query($upitSlika) or die(mysql_error());
$podaciSlika = mysql_fetch_array($rezSlika);
$fetch = $podaciSlika['slika'];
?>

<title>Profil </title>
</head>

<body>
<div id="zaglavlje">
	<ul>
      <li><a href="pocetna.php">POČETNA</a></li>
      <li><a href="profil.php">PROFIL</a></li>
      <li><a href="izvjestaji.php">IZVJEŠTAJI</a></li>
      <li><a href="pomoc.php">POMOĆ</a></li>
      <li><a href="index.php">ODJAVA</a></li>
    </ul> 
</div>

<div id="desniDio">

<div id="gornjiDioDesnogDijela">
</div>

<div id="donjiDioDesnogDijela">
</div>

</div>

<div id="slika">
<?php
echo '<img id="img" src="uploads/'.$fetch.'" style="width:100%;height:100%"/ alt="Dodajte svoju sliku profila...">';
?>
</div>
<form name="upload" method="post" enctype="multipart/form-data" action="upload.php">
<input type="file" name="file" id="ucitajFile"/>
<button type="submit" name="btn-upload" id="dugmeUcitaj">Učitaj sliku</button>
</form>

<div id="osnovniPodaci">
<!--ovdje ce se prikazivati tabela sa osnovnim informacijama-->
</div>

<div id="dodatniPodaci">
  <ul>
	<li> Obrazovanje </li>
    <li> Akademsko iskustvo </li>
    <li> Naučni radovi,knjige i projekti </li>
    <li> Ostale informacije </li>
  </ul>
</div>

<div id="podnozje">
<h4>Informacioni sistem Prirodno-matematičkog fakulteta</h4>
<h5>Copyright&copy; 2016</h5>
</div>



</body>
</html>
