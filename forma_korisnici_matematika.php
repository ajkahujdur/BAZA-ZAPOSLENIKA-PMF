<html>

<?php

require_once("korisnik.php");
$korisnik = new Korisnik("","","","","","","","","");
$podaci = $korisnik->vratiKorisnikeOdsjeka(1);

//$podaci = $korisnik->vratiKorisnikeOdsjeka();
?>

<body>



<table id="korisniciOdsjeka" class="tabeleKorisnika">
<tr><th>Ime</th><th>Prezime</th><th>Akademsko zvanje</th></tr>
<?php
                for($i=0;$i<count($podaci);$i++){
					echo "<tr>";
                    echo "<td>";
                    echo $podaci[$i]['ime'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['prezime'] ;
                    echo "</td>";
					echo "<td>";
                    echo $podaci[$i]['nazivRadnoMjesto'] ;
                    echo "</td>";
					echo "</tr>";
                }?>
</table>

</body>

</html>