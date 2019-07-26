<?php
function konektuj(){
    global $veza;
    $veza=mysqli_connect('localhost','root','','liverpul') or die("Nije uspela konekcija sa bazom"+mysqli_connect_error($veza));


    return $veza;
}
function diskonektuj($veza){

global $veza;
mysqli_close($veza);

}



?>