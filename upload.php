<?php
session_start();
require_once("konekcija.php");

$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];//pod ovim imenom se slika smjesta u bazu, gdje se na pocetak slike dodaj slucajan broj od 1000 do 100000
 $file_loc = $_FILES['file']['tmp_name'];//trenutna putanja datoteke
 $file_size = $_FILES['file']['size'];
 $file_name = $_FILES['file']['name'];
 $folder="uploads/";
 
 		$user = $_SESSION['username'];
		//upit koji mi vrada idKorisnika na osnovu usera u sesiji
		$idUpit = "select idKorisnik from korisnik where username = '".$user."'";
		$rez = mysql_query($idUpit) or die("nije proslo");
		$ucitava = mysql_fetch_array($rez);
		$id = $ucitava['idKorisnik'];	
		
$new_size = $file_size/1024;  
 
 // pise ime slike malim slovima
 $new_file_name = strtolower($file);
//mijenja prazno mjesto sa - u varijabli new_file_name
 $final_file=str_replace(' ','-',$new_file_name);
 
 $upitProvjeraSlike = "select * from slika_korisnik where korisnik_idKorisnik = '".$id."'";
 $rezProvjeraSlike = mysql_query($upitProvjeraSlike);
 $n = mysql_num_rows($rezProvjeraSlike);
 if($n == 0)
 { 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO slika_korisnik(slika,slika_velicina,slika_ime, korisnik_idKorisnik) VALUES('{$final_file}','{$new_size}', '{$file_name}', '{$id}')";
$rezSql = mysql_query($sql) or die(mysql_error());
 if($rezSql) header("location:profil.php");
 }
 else
 {
	  move_uploaded_file($file_loc,$folder.$file);
	 $upitAzurSlika = "call updateSlika('{$final_file}','{$new_size}', '{$file_name}', '{$id}')";
	 $rezAzurSlika = mysql_query($upitAzurSlika) or die(mysql_error());
 	if($rezAzurSlika) header("location:profil.php");
	}
 
 
}

?>