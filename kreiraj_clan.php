<?php
    $con = mysqli_connect('127.0.0.1','root',''); //spajanje na server

    if(!$con){
		echo "Neuspjelo spajanje na bazu";
    }
    
    if(!mysqli_select_db($con,'iooa2020')){ //spajanje na bazu
		echo "Baza podataka nije izabrana";
    }
    
    $fields = array('ime','prezime','oib'); //kreianje polja
    
        //fill polja
        $ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$oib = $_POST['oib'];

        //sql upit za punjenje tablice
        $sql = "INSERT INTO clanovi (ime,prezime,oib) VALUES('$ime','$prezime','$oib')";

        //Uspješno . neuspješno punjenje
        if(!mysqli_query($con,$sql)){
			echo "Podaci nisu uneseni u bazu podataka";
			
		}
		else{
			header('Location: clanovi.php');
		}
		
		
	}
?>