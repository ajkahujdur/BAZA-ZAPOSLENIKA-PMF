<html>
<link rel="stylesheet" type="text/css" href="stil_pocetna.css">

<?php

require_once("korisnik.php");
$korisnik = new Korisnik("","","","","","","","","");
$podaci = $korisnik->vratiSveKorisnike();
?>

<body>



<table id="sviUposlenici" class="tabeleKorisnika">
<tr><th>Ime</th><th>Prezime</th><th>Akademsko zvanje</th><th>Odsjek</th></tr>
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
					echo "<td>";
                    echo $podaci[$i]['nazivOdsjek'] ;
                    echo "</td>";
					echo "</tr>";
                }?>
</table>

</body>

</html>