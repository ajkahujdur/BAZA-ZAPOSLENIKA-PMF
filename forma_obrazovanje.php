<html>

<body>
<?php
session_start();
require_once("korisnik.php");

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");
$user = $_SESSION['username'];

function zatvori($konekcija){
			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");
		}

$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
$rez = mysql_query($idUpit) or die("nije proslo");
$ucitava = mysql_fetch_array($rez);
$id = $ucitava['idKorisnik'];

$upit1 = "select obrazovanje_idObrazovanje from korisnik_obrazovanje where korisnik_idKorisnik='".$id."'";
$rez1 = mysql_query($upit1);
$ucitava1 = mysql_fetch_array($rez1);
$idObrazovanje = $ucitava1['obrazovanje_idObrazovanje'];

$upitPodaci = "select * from obrazovanje where idObrazovanje = '".$idObrazovanje."'";
$rezPodaci = mysql_query($upitPodaci);
$podaci = mysql_fetch_array($rezPodaci);

//zatvori($konekcija);

$upitSS = "call strucnaSpremaKorisnik('{$id}')";
$rezSS = mysql_query($upitSS) or die("nije proslo");
$podaciSS = mysql_fetch_array($rezSS);


zatvori($konekcija);




?>

<form name="f1" action="" method="post">
<table id="tabelaObrazovanje">
<tr><th>Osnovna škola: </th><td> <input type = "text" name = "osnovnaSkola" value="<?php echo $podaci['osnovnaSkola']; ?>"></td></tr>
<tr> <th>Srednja škola: </th><td><input type = "text" name = "srednjaSkola" value="<?php echo $podaci['srednjaSkola']; ?>"></td></tr>
<tr><th> Fakultet: </th><td>  <input type = "text" name = "fakultet" value = "<?php echo $podaci['fakultet']; ?>"></td></tr>
<tr><th>Stručna sprema:</th><td><select name="strucnaSprema" id="strucnaSprema">
	<option value = "SSS srednja strucna sprema" > SSS srednja stručna sprema </option>
	<option value = "VSS visa strucna sprema" > VSS visa stručna sprema </option>
	<option value = "VSS visoka strucna sprema" > VSS visoka stručna sprema </option>
	<option value = "Magistar specijalista" > Magistar specijalista </option>
	<option value = "Magistar nauka" > Magistar nauka </option>
	<option value = "Doktor nauka" > Doktor nauka </option>
	<option value = "<?php echo $podaciSS['nazivStrucnaSprema'];?>" selected = "selected"> <?php echo $podaciSS['nazivStrucnaSprema']; ?> </option>
	</select></td><tr>
<tr><td><input type="submit" value="Spremi" formaction="obrazovanje_azuriranje.php" class="dugmeSpremi"></td><tr>
</table>

</form>

</body>

</html>