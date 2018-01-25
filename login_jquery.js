$(document).ready(function(){
	$("#okvirIme").hide();
	$("#okvirPrezime").hide();
	$("#greskaPrijava").show();
	$("#ponovljenaLozinka").hide();
	$("#registracijaDugme").hide();
	$("#greskaReg").hide();
	$("#okvirEmail").hide();
	$("#dugmeRegistracija").hide();

	/*$("#dugmePrijava").click(function(){
	var korIme = $("#korisnickoIme").val();
	var loz=$("#lozinka").val();
	if( korIme =='' || loz ==''){
		alert("Nisu popunjena polja");
		}
		});*/
	
	//kad kliknem na registraciju 
	$("#registracija").one("click", function(){
	$("#okvirIme").show();
	$("#okvirPrezime").show();
	$("#ponovljenaLozinka").show();
	$("#registracijaDugme").show();
	$("#greskaPrijava").hide();
	$("#prijava").hide();
	$("#zabLozinka").hide();
	$("#registracija").hide();
	$("#okvirEmail").show();
	$("#dugmeRegistracija").show();
	$("#dugmePrijava").hide();
	
	$("#okvirKorisnickoIme").css('margin-top','+=12%');
	$("#okvirLozinka").css('margin-top','+=12%');
	
	
	$("#dugmeRegistracija").click(function(){
	var loz=$("#lozinka").val();
	var ponLoz = $("#ponLozinka").val();
	if (!(loz).match(ponLoz)) {
alert("Vaše lozinke se ne poklapaju. Molimo pokušajte se ponovno registrovati");
	}
	});	
});
});