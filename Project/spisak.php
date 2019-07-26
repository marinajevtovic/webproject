<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Igraci</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/igraci.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/igracimob.css" media="screen and (max-width: 799px)">
<style>
    #omotac{
        margin: 0 auto;
        
    }
    

</style>
<script src="jquery-3.2.1.js"></script>
</head>
<body>
        <div id="omotac">
                <ul>
                    
                    <li><a  href='pocetna.php'>Pocetna</a></li>
                    <li><a  href="galerija.php">Galerija</a></li>
                    <li><a class='aktivna' href="spisak.php">Igraci</a></li>
                    <li><a href="log.php">Log In</a></li>
                    <li><a href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                    
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Igraci</h1>
			
		</div>
	</header>
                <section id="sekcija">
                        <div class="omotac1">
                        <h2>Spisak igraca kluba: </h2>
                        
                                    <div class="omotac2">
					
                    
                                    <?php
                                         include('konekcije.php');
                                         $veza=konektuj();
                                         $upit="SELECT * FROM fudbaleri";
                                         $rezultat=mysqli_query($veza,$upit) or die("Nije prosao upit".mysqli_connect_error($veza));
                                         echo "<ol class='lista'>";
                                         while($red=mysqli_fetch_assoc($rezultat)){
                                         echo "<li>".$red['ime']." ".$red['prezime']." ".$red['godine']."</li>"."<br>";
                                         }
                                         echo "</ol>";
                                         
                                         
                                         
                                         
                                         ?>
				<br>
				<?php
                    if(isset($_SESSION['username']))
                   { 
                    echo "<a  href='unos.php' class='dugme'>Dodajte igraca</a>";
                   
                }else{
                        echo "Ulogujte se da biste dodali igraca na spisak!";
                    }
                    
                    ?>

				
                                        
                                         
                                </div>
                                </section>
</body>
</html>