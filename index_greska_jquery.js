$(document).ready(function(){
	$("#okvirIme").hide();
	$("#okvirPrezime").hide();
	$("#greskaPrijava").show();
	$("#ponovljenaLozinka").hide();
	$("#registracijaDugme").hide();
	$("#greskaReg").hide();
	$("#okvirEmail").hide();
	$("#dugmeRegistracija").hide();
	
	$("#dugmePrijava").click(function(){
	var korIme = $("#korisnickoIme").val();
	var loz=$("#lozinka").val();
	if( korIme =='' || loz ==''){/*
	$('input[type="text"],input[type="password"]').css("border","2px solid red");
	$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
	//alert("Please fill all fields...!!!!!!");*/
	$("#greskaPrijava").show();
	$("#greskaPrijava").text('greskaaaaaaaaa');
	}});
	
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
	//disabled na registraciju
	$("#registracijaDugme").attr('disabled', 'disabled');
	$("form").keyup(function() {
		if (!(korisnickoIme == "" && lozinka == "" && ponLozinka=="" && ime=="" && prezime=="")) {
		$("#registracijaDugme").removeAttr('disabled');
		}
		});
	
	});
});// JavaScript Document