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
$podaci = $korisnik->vratiKnjige($id);



?>

<body>

<form name = "f1" method="post">
<table id="tabelaKnjige" class="tabele">
<tr><th>Naziv knjige</th><th>Autori</th><th>ISBN</th><th>Izdavač</th><th>Datum izdavanja</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td width='30%'>";
					echo"<textarea rows='2' cols='20' readonly>";
                    echo $podaci[$i]['nazivKnjige'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td width='30%'>";
					echo"<textarea rows='2' cols='20' readonly>";
                    echo $podaci[$i]['autori'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td width='10%'>";
                    echo $podaci[$i]['isbn'] ;
                    echo "</td>";
					echo "<td width='30%'>";
					echo"<textarea rows='2' cols=20' readonly>";
                    echo $podaci[$i]['izdavac'] ;
					echo "</textarea>";
                    echo "</td>";
					echo "<td width='15%'>";
                    echo $podaci[$i]['godinaIzdavanja'] ;
                    echo "</td>";
					echo "</tr>";
                }?>
</table>
<input type="submit" name="azuriranjeKnjige" value="Spremi" formaction="knjiga_azuriranje.php" id="spremiKnjiguDugme" class="spremiUnesenoDugme">
</form>
<input type = "submit" value = "Dodaj" id="novaKnjigaDugme" class="novoDugme">


</body>

</html>