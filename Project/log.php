<?php
session_start();

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
    <!--!sto se tice stila primenicemo isti kao na registraciji-->
<style>
    #omotac{
        margin: 0 auto;
        
    }
    
    
</style>
<script src="jquery-3.2.1.js"></script>
<script>
$(document).ready(function(){

$("#log").click(function(){



    var username=$("#kime").val();
var sifra=$("#sifra").val();
if(username=="" && sifra==""){
    window.alert("NISU SVA POLJA UNETA, MOLIMO VAS UNESITE!");
    return;
}




})





})


</script>
</head>
<body>
        <div id="omotac">
                <ul>
                    
                    <li><a href='pocetna.php'>Pocetna</a></li>
                    <li><a  href="galerija.php">Galerija</a></li>
                    <li><a href="spisak.php">Igraci</a></li>
                    <li><a class='aktivna' href="log.php">Log In</a></li>
                    <li><a  href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                    
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Log In</h1>
			
		</div>
	</header>
                <section id="sekcija">
                        <div class="omotac1">
                        <h2>Ulogujte se</h2>
                        <p id='greska'>
<?php
include('konekcije.php');
if(isset($_GET['log'])){
    $veza=konektuj();
$username=$_GET['kime'];
$sifra=$_GET['sifra'];
$upit_k="SELECT username
FROM korisnik
WHERE username='$username' AND sifra='$sifra'";
$rezultat=mysqli_query($veza,$upit_k) or die("Nije prosao upit".mysqli_error($veza));
if(mysqli_num_rows($rezultat)==0){
    echo "Niste registrovani, molimo registrujte se! Ili ste pogresno uneli sifru";
}else{
    $korisnik=mysqli_fetch_assoc($rezultat);

    $_SESSION['username']=$korisnik['username'];
    echo "ULOGOVANI STE!";
}
diskonektuj($veza);



}



?>


                        </p>
                        
                                    <div class="omotac2">
                                       <form id='forma' method="GET">

                                        <label>Korisnicko ime: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='kime' name="kime">
                                        <br>
                                        
                                        <label>Sifra: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='sifra' name="sifra">
                                        <br>
                                        <input type="submit" id='log' name="log" value="Ulogujte se">
                                        <br>
                                       </form>  
                                    </div>
                                </div>
                                </section>
</body>
</html>