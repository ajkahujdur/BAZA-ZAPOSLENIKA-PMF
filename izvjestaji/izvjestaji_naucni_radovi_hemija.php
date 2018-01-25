<?php

require_once("konekcija.php");

$konekcija = new Konekcija("127.0.0.1","root");
$konekcija->konektujSe();
$konekcija->otvoriBazu("bazauposlenika");

$upit = "call naucniRadoviAutoriOdsjek(3)";
$rez = mysql_query($upit)or die (mysql_error());
$n = mysql_num_rows($rez);
$brojac = 0;
echo "<table id='naucniRadoviBiologija' class='izvjestaji'>
<tr><th>Naučni rad</th><th>Autori</th></tr>";
if($n != 0){
if($rez){
						while($red=mysql_fetch_array($rez))
						{
						   $lista[$brojac++]=$red;
						} 
					}
					

 for($i=0;$i<count($lista);$i++){

					echo "<tr>";
                    echo "<td>";
                    echo $lista[$i]['nazivNaucniRad'] ;
                    echo "</td>";
					echo "<td>";
                    echo $lista[$i]['autor'] ;
                    echo "</td>";
					echo "</tr>";
}
}
echo"</table>";
?>