<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stil_pocetna.css">
<title>Baza zaposlenika Prirodno-matematičkog fakulteta</title>
<link rel="icon" type="image/jpg" href="logo_pmf.png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="pretraga_jquery.js">
</script>
</head>
<?php

require_once("korisnik.php");
$korisnik = new Korisnik("","","","","","","","","");
//$pretraga = $_POST['pretraga'];
/*$pretraga;
if(isset($_POST['pretraga'])){
	$pretraga = $_POST['pretraga'];}*/
	
$pretraga = isset($_POST['pretraga']) ? $_POST['pretraga'] : '';
	
$podaci = $korisnik->pretraga($pretraga);


?>
<body>

<!--zaglavlje-->
<div id="zaglavlje">
	<ul>
      <li><a href="pocetna.php">POČETNA</a></li>
      <li><a href="profil.php">PROFIL</a></li>
      <li><a href="izvjestaji.php">IZVJEŠTAJI</a></li>
      <li><a href="pomoc.php">POMOĆ</a></li>
      <li><a href="index.php">ODJAVA</a></li>
    </ul> 
</div>

<div id="glavniOmotac">

<div id="gornjiDioOmotaca">

<form name="formaZaBackup" method="post" action="">
<button id="backup" name="backup" formaction="backup2.php">BACK UP</button>
</form>

<form name="formaZaPretragu" method="post">
<input type="text"  id="unosPretrage" name="pretraga" value="" placeholder="Pretraga..." />
<input type="submit" name="dgmPretraga" value="TRAŽI" id="trazi" formaction="pretraga2.php">
</form>
 
</div>

<div id="lijeviDio">
	<ul id="vertikalniMeni">
        <li> SVI UPOSLENICI</li>
        <li> ODSJEK MATEMATIKA</li>
        <li> ODSJEK FIZIKA </li>
        <li> ODSJEK BIOLOGIJA </li>
        <li> ODSJEK HEMIJA </li>
        <li> ODSJEK GEOGRAFIJA </li>
       
	</ul>
</div>

<div id="dioZaPrikaz">
<table id="tabelaPretraga" class="tabeleKorisnika">
<tr><th>Ime</th><th>Prezime</th><!--<td>Odsjek</td><td>Radno mjesto</td>--></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td>";
                    echo $podaci[$i]['ime'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['prezime'] ;
                    echo "</td>";/*
					echo "<td>";
                    echo $podaci[$i]['nazivOdsjek'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['nazivRadnoMjesto'] ;
                    echo "</td>";*/
					echo "</tr>";
                }?>
</table>

</div>
</div><!--kraj diva glavniOmotac-->

<div id="podnozje">
<h4>Informacioni sistem Prirodno-matematičkog fakulteta</h4>
<h5>Copyright&copy; 2016</h5>
</div>

</body>
</html>
