<?php
require_once("konekcija.php");

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$upit = "call filterZvanje2(2)";
$rez = mysql_query($upit)or die (mysql_error());
$n = mysql_num_rows($rez);
$brojac = 0;
echo "<table class='izvjestaji'>
<tr><th>Ime</th><th>Prezime</th><th>Odsjek</th></tr>";
if($n!=0){
if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
				  
						} 
					}

 for($i=0;$i<count($lista);$i++){
					echo "<tr>";
                    echo "<td>";
                    echo $lista[$i]['ime'] ;
                    echo "</td>";
					echo "<td>";
                    echo $lista[$i]['prezime'] ;
                    echo "</td>";
					echo "<td>";
                    echo $lista[$i]['nazivOdsjek'] ;
                    echo "</td>";
					echo "</tr>";
}
}
echo "</table>";

?>