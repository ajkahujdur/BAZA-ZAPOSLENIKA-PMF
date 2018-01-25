$(document).ready(function(){
	/* da otvori uvecanu sliku
	$('#slika').one('click', function (){
    $('body').append('<div id="dialog" title="Image"><img src="' + $("#img").attr('src') + '" width="400" /></div>');
    $('#dialog').dialog();
})*/
	//funkcije za dodavanje novog reda u tabelama
		$("#novoAkadIskustvoDugme").click(function() {
         $("#tabelaAkademskaIskustva").append('<tr><td><input type="text" size="8%" name="datumOd" value="" id="datumOd"/></td><td ><input type="text" size="8%" name="datumDo" value="" id="datepicker" /></td><td><textarea name="opis" value="" cols="50"></textarea></td></tr>');
     });
	 
	 $("#novoMentorstvoDugme").click(function() {
         $("#tabelaMentorstva").append('<tr><td><input type="text" name="mentor_kome" value=""></td><td><input type="text"name="datum" value=""></td><td><input type="text" name="ciklus_studija" value=""></td></tr>');
     });
	 
	 $("#noviNaucniRadDugme").click(function() {
         $("#tabelaNaucniRad").append('<tr><td><input type="text" name="nazivNaucniRad" value="" size="20%"></td><td><input type="text" name="datum" value="" size="8%"></td><td><textarea name="opis" value="" cols="20"></textarea><td><input type ="text" name = "autori" value = "" size="16%"></td></tr>');
     });
	 $("#novaKnjigaDugme").click(function() {
			 $("#tabelaKnjige").append('<tr><td><input type="text" name="nazivKnjige" value="" size="15%"></td><td><input type="text" name="autori" value="" size="15%"></td><td><input type="text" name="isbn" value="" size="7%"></td><td><input type="text" name="izdavac" value="" size="12%"></td><td><input type="text" name="godinaIzdavanja" value="" size="7%"></td></tr>');
		 });
	$("#noviProjekatDugme").click(function() {
			 $("#tabelaProjekti").append('<tr><td><input type="text" name="nazivProjekta" value="" size="15%"></td> <td><input type="text" name="voditeljProjekta" value="" size="10%"></td><td><input type="text" name="institucija_finansiranje" value="" size="15%"></td><td><input type="text" name="godinaPocetka" value="" size="5%"></td><td><input type="text" name="godinaZavrsetka" value="" size="5%"></td></tr>');
		 });
		 
//da se prikazu osnovni podaci u lijevom dijelu 
	$('#osnovniPodaci').load('osnovne_informacije.php', function(response) {
        $('#tabelaOsnovneInformacije').fadeIn('slow');})
		
		
		
	$("#dodatniPodaci li:eq(0)").click(function(){
		$('#radovi').hide();
		$('#knjige').hide();
		$('#projekti').hide();
		$('#iskustva').hide();
		$('#mentorstva').hide();
		$('#donjiDioDesnogDijela').load('forma_obrazovanje.php', function(response) {
        $('#tabelaObrazovanje').fadeIn('slow');})
		});
		
		
		
	$("#dodatniPodaci li:eq(1)").click(function(){
		$('#tabelaObrazovanje').hide();
		$('#radovi').hide();
		$('#knjige').hide();
		$('#projekti').hide();
		$('#tabelaOstaleInformacije').hide();
		$('#tabelaAkademskaIskustva').hide();
		$("#novoAkadIskustvoDugme").hide();
		$("#spremiAkadIskustvoDugme").hide();
		$('#tabelaMentorstva').hide();
		$("#novoMentorstvoDugme").hide();
		$("#spremiMentorstvoDugme").hide();
		$('#tabelaNaucniRad').hide();
		$("#noviNaucniRadDugme").hide();
		$("#spremiNucniRadDugme").hide();
		$('#tabelaKnjige').hide();
		$("#novaKnjigaDugme").hide();
		$("#spremiKnjiguDugme").hide();
		$('#tabelaProjekti').hide();
		$("#noviProjekatDugme").hide();
		$("#spremiProjekatDugme").hide();

	$('#gornjiDioDesnogDijela').load('divoviIskustvaMentorstva.php', function(response) {
		
		$("#mentorstva").click(function(){
			$('#donjiDioDesnogDijela').load('forma_mentorstva.php', function(response) {
			
			})
			});
		$("#iskustva").click(function(){
			$('#donjiDioDesnogDijela').load('forma_akademska_iskustva.php', function(response) {
				
			})
		})
	})
	
		});
		
		
		
	$("#dodatniPodaci li:eq(2)").click(function(){
		$('#tabelaObrazovanje').hide();
		$('#radovi').hide();
		$('#knjige').hide();
		$('#projekti').hide();
		$('#tabelaOstaleInformacije').hide();
		$('#tabelaKnjige').hide();
		$('#tabelaNaucniRad').hide();
		$("#noviNaucniRadDugme").hide();
		$("#spremiNucniRadDugme").hide();
		$("#novaKnjigaDugme").hide();
		$("#spremiKnjiguDugme").hide();
		$("#novoMentorstvoDugme").hide();
		$("#spremiMentorstvoDugme").hide();
		$('#tabelaOstaleInformacije').hide();
		$('#tabelaAkademskaIskustva').hide();
		$("#novoAkadIskustvoDugme").hide();
		$("#spremiAkadIskustvoDugme").hide();
		$('#tabelaMentorstva').hide();
		$("#novoMentorstvoDugme").hide();
		$("#spremiMentorstvoDugme").hide();
		$('#tabelaProjekti').hide();
		$("#noviProjekatDugme").hide();
		$("#spremiProjekatDugme").hide();

	$('#gornjiDioDesnogDijela').load('divoviRadovi.php', function(response) {
		
		$("#radovi").click(function(){
			$('#donjiDioDesnogDijela').load('forma_naucni_radovi.php', function(response) {
				
			})
		});
	
			
		$("#knjige").click(function(){
			$('#donjiDioDesnogDijela').load('forma_sve_knjige.php', function(response) {
			
			})
			});
		$("#projekti").click(function(){
			$('#donjiDioDesnogDijela').load('forma_projekti.php', function(response) {
				
			})
			});
		
	})
		});
		
	$("#dodatniPodaci li:eq(3)").click(function(){
		$('#radovi').hide();
		$('#knjige').hide();
		$('#projekti').hide();
		$('#iskustva').hide();
		$('#mentorstva').hide();
		$("#noviNaucniRadDugme").hide();
		$("#spremiNucniRadDugme").hide();
		$("#novaKnjigaDugme").hide();
		$("#spremiKnjiguDugme").hide();
		$("#novoMentorstvoDugme").hide();
		$("#spremiMentorstvoDugme").hide();
		
		$('#donjiDioDesnogDijela').load('forma_ostale_informacije.php', function(response) {
        $('#tabelaOstaleInformacije').fadeIn('slow');})
		});
	});