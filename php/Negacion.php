<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_negacion where id_img=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_negacion where id_img=2";
$res_imagenes_2=mysqli_query($xc,$sql_imagenes_2);
$sql_youtube="SELECT * FROM youtube";
$res_youtube=mysqli_query($xc,$sql_youtube);
?>
<html>

<head>
    <title>Sobrevive al mal de amores-Negación</title>
    <link href="../styles/estilo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/corazon-roto_0.png">
</head>

<body>
    <h1>El secreto detras de la ruptura</h1>
    <nav>
        <ul>
            <li><a href="INDEX.php"> 
                <?php while($filas=mysqli_fetch_array($res)){
                           
                echo ' <li><a href=" '.$filas['enlaces'].' ">' .$filas['nom_pag'].'</li>';
            }
                                                          
               ?>
             </a></li>
            
        </ul>
    </nav>
    <div class="contenido">
        <div class="articulos">
            <div class="secciones">
                <div>
                    <h2>Negar la realidad</h2>
                    <p>Esto no me puede estar pasando a mí”, “es como una pesadilla”, 
                        “dime que no es verdad, no es posible”.  Esta es la primera etapa y es el principio de todo.
                        En esta fase te negarás a aceptar que ha terminado la relación, 
                        te costará creer que se ha producido la ruptura, sentirás tristeza y probablemente llores.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_1=mysqli_fetch_array($res_imagenes_1)){
                                    
                                    echo "<img src=".$filas_imagenes_1['imagenes'].">";
                                }
                            ?></div>
            </div>
            <div class="secciones">
                <div>
                    <h2>Aumenta tu autoestima</h2>
                    <p>Una vez más, la autoestima florece y es fundamental trabajarla para sentirte querido, valioso y valorarte como debes. Descubre como potenciar tu autoestima.

                        Aprende a disfrutar de tu propia compañía, a estar bien contigo mismo y a QUERERTE porque si te gustas, también gustarás 😉
                        
                        Acéptate tal y como eres, con lo bueno y lo menos bueno que tengas, esa es tu verdadera identidad y lo que te hace únic@.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_2=mysqli_fetch_array($res_imagenes_2)){
                                    
                                    echo "<img src=".$filas_imagenes_2['imagenes'].">";
                                }
                            ?></div>
            </div>
                
        </div>
        <div class="menu-secundario"><?php
                                while($filas_youtube=mysqli_fetch_array($res_youtube)){
                                    
                                    echo "<iframe src=".$filas_youtube['enlaces'].">";
                                   
                                }
                            ?>       </div>
    </div>

    </div>





</body>

</html>