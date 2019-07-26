<?php
	
	session_start();
    if(!isset($_SESSION['username'])){
        header('Location: log.php');
    
    }
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registracija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/registracija.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/registracijamob.css" media="screen and (max-width: 799px)">
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
                    <li><a href="spisak.php">Igraci</a></li>
                    <li><a href="log.php">Log In</a></li>
                    <li><a  href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                    
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Dodavanje</h1>
			
		</div>
	</header>
                <section id="sekcija">
                        <div class="omotac1">
                        <h2>Dodaj igraca</h2>
                        <p id='greska'>
<?php
if(isset($_GET['dod'])){
include('konekcije.php');
$veza=konektuj();
$ime=$_GET['ime'];
$prezime=$_GET['prezime'];
$god=$_GET['god'];

if(strlen($ime)==0){
    die("Morate uneti ime!");
}
if(strlen($prezime)==0){
    die("Morate uneti prezime!");
}
if(strlen($god)==0){
    die("Morate uneti godine!");
}
$upit="SELECT ime,prezime,godine
FROM fudbaleri
WHERE ime='$ime' AND prezime='$prezime' AND godine='$god'";
$rezultat=mysqli_query($veza,$upit) or die("Upit nije ok!");
if(mysqli_num_rows($rezultat)==0){
    //nema fudbalera upisujemo u bazu
    $upit1="INSERT INTO fudbaleri 
    (ime,prezime,godine)
    VALUES('$ime', '$prezime', '$god')";
    $rezultat1=mysqli_query($veza,$upit1) or die("Upit1 nije ok!");
    if($rezultat1==true){
        echo "Uspesno ste dodali igraca";
    }
    else{
        echo "Problem sa bazom!";
    }

    
    
}
else{
    echo "Igrac vec postoji!";
}

diskonektuj($veza);
}



?>


                        </p>
                        
                                    <div class="omotac2">
                                       <form id='forma' method="GET">

                                        <label>Ime: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='ime' name="ime">
                                        <br>
                                        <label>Prezime: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='prezime' name="prezime">
                                        <br>
                                        <label>Godine: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='god' name="god">
                                        <br>
                                        <input type="submit" id='dod' name="dod" value="Dodaj">
                                        <br>
                                       </form>  
                                    </div>
                                </div>
                                </section>
</body>
</html>