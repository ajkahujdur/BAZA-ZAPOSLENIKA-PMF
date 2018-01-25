<?php
session_start();
$user = $_SESSION['username'];
if(!isset($user))
header("location:login.php");
?>

<html>
<link rel="stylesheet" type="text/css" href="stil_profil.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="datepicker.js"></script>
<title>Pocetna</title>

<body>
<?php
require_once("korisnik.php");
$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");
//$user = $_SESSION['username'];
$upit1 = "select * from korisnik where username='".$user."'";
$rez1 =  @mysql_query($upit1) or die($upit1."<br>".mysql_error());
$podaci = mysql_fetch_array($rez1);
$id  = $podaci['idKorisnik'];

$upit2 = "call odsjekAkademskoZvanje($id)";
$rez2 = @mysql_query($upit2) or die($upit2."<br>".mysql_error());
$podaci1 = mysql_fetch_array($rez2);

?>
<form name="f1" method="post" action="" >
<table id="tabelaOsnovneInformacije">
<tr><th>Ime: </th><td><input type="text" disabled name="ime" value="<?php echo $podaci['ime']; ?>" ></td></tr>
<tr><th>Prezime: </th><td><input type="text"  disabled name="prezime" value="<?php echo $podaci['prezime']; ?>" ></td></tr>
<tr><th> Datum rodjenja: </th><td><input type="text" id="datepicker" name="datumRodjenja" value="<?php echo $podaci['datumRodjenja']; ?>" ></td></tr>
<tr><th>Odsjek:</th><td> <select name="odsjek" id="idOdsjek">
		<option value = "matematika" > matematika </option>
		<option value = "fizika" > fizika </option>
		<option value = "hemija" > hemija </option>
		<option value = "biologija" > biologija </option>
		<option value = "geografija" > geografija </option>
		<option value="<?php echo $podaci1['no']; ?>" selected="selected"><?php echo $podaci1['no']; ?></option>
		</select></td></tr>
<tr><th>Akademsko zvanje: </th><td><select name="akademskoZvanje" id="idAkademskoZvanje">
		<option value = "Redovni profesor" > Redovni profesor </option>
		<option value = "Vanredni profesor" > Vanredni profesor </option>
		<option value = "Docent" > Docent </option>
		<option value = "Visi asistent" > Visi asistent </option>
		<option value = "Asistent" > Asistent </option>
		<option value = "Strucni saradnik" > Strucni saradnik </option>
		<option value = "Laborant" > Laborant </option>
		<option value = "Nastavnik-spoljni saradnik" > Nastavnik - spoljni saradnik </option>
		<option value = "Saradnik" > Saradnik </option>
		<option value="<?php echo $podaci1['nrm']; ?>" selected="selected"><?php echo $podaci1['nrm']; ?></option>
		</select></td></tr>
<tr><th> Email: </th><td><input type="text" disabled name="email" value="<?php echo $podaci['email']; ?>" ></td></tr>
<tr><td><input type="submit" value="Spremi" name="dugmeSpremiOsnovnePodatke" class="dugmeSpremi" formaction="korisnik_azuriranje.php"/></td></tr>
</table>
</form>


</body>

</html>