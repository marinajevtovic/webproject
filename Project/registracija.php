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
<script>
$(document).ready(function(){

$("#reg").click(function(){
var username=$("#kime").val();
var mejl=$("#mejl").val();
var sifra=$("#sifra").val();
if(username=="" && mej=="" && sifra==""){
    window.alert("NISU SVA POLJA UNETA, MOLIMO VAS UNESITE!");
    return;
}
var ind1=mejl.indexOf("@");
var ind2=mejl.lastIndexOf(".");
var duzina1=sifra.length;
var duzina2=username.length;
if(ind1==-1){
    window.alert("Niste uneli @, molimo unesite ispravnu adresu!");
    return;
}
if(ind2==-1){
    window.alert("U vasoj adresi nema ., molimo unesite ispravnu adresu!");
    return;
}
if(ind1>ind2){
    window.alert("Neispravna adresa, molimo unesite ispravnu adresu!");
    //ako nema tacke iza @ u adresi
    return;
}
if(duzina1<6){
    window.alert("Sifra mora imati barem 6 karaktera!");
    return;
}
if(duzina2<6){
    window.alert("Korisnicko ime mora imati duzinu barem 6 karaktera!");
    return;
}


})





})


</script>
</head>
<body>
        <div id="omotac">
                <ul>
                    
                    <li><a  href='pocetna.php'>Pocetna</a></li>
                    <li><a  href="galerija.php">Galerija</a></li>
                    <li><a href="spisak.php">Igraci</a></li>
                    <li><a href="log.php">Log In</a></li>
                    <li><a class='aktivna' href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                    
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Registracija</h1>
			
		</div>
	</header>
                <section id="sekcija">
                        <div class="omotac1">
                        <h2>Registrujte se</h2>
                        <p id='greska'>
<?php
if(isset($_GET['reg'])){
include('konekcije.php');
$veza=konektuj();
$username=$_GET['kime'];
$mejl=$_GET['mejl'];
$sifra=$_GET['sifra'];
if( strpos($mejl,'@')==false || strrpos($mejl,'.')<strpos($mejl,'@')|| strlen($mejl<0)  )
{
    die("Mejl adresa nije u redu!");
}
if(strlen($username)<6){
    die("Username mora biti duze od 6 karaktera!");
}
if(strlen($sifra)<6){
    die("Sifra mora biti duza od 6 karaktera!");
}
$upit="SELECT username,email,sifra
FROM korisnik
WHERE username='$username'";
$rezultat=mysqli_query($veza,$upit) or die("Upit nije ok!");
if(mysqli_num_rows($rezultat)==0){
    $upit1="INSERT INTO korisnik 
    (username,email,sifra)
    VALUES('$username', '$mejl', '$sifra')";
    $rezultat1=mysqli_query($veza,$upit1) or die("Upit1 nije ok!");
    if($rezultat1==true){
        echo "Uspesno ste registrovani";
    }
    else{
        echo "Problem sa bazom!";
    }

    
    
}
else{
    echo "Korisnicko ime zauzeto, molimo odaberite drugo!";
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
                                        <label>Email adresa: </label>
                                        <br>
                                        <input autocomplete='off' type="email" id='mejl' name="mejl">
                                        <br>
                                        <label>Sifra: </label>
                                        <br>
                                        <input autocomplete='off' type="text" id='sifra' name="sifra">
                                        <br>
                                        <input type="submit" id='reg' name="reg" value="Registujte se">
                                        <br>
                                       </form>  
                                    </div>
                                </div>
                                </section>
</body>
</html>