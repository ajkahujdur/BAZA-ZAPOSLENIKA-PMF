<?php 


  session_start();  // Otvaramo sesiju 

  $korisnik = $_SESSION['username']; 
  
  $lozinka = $_SESSION['password'];  
  
  
  unset($_SESSION); // funkcija unset(parametar p1) brise promjenljivu sesije 
  
  $rezultatBrisanja = session_destroy(); // funkcija session_destroy() brise sesiju posto
                                         // smo obrisali promjenljive sesije

if (!empty($korisnik) && !empty($lozinka)){  

// Funkcija empty($korisnik) ispituje da li je korisnik vodjen sesijom.
//Ako vrati false  u sesiji je,inace nije bio registriran u sesiji.


   if ($rezultatBrisanja)
   {
      // Nema vas vise u sesiji. Odlogovani ste!
	  
      echo 'Odlogovani ste.<br />';
	 
      header("Location: login.php");
   }
   else
   {
   // Jos ste u sesiji. Niste mogli da se odlogujete,jer nije uspjelo brisanje sesije
    echo 'Niste mogli da se odlogujete.<br />';
   }
  }
  else
  {
     // Ovo znaci da korisnik nije bio registriran u sesiji
	 
    echo 'Niste bili logovani. Stoga niste se mogli odlogovati.<br />';
    header("Location: login.php");     
  }

?>
