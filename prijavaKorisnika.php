<?php

require_once("konekcija.php");

class PrijavaKorisnika {

    private $username;
    private $password;
    private $konekcija;

    public function __construct($ime, $sifra){
        $this->username= $ime;
        $this->password= $sifra;
        $this->konekcija = "";
    }

    public function provjeriDaLiJeKorisnikRegistrovan(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
      	$this->konekcija =new Konekcija("127.0.0.1","root");
	    $this->konekcija->konektujSe();
        $this->konekcija->otvoriBazu("bazauposlenika");  

        $u="select * from korisnik where username='{$user}' and password = old_password('{$pass}')";
			$r=mysql_query($u);
        	if(mysql_num_rows($r)==1) return true;
			else return false;	


    }

}