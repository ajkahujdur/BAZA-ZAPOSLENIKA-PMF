<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stil_backup.css">
<title>Baza uposlenika Prirodno-matematičkog fakulteta</title>
<link rel="icon" type="image/jpg" href="logo_pmf.png"/>
</head>
<link rel="stylesheet" type="text/css" href="stil_backup.css">
<?php

  
     if(!IsSet($_POST['ukloni']))
	 {
              $pomocna=false;
			  $naziv_arhive=date("m.d.y"); 
			  
     }
     else 
	 {
	        
	        $naziv_arhive= $_POST['naziv_arhive'];
			@mysql_connect('localhost','root');
			mysql_select_db("bazauposlenika");
			if($naziv_arhive)
			{
			
			
	            $Konekcija=@mysql_connect('localhost','root') or die ('Konekcija je pukla'); 
				mysql_select_db('bazauposlenika');

				$tempstaza = 'C:/wamp/www/BAZA ZAPOSLENIKA-PMF/backup/';
				
                $tabele=array('akademsko_iskustvo','knjiga','korisnik','korisnik_knjiga','korisnik_naucnirad','korisnik_obrazovanje','korisnik_projekat',
				'korisnik_vrsta_projekta','mentorstva','naucni_radovi','obrazovanje','odsjek','projekat','radno_mjesto','radnomjesto_korisnik','radnomjesto_odsjek',
				'slika_korisnik','strucna_sprema','tip_korisnika','vrsta_projekta');

                $backuptabele=array('akademsko_iskustvo.sql','knjiga.sql','korisnik.sql','korisnik_knjiga.sql','korisnik_naucnirad.sql','korisnik_obrazovanje.sql','korisnik_projekat.sql',
				'korisnik_vrsta_projekta.sql','mentorstva.sql','naucni_radovi.sql','obrazovanje.sql','odsjek.sql','projekat.sql','radno_mjesto.sql','radnomjesto_korisnik.sql','radnomjesto_odsjek.sql',
				'slika_korisnik.sql','strucna_sprema.sql','tip_korisnika.sql','vrsta_projekta.sql');

                $staza=$tempstaza.$naziv_arhive.'/';
 			
				$pomocna=true;
        	}
			else { ?>
			<br>
			<h2><b><font face="Trebuchet MS"><center>Niste unijeli naziv arhive . Pokusajte ponovo!!!</b></font></h2>
			<center>
			<form method=POST action="">
			<input name="submit" type="submit" value="Natrag.. "></form>
		    <?php exit;}
			
	}  
	
if($pomocna){

if (file_exists($staza)) {?>  

<br>
			<h2><b><font face="Trebuchet MS"><center>Izvrsen update za danas!!!</b></font></h2>
			<center>
			<form method=POST action="pocetna.php">
			<input name="submit" type="submit" value="Pocetna "></form>
		    <?php  
			exit; }
else {  

mkdir($staza, 0700);

for($i=0;$i<20;$i++)
{

  $backupFile =$staza.$backuptabele[$i];  
  $upit= "select * from $tabele[$i] into outfile '$backupFile'";
  $rezupita = mysql_query($upit);
  if(!$rezupita){
  ?>
			<br>
			<h2><b><font face="Trebuchet MS"><center>Doslo je do greske tokom stavljanja u arhivu.Pokusajte ponovo!!!</b></font></h2>
			<center>
			<form method=POST action="">
			<input name="submit" type="submit" value="Natrag.. "></form>
		    <?php 
			exit;
  }
}
}?>
<br>
			<h2><b><font face="Trebuchet MS"><center>Uspjesno ste pohranili podatke u arhivu!!!</b></font></h2>
			<center>
			<form method=POST action="pocetna.php">
			<input name="submit" type="submit" value="Početna "></form>

<?php }
else {
?>
<!--////////////////////////////////////////-->
<div id="dioZaPrikazivanje">
<table>
<tr><td>
<h1>Stavljanje podataka u arhivu :</h1>
<br><br>
</td></tr>
<tr><td>
<form method=POST  action="<?php echo $_SERVER['PHP_SELF']; ?>">

<table id="tabelaBackup" cellpadding="10" cellspacing="5"> 
<tr> 
   <td >Napomena:</td>
   <td ><textarea name="terapija" cols="50" rows="4" readonly="readonly" >Pokretanjem arhiviranja podaci ce biti sacuvani na jednom od ponudjenih diskova radi zastite u slucaju kvara diska ili nestanka racunara. Pozeljno je vratiti arhiviranje jednom mjesecno kako ne bi doslo do  gubljenja vaznih podataka.Za pokretanje arhiviranja pritisnite dugme Arhiviraj</textarea></td>
 </tr>

<tr><td > Naziv arhive po defaultu : </td> <td > <input type="text" name="naziv_arhive"  value="<?php echo $naziv_arhive; ?>"></input></td> </tr>
			
</table>

<input name="ukloni" type="submit" value="Arhiviraj" id="arhivirajDugme">
</form>


</td></tr>
</table>	
</div>	
<?php
}?>
<body>

<!--zaglavlje-->
<div id="zaglavlje">
	<ul>
      <li><a href="pocetna.php">POČETNA</a></li>
      <li><a href="profil.php">PROFIL</a></li>
      <li><a href="izvjestaji.php">IZVJEŠTAJI</a></li>
      <li><a href="help.php">POMOĆ</a></li>
      <li><a href="index.php">ODJAVA</a></li>
    </ul> 
</div>
<div id="podnozje">
<h4>Informacioni sistem Prirodno-matematičkog fakulteta</h4>
<h5>Copyright&copy; 2016</h5>
</div>

</body>
</html>
