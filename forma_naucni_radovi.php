<html>
<script src="prikazivanje_profil.js"></script>
<link rel="stylesheet" type="text/css" href="stil_profil.css">

<?php
session_start();

require_once("konekcija.php");
require_once("korisnik.php");


$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$user = $_SESSION['username'];
//upit koji mi vraca idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die("nije proslo");
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];


$korisnik = new Korisnik("","","","","","","","","");
$podaci = $korisnik->vratiNaucneRadove($id);


?>

<body>



<form name = "f1" method="post">
<table id="tabelaNaucniRad" class="tabele">
<tr><th>Naziv</th><th>Datum</th><th>Opis</th><th>Autori</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){

					echo "<tr>";
                    echo "<td width='30%'>";
					echo"<textarea rows='2' cols='25' readonly>";
                    echo $podaci[$i]['nazivNaucniRad'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td width='15%'>";
                    echo $podaci[$i]['datumObjave'] ;
                    echo "</td>";
					echo "<td width='30%'>";
					echo"<textarea rows='2' cols='25' readonly>";
                    echo $podaci[$i]['opisRada'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td width='20%'>";
					echo"<textarea rows='2' cols='15' readonly>";
                    echo $podaci[$i]['autor'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "</tr>";
                }?>
</table>
<input type="submit" name="azuriranjeNaucniRad" value="Spremi" formaction="naucni_rad_azuriranje.php" id="spremiNucniRadDugme" class="spremiUnesenoDugme">
</form>
<input type = "submit" value = "Dodaj" id="noviNaucniRadDugme" class="novoDugme">


</body>

</html>