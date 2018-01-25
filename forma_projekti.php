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
//upit koji mi vrada idKorisnika na osnovu usera u sesiji
$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die("nije proslo");
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];


$korisnik = new Korisnik("","","","","","","","","");
$podaci = $korisnik->vratiProjekte($id);



?>

<body>


<form name = "f1" method="post">
<table id="tabelaProjekti" class="tabele">
<tr><th>Naziv projekta</th><th>Voditelj projekta</th><th>Institucija finansiranje</th><th>Godina početka</th><th>Godina završetka</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td>";
					echo"<textarea rows='2' cols='20' readonly>";
                    echo $podaci[$i]['nazivProjekta'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['voditeljProjekta'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['institucija_finansiranje'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['godinaPocetka'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['godinaZavrsetka'] ;
                    echo "</td>";
					
					echo "</tr>";
                }?>
</table>
<input type="submit" name="azuriranjeKnjige" value="Spremi" formaction="projekat_azuriranje.php" id="spremiProjekatDugme" class="spremiUnesenoDugme">
</form>
<input type = "submit" value = "Dodaj" id="noviProjekatDugme" class="novoDugme">

</body>

</html>