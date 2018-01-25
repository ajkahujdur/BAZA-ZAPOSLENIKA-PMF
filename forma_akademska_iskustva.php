<html>
<script src="prikazivanje_profil.js"></script>
<link rel="stylesheet" type="text/css" href="stil_profil.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="datepicker.js"></script>
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
$podaci = $korisnik->vratiAkademskaIskustva($id);



?>

<body>



<form name = "f1" method="post" >
<table id="tabelaAkademskaIskustva" class="tabele">
<tr><th>Datum od</th><th>Datum do</th><th>Opis</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td width='20%'>";
                    echo $podaci[$i]['datumOd'] ;
                    echo "</td>";
					echo "<td width='20%'>";
                    echo $podaci[$i]['datumDo'] ;
                    echo "</td>";
					echo "<td>";
					echo"<textarea rows='2' cols='50' readonly>";
                    echo $podaci[$i]['opis'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "</tr>";
                }?>
</table>
<input type="submit" name="azuriranjeAkademskoIskustvo" value="Spremi" formaction="akademsko_iskustvo_azuriranje.php" id="spremiAkadIskustvoDugme" class="spremiUnesenoDugme">
</form>
<input type ="submit" value = "Dodaj" id="novoAkadIskustvoDugme" class="novoDugme">




</body>

</html>