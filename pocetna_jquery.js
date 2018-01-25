$(document).ready(function(){

	$('#dioZaPrikaz').load('forma_svi_korisnici.php', function(response) {
        $('#sviUposlenici').fadeIn('slow');})
	$("#vertikalniMeni li:eq(0)").addClass('kliknuto');
	
	$("#pretragaDugme").click(function(){
		
		('#dioZaPrikaz').load('pretraga.php', function(response) {
		})
		});
		
	$("#vertikalniMeni li:eq(0)").click(function(){
		$('#dioZaPrikaz').load('forma_svi_korisnici.php', function(response) {
        $('#sviUposlenici').fadeIn('slow');})
		//$(this).css("background-color","red");
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(1)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(2)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(3)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(4)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(5)").removeClass('kliknuto');
		});
	$("#vertikalniMeni li:eq(1)").click(function(){
		$('#dioZaPrikaz').load('forma_korisnici_matematika.php', function(response) {
        $('#korisniciOdsjeka').fadeIn('slow');})
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(0)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(2)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(3)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(4)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(5)").removeClass('kliknuto');
		});
	$("#vertikalniMeni li:eq(2)").click(function(){
		$('#dioZaPrikaz').load('forma_korisnici_fizika.php', function(response) {
        $('#korisniciOdsjeka').fadeIn('slow');})
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(0)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(1)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(3)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(4)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(5)").removeClass('kliknuto');
		});
	$("#vertikalniMeni li:eq(3)").click(function(){
		$('#dioZaPrikaz').load('forma_korisnici_biologija.php', function(response) {
        $('#korisniciOdsjeka').fadeIn('slow');})
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(0)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(1)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(2)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(4)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(5)").removeClass('kliknuto');
		});
	$("#vertikalniMeni li:eq(4)").click(function(){
		$('#dioZaPrikaz').load('forma_korisnici_hemija.php', function(response) {
        $('#korisniciOdsjeka').fadeIn('slow');})
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(0)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(1)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(2)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(3)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(5)").removeClass('kliknuto');
		});
	$("#vertikalniMeni li:eq(5)").click(function(){
		$('#dioZaPrikaz').load('forma_korisnici_geografija.php', function(response) {
        $('#korisniciOdsjeka').fadeIn('slow');})
		$(this).addClass('kliknuto');
		$("#vertikalniMeni li:eq(0)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(1)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(2)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(3)").removeClass('kliknuto');
		$("#vertikalniMeni li:eq(4)").removeClass('kliknuto');
		});
});
