$(document).ready(function(){
     $("#novoAkadIskustvo").click(function() {
		 //$("#tabelaAkademskaIskustva").show();
         $("#tabelaAkademskaIskustva").append('<tr><td><input type="text" size="4"/></td><td><input type="text" size="4"/></td><td><input type="text" size="60" /></td></tr>'); 
     });
	 
	 $("#dodajMentorstvo").click(function() {
		 $("#tabelaMentorstvo").show();
         $("#tabelaMentorstvo").append('<table class="tabela1"><tr><td>Student:</td><td><input type="text"/></td></tr> <tr><td> Naziv rada:</td><td><input type="text"/></td></tr><tr><td> Vrsta rada:</td><td><select><option value="diplRad">Diplomski rad</option><option value="magRad">Magistarski rad</option><option value="doktDis">Doktorska disertacija</option></select></td></tr><tr><td> Datum odbrane rada:</td><td><input type="text"/></td></tr></table>'); 
     });
	 
   /*$('.minusbtn').click(function() {
       if($(".test tr").length != 2)
         {
            $(".test tr:last-child").remove();
         }
      else
         {
            alert("You cannot delete first row");
         }
    });*/
});