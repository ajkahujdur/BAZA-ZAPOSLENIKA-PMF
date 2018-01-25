<?php

class Konekcija
{
	private $korisnickoImeBaza='';
	private $imeServera='';
	private $lozinka='';
	private $rezKonekcije='';
	
	public function Konekcija($is, $kib,$l="") // konstruktor
	{
        $this->imeServera=$is;
		$this->korisnickoImeBaza=$kib;	
		$this->lozinka=$l;
		$this->rezKonekcije='';
	}
	
	public function konektujSe()
	{
		$this->rezKonekcije=@mysql_connect($this->imeServera,$this->korisnickoImeBaza);
		if(!$this->rezKonekcije) echo "Nismo uspjeli da se konektujemo!";
        //else echo "Uspjesna konekcija!";
	}
	
	public function otvoriBazu($imeBaze)
	{
		$otvoriBazu=@mysql_select_db($imeBaze,$this->rezKonekcije);
		if (!$otvoriBazu) echo "Nismo uspjeli da otvorimo!";
		//else echo "<br> Otvorili smo bazu!";
	}
	
	public function zatvoriBazu()
	{
		mysql_close($this->rezKonekcije);
		//echo "<br>Zatvaramo bazu ...";
	}
}

?>