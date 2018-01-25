<html>
<body>

<?php

require_once("prijavaKorisnika.php");
$korIme = $_POST['username'];
$loz = $_POST['password'];
session_start();
if($_POST){
	$prijaviKorisnik = new prijavaKorisnika("","");

	if($prijaviKorisnik->provjeriDaLiJeKorisnikRegistrovan()){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		header("location:pocetna.php");
	}

	else if(empty($korIme) or empty($loz))	
	{
		
	  ?>
	  <script type="text/javascript">
	  
	  alert("Niste popunili sva polja!");
		history.back();
		
	  </script>
	<?php
	}
	else /*echo "Pogresno korisnicko ime ili lozinka! Molimo pokusajte ponovo!";
		 echo '<a href="index.php">Vrati se na login</a> ';*/
		
		 header("location: indexGreska.php"); 
	  
	 
}
else{ 
	?>
	  <script type="text/javascript">
	  
	  alert("Greska!");
		history.back();
		
	  </script>
	<?php 
}
?>
</body>
</html>
