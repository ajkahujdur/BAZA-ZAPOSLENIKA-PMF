$(document).ready(function(){
	$("#okvirIme").show();
	$("#okvirPrezime").show();
	$("#ponovljenaLozinka").show();
	$("#registracijaDugme").show();
	$("#greskaPrijava").show();
	$("#prijava").hide();
	$("#zabLozinka").hide();
	$("#registracija").hide();
	$("#okvirEmail").show();
	$("#dugmeRegistracija").show();
	$("#dugmePrijava").hide();
	

	
	$("#okvirKorisnickoIme").css('margin-top','+=12%');
	$("#okvirLozinka").css('margin-top','+=12%');
	//disabled na registraciju
	$("#registracijaDugme").attr('disabled', 'disabled');
	$("form").keyup(function() {
		if (!(korisnickoIme == "" && lozinka == "" && ponLozinka=="" && ime=="" && prezime=="")) {
		$("#registracijaDugme").removeAttr('disabled');
		}
		});
		
	
	var loz=$("#lozinka").val();
	var ponLoz = $("#ponLozinka").val();
	if(!loz.is(ponLoz)){
		$("#greskaPrijava").hide();
		}
	
	});
