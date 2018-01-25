<?php

require_once("konekcija.php");

class RegistracijaKorisnika {

    private $username;
    private $password;
	private $ime;
	private $prezime;
	private $email;
    private $konekcija;

    public function __construct($username, $sifra, $ime, $prezime, $email){
        $this->username= $username;
        $this->password= $sifra;
		$this->ime = $ime;
		$this->prezime = $prezime;
		$this->email = $email;
        $this->konekcija = "";
    }

    public function unesiKorisnika(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$kime = $_POST['ime'];
		$kprez = $_POST['prezime'];
		$kmail = $_POST['email'];
				
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		
		$upitUsername = "select * from korisnik where username = '".$user."'";
		$rezUsername = mysql_query($upitUsername);
		$n1 = mysql_num_rows($rezUsername);

	
		if($n1 == 0 ){
			$u="call insertKorisnik('{$user}', '{$pass}','{$kime}','{$kprez}', '{$kmail}')";
			$r=mysql_query($u) or header("location:index.php");  
			if($r) header("location:index.php");
			
		}
		else if(empty($user) or empty($pass)or empty($kime)or empty($kprez)or empty($kmail))	
		{
			
		  ?>
		  <script type="text/javascript">
		  
		  alert("Niste popunili sva polja! Idite na registaciju i pokušajte ponovno...");
			history.back();
			
		  </script>
		<?php
		}
		else 
		{ /*
			echo "Uneseno korisnicko ime i/ili mail vec postoji. Unesite ponovo";
			echo "<br><br>Natrag na  <a href='registracija.php'>registraciju</a>";*/
			header("location:registracijaGreska.php");	
		
		}

    }


}