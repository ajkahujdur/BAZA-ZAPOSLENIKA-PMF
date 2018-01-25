<html>
<link rel="stylesheet" type="text/css" href="stil_profil.css">
<body>


<?php
session_start();
require_once("korisnik.php");
$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");
$user = $_SESSION['username'];
$upit1 = "select * from korisnik where username='".$user."'";
$rez1 =  @mysql_query($upit1) or die($upit1."<br>".mysql_error());
$podaci = mysql_fetch_array($rez1);
$id  = $podaci['idKorisnik'];


?>
<form name="f1" method="post" action="" >
<table id="tabelaOstaleInformacije">
<tr><th> Djevojačko prezime: </th><td><input type="text" name="djevojackoPrezime" value="<?php echo $podaci['djevojacko_prezime']; ?>" ></td></tr>
<tr><th>  Ime roditelja: </th><td>  <input type="text" name="imeRoditelja" value="<?php echo $podaci['ime_roditelja']; ?>" ></td></tr>
<tr><th>   Mjesto rođenja:</th><td> <input type="text" name="mjestoRodjenja" value="<?php echo $podaci['mjestoRodjenja']; ?>" ></td></tr>
<tr><th>   Država rođenja:</th><td> <input type="text" name="drzavaRodjenja" value="<?php echo $podaci['drzava_rodjenja']; ?>" ></td></tr>
<tr><th>   Adresa stanovanja:</th><td> <input type="text" name="adresaStanovanja" value="<?php echo $podaci['adresaStanovanja']; ?>" ></td></tr>
<tr><th>   Općina stanovanja:</th><td> <input type="text" name="opcinaStanovanja" value="<?php echo $podaci['opcina_stanovanja']; ?>" ></td></tr>
<tr><th>  Državljanstvo: </th><td><input type="text" name="drzavljanstvo" value="<?php echo $podaci['drzavljanstvo']; ?>" ></td></tr>
<tr><th>   Nacionalnost: </th><td><input type="text" name="nacionalnost" value="<?php echo $podaci['nacionalnost']; ?>" ></td></tr>
<tr><th>   Vozačka dozvola: </th><td><input type="text" name="vozackaDozvola" value="<?php echo $podaci['vozacka_dozvola']; ?>" ></td></tr>
<tr><th>   Telefon (posao): </th><td><input type="text" name="telefon" value="<?php echo $podaci['telefon_posao']; ?>" ></td></tr>


<tr><td><input type="submit" name="dgmDod" value="Spremi" formaction="korisnik_azuriranje_ostalo1.php" class="dugmeSpremi"></td></tr>
</table>
</form>

</body>

</html>
