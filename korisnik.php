<?php

require_once("konekcija.php");

class Korisnik
{
	private $idKorisnik;
	private $username;
	private $password;
	private $ime;
	private $prezime;
	private $datumRodjenja;
	private $mjestoRodjenja;
	private $email;
	private $adresaStanovanja;
	private $konekcija;
	
	function __construct($idKorisnik,$username,$password, $ime, $prezime, $datumRodjenja, $mjestoRodjenja, $email, $adresaStanovanja){
		$this->idKorisnik = $idKorisnik;
		$this->username = $username;
		$this->password = $password;
		$this->ime = $ime;
		$this->prezime = $prezime;
		$this->datumRodjenja = $datumRodjenja;
		$this->mjestoRodjenja = $mjestoRodjenja;
		$this->email = $email;
		$this->adresaStanovanja = $adresaStanovanja;
		$this->konekcija = " ";
	}
		//////////////////////////////////////
	
		public function vratiNaucneRadove($korisnik){
		$upit = "call naucniRadoviKorisnik($korisnik)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		$brojac = 0;
		if($n != 0){
		if($rez){
			while($red = mysql_fetch_array($rez)){
				$lista[$brojac++] = $red;
			}
		}
		return $lista;
		}
		else {
			return false;}
	}
	
	
	public function vratiSveKorisnike()
	{
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
				
		$upit = "call imePrezimeRMjestoOdsjek";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		//$podaci = mysql_fetch_array($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
						   //echo "<br>".$lista[2][1];
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}	
	}
	
	public function vratiKorisnikeOdsjeka($odsjek){
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
				
		//$upit = "select * from korisnik where odsjek";
		$upit = "call korisnici($odsjek)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		//$podaci = mysql_fetch_array($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
						   //echo "<br>".$lista[2][1];
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	public function vratiAkademskaIskustva($korisnik)
	{
		$upit = "call datumOpisAkademskoIskustvo($korisnik)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	public function vratiMentorstva($korisnik)
	{
		$upit = "call mentorstvaKorisnik($korisnik)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	public function vratiKnjige($korisnik)
	{
		$upit = "call knjigaKorisnik($korisnik)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	public function vratiProjekte($korisnik){
		$upit = "call projekatKorisnik($korisnik)";
		$rez = mysql_query($upit);
		$n = mysql_num_rows($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	public function pretraga($search)
	{
		$konekcija = new Konekcija("127.0.0.1","root");
		$konekcija->konektujSe();
		$konekcija->otvoriBazu("bazauposlenika");
		$pretraga = (string)$search;
		$upit = "call pretraga('{$pretraga}')";
		$rez = mysql_query($upit) or die(mysql_error());
		$n = mysql_num_rows($rez);
		$brojac=0;
		if($n != 0){
					if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
							  
						} 
					}
		return $lista;
		}
		else{
			return false;
		}
	}
	
	
	
}
	



?>