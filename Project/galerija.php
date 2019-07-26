 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Galerija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/galerija.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" type="text/css" href="css/galerijamob.css" media="screen and (max-width: 799px)">
<style>
    #omotac{
        margin: 0 auto;
        
    }
    body{
        background-color:darkred;
    }
    
</style>
<script src="jquery-3.2.1.js"></script>
<script type='text/javascript' >
 
 
 
    $(document).ready(function(){
                    
                    var slike=['slika2.jpg', 'slika3.jpg', 'slika4.jpg','slika5.jpg','slika6.jpg'
                                ,'slika7.jpg'];
                                
                    var putanja = './slike/';
                    var i = 0;
                    var tajmer;
    tajmer = window.setInterval( function(){
                            
                            $("#slika").fadeOut(2000, function(){
                        
                                i= (i+1)%slike.length;
                        
                                $("#slika").attr('src',putanja+slike[i]);
                        
                                $("#slika").fadeIn(2000);
                            });
                
                
                        }, 3000);
    });
    
    </script>
</head>
<body>
        <div id="omotac">
                <ul>
                    
                    <li><a  href='pocetna.php'>Pocetna</a></li>
                    <li><a  class='aktivna' href="galerija.php">Galerija</a></li>
                    <li><a href="spisak.php">Igraci</a></li>
                    <li><a href="log.php">Log In</a></li>
                    <li><a href="registracija.php">Registracija</a></li>
                    <li><a href="odjava.php">Odjava</a></li>
                    
                </ul>
                <br>
                
                
                <header>
		

		<div id="title">
			<h1>Galerija</h1>
			
		</div>
	</header>
                <section id="sekcija">
                        <div class="omotac1">
                        <h2>Pogledajte najlepse slike</h2>
                        
                                    <div class="omotac2">
                                      <img  src="./slike/slika1.jpg" id="slika">

                                    </div>
                                </div>
                                </section>
</body>
</html>