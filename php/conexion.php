<?php
function conectar(){
    $xc = mysqli_connect("localhost","root","","lab07");
    return $xc;
    die();
}
function desconectar($xc){
    mysqli_close($xc);}

?>