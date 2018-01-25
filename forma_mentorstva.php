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
$podaci = $korisnik->vratiMentorstva($id);



?>

<body>


<form name = "f1" method="post">
<table id="tabelaMentorstva" class="tabele">
<tr><th>Mentor studentu</th><th>Datum</th><th>Ciklus studija</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td>";
                    echo $podaci[$i]['mentor_kome'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['datum'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['ciklus_studija'] ;
                    echo "</td>";
					echo "</tr>";
                }?>
</table>
<input type="submit" name="azuriranjeMentorstva" value="Spremi" formaction="mentorstva_azuriranje.php" id="spremiMentorstvoDugme"class="spremiUnesenoDugme">
</form>
<input type = "submit" value = "Dodaj"  id="novoMentorstvoDugme" class="novoDugme">

</body>

</html>