<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stil_login.css">
<title>Baza zaposlenika Prirodno-matematičkog fakulteta</title>
<link rel="icon" type="image/jpg" href="logo_pmf.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="registracija_jquery.js"></script>
<form name="f1" method="post" action="" >
</head>

<body>

<div id="okvirPrijava">

<h3>Baza zaposlenika Prirodno-matematičkog fakulteta u Sarajevu</h3>

<img src="logo_pmf.png" id="logo" />
<div id="okvirKorisnickoIme">
<input name="username" type="text" id="korisnickoIme" placeholder="Korisničko ime:" class="textInputi" value="">
</div>

<div id="okvirLozinka">
<input name="password" type="password" id="lozinka" placeholder="Lozinka:" class="textInputi" value="">
</div>


<div id="okvirIme">
<input name="ime" type="text" id="ime" placeholder="Ime:" class="textInputi" value="">
</div>

<div id="okvirPrezime">
<input name="prezime" type="text" id="prezime" placeholder="Prezime:" class="textInputi" value="" >
</div>
<div id="okvirEmail">
<input type="text"  placeholder="e-mail:"name="email" value=""class="textInputi" >
</div>

<div id="greskaJavi">
Korisničko ime i/ili email već postoji!
</div>


<div id="ponovljenaLozinka">
<input name="ponovljenaLozinka" type="password" id="ponLozinka" placeholder="Ponovno upišite lozinku:" class="textInputi">
</div>



<input type="submit" name="prijava" formaction="prijaviKorisnika.php" value="Prijavite se" id="dugmePrijava">
<input type="submit" value="Registracija"  name="dgmDodaj" formaction="registrujKorisnika.php" id="dugmeRegistracija">
</form>
<div id="registracija">
<h5>Ukoliko nemate korisničko ime morate se registrirati. </h5>
<center><a href="#" >Registracija</a></center>
</div>
</div>
</body>
</html>
