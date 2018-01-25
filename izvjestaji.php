<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izvještaji</title>
<link rel="stylesheet" type="text/css" href="stil_izvjestaji.css">
<link rel="icon" type="image/jpg" href="logo_pmf.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="izvjestaji_jquery.js"></script>
</head>
<?php
require_once("konekcija.php");

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$upitMatematika = "call naucniRadOdsjek(1)";
$rezMatematika = mysql_query($upitMatematika) or die(mysql_error());
$fetchMatematika = mysql_fetch_array($rezMatematika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitFizika = "call naucniRadOdsjek(2)";
$rezFizika= mysql_query($upitFizika) or die(mysql_error());
$fetchFizika= mysql_fetch_array($rezFizika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitHemija = "call naucniRadOdsjek(3)";
$rezHemija= mysql_query($upitHemija) or die(mysql_error());
$fetchHemija= mysql_fetch_array($rezHemija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitGeografija= "call naucniRadOdsjek(5)";
$rezGeografija= mysql_query($upitGeografija) or die(mysql_error());
$fetchGeografija= mysql_fetch_array($rezGeografija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitBiologija= "call naucniRadOdsjek(4)";
$rezBiologija= mysql_query($upitBiologija) or die(mysql_error());
$fetchBiologija= mysql_fetch_array($rezBiologija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");
			
$upitKnjigeMatematika = "call brojKnjigaNaOdsjeku(1)";
$rezKnjigeMatematika = mysql_query($upitKnjigeMatematika) or die(mysql_error());
$fetchKnjigeMatematika= mysql_fetch_array($rezKnjigeMatematika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitKnjigeFizika = "call brojKnjigaNaOdsjeku(2)";
$rezKnjigeFizika = mysql_query($upitKnjigeFizika) or die(mysql_error());
$fetchKnjigeFizika= mysql_fetch_array($rezKnjigeFizika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitKnjigeHemija = "call brojKnjigaNaOdsjeku(3)";
$rezKnjigeHemija = mysql_query($upitKnjigeHemija or die(mysql_error()));
$fetchKnjigeHemija = mysql_fetch_array($rezKnjigeHemija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitKnjigeGeografija = "call brojKnjigaNaOdsjeku(5)";
$rezKnjigeGeografija = mysql_query($upitKnjigeGeografija) or die(mysql_error());
$fetchKnjigeGeografija = mysql_fetch_array($rezKnjigeGeografija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitKnjigeBiologija = "call brojKnjigaNaOdsjeku(4)";
$rezKnjigeBiologija = mysql_query($upitKnjigeBiologija) or die(mysql_error());
$fetchKnjigeBiologija = mysql_fetch_array($rezKnjigeBiologija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitProjektiMatematika = "call brojProjekataNaOdsjeku(1)";
$rezProjektiMatematika = mysql_query($upitProjektiMatematika) or die(mysql_error());
$fetchProjektiMatematika = mysql_fetch_array($rezProjektiMatematika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");
			
$upitProjektiFizika = "call brojProjekataNaOdsjeku(2)";
$rezProjektiFizika = mysql_query($upitProjektiFizika) or die(mysql_error());
$fetchProjektiFizika = mysql_fetch_array($rezProjektiFizika);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");			

$upitProjektiHemija = "call brojProjekataNaOdsjeku(3)";
$rezProjektiHemija = mysql_query($upitProjektiHemija) or die(mysql_error());
$fetchProjektiHemija = mysql_fetch_array($rezProjektiHemija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitProjektiGeografija = "call brojProjekataNaOdsjeku(5)";
$rezProjektiGeografija = mysql_query($upitProjektiGeografija) or die(mysql_error());
$fetchProjektiGeografija = mysql_fetch_array($rezProjektiGeografija);

			$konekcija->zatvoriBazu();	
			$konekcija->konektujSe();
			$konekcija->otvoriBazu("bazauposlenika");

$upitProjektiBiologija = "call brojProjekataNaOdsjeku(4)";
$rezProjektiBiologija = mysql_query($upitProjektiBiologija) or die(mysql_error());
$fetchProjektiBiologija = mysql_fetch_array($rezProjektiBiologija);

?>

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

<div id="lijeviDio">

<div id="naucniRadoviNaslov">
<h1>Naučni radovi</h1>
</div>

<table id="tabelaIzvjestajiNaucnihRadova" >
<tr>
<td><input type="submit" name="matematikaIzvjestaji" value="Matematika"></td>
<td><input type="button" value="<?php echo $fetchMatematika[0];?>" disabled="disabled"/></td>
</tr>
<tr> 
<td><input type="submit" class="dugmadZaIzvjestaje" name="fizikaIzvjestaji" value="Fizika"></td>
<td><input type="button" value="<?php echo $fetchFizika[0];?>"  disabled="disabled"/></td>
</tr>
<tr> 
<td><input type="submit" name="hemijaIzvjestaji" value="Hemija"></td>
<td><input type="button" value="<?php echo $fetchHemija[0];?>"  disabled="disabled"/></td>
</tr>
<tr> 
<td><input type="submit" name="geografijaIzvjestaji" value="Geografija"></td>
<td><input type="button" value="<?php echo $fetchGeografija[0];?>"  disabled="disabled"/></td>
</tr>
<tr>
<td> <input type="submit" name="biologijaIzvjestaji" value="Biologija"></td>
<td><input type="button" value="<?php echo $fetchBiologija[0];?>"  disabled="disabled"/></td>
</tr>
</table>

<div id="akademskaZvanjaNaslov">
<h1>Akademska zvanja</h1>
</div>

<table id="tabelaIzvjestajAkademskihZvanja" >
<tr><td><input type="submit" name="redovniProfesor" value="Redovni profesori" ></td></tr>
<tr><td><input type="submit" name="vanredniProfesor" value="Vanredni profesor"  ></td></tr>
<tr><td> <input type="submit" name="docent" value="Docent" ></td></tr>
<tr><td> <input type="submit" name="visiAsistent" value="Viši asistent"  ></td></tr>
<tr><td><input type="submit" name="asistent" value="Asisent" ></td></tr>
<tr><td> <input type="submit" name="strucniSaradnik " value="Stručni saradnik" ></td></tr>
<tr><td> <input type="submit" name="laborant" value="Laborant" ></td></tr>
<tr><td> <input type="submit" name="nastavnikSpoljniSaradnik" value="Nastavnik-spoljni saradnik" ></td></tr>
<tr> <td> <input type="submit" name="saradnik" value="Saradnik"></td></tr>
</table>

<div id="knjigeNaslov">
<h1>Knjige</h1>
</div>

<table id="tabelaIzvjestajiKnjiga" >
<tr> <td><input type="submit" name="knjigeMatematika" value="Knjige matematika" ></td><td>
<input type="button" value="<?php echo $fetchKnjigeMatematika[0];?>"  disabled="disabled"/></td></tr>
<tr> <td><input type="submit" name="knjigeFizika" value="Knjige fizika"></td>
<td><input type="button" value="<?php echo $fetchKnjigeFizika[0];?>" disabled="disabled"/></td></tr>
<tr> <td><input type="submit" name="knjigeHemija" value="Knjige hemija"></td>
<td><input type="button" value="<?php echo $fetchKnjigeHemija[0];?>"  disabled="disabled"/></td></tr>
<tr> <td><input type="submit" name="knjigeGeografija" value="Knjige geografija" ></td>
<td><input type="button" value="<?php echo $fetchKnjigeGeografija[0];?>"  disabled="disabled"/></td></tr>
<tr> <td><input type="submit" name="knjigaBiologija" value="Knjige biologija" ></td>
<td><input type="button" value="<?php echo $fetchKnjigeBiologija[0];?>"  disabled="disabled"/></td></tr>
</table>

<div id="projektiNaslov">
<h1>Projekti</h1>
</div>
<table id="tabelaIzvjestajiProjekti" >
<tr><td> <input type="submit" name="projektiMatematika" value="Projekti matematika"></td><td>
<input type="button" value="<?php echo $fetchProjektiMatematika[0];?>"  disabled="disabled"/></td></tr>
<tr><td><input type="submit" name="projektiFizika" value="Projekti fizika"  ></td><td>
<input type="button" value="<?php echo $fetchProjektiFizika[0];?>"  disabled="disabled"/></td></tr>
<tr><td><input type="submit" name="projektiHemija" value="Projekti hemija"  ></td><td>
<input type="button" value="<?php echo $fetchProjektiHemija[0];?>"  disabled="disabled"/></td></tr>
<tr><td><input type="submit" name="projektiGeografija" value="Projekti geografija" ></td><td>
<input type="button" value="<?php echo $fetchProjektiGeografija[0];?>"  disabled="disabled"/></td></tr>
<tr><td><input type="submit" name="projektiBiologija" value="Projekti biologija"  ></td><td>
<input type="button" value="<?php echo $fetchProjektiBiologija[0];?>"  disabled="disabled"/></td></tr>
</table>


</div>

<div id="desniDio">
</div>
<div id="podnozje">
<h4>Informacioni sistem Prirodno-matematičkog fakulteta</h4>
<h5>Copyright&copy; 2016</h5>
</div>
</body>
</html>