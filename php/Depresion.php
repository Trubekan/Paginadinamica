<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_depresion where id_img=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_depresion where id_img=2";
$res_imagenes_2=mysqli_query($xc,$sql_imagenes_2);
$sql_youtube="SELECT * FROM youtube";
$res_youtube=mysqli_query($xc,$sql_youtube);
?>
<html>

<head>
    <title>Sobrevive al mal de amores-Negación</title>
    <link href="../styles/estilo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/corazon-roto_0.png">
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
                    <h2>La depresión</h2>
                    <p>En esta fase comenzarás a entender por fin todo lo ocurrido, 
                        comprenderás que la relación de verdad ha terminado y que no vais a volver a estar juntos.
                         En este punto puedes sentirte muy triste, desganado y desesperanzado. Aquí es totalmente normal dejar de comer
                         , dormir mal y no tener ganas de salir.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_1=mysqli_fetch_array($res_imagenes_1)){
                                    
                                    echo "<img src=".$filas_imagenes_1['imagenes'].">";
                                }
                            ?></div>
            </div>
            <div class="secciones">
                <div><h2>Tienes que seguir mirando hacia adelante</h2>
                    <p>Deja de hacer como los cangrejos, no busques en tu pasado, ni mires hacia atrás. Deja de pensar en lo que pasó o en lo que pudo haber sido. 
                        Lo que te va a beneficiar es ir mirar hacia delante, es hora de comenzar a pensar en lo bueno que está aún por llegar.

                        Aquí me remito a la cita del inicio y es que el pasado es sólo eso, pasado, no lo podemos cambiar ni modificar, 
                        pero si nos sirve para aprender e intentar mejorar los posibles errores cometidos.
                        
                        Y es que, según Walter Riso, psicólogo y escritor de numerosas publicaciones, con la ruptura sentimental aprendemos 
                        qué es lo que no queremos o no vamos a tolerar en futuras relaciones. Tener claro lo que no se va a negociar, 
                        ni soportar, ni sacrificar en el futuro es un gran avance para que una posterior relación de pareja sea exitosa.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_2=mysqli_fetch_array($res_imagenes_2)){
                                    
                                    echo "<img src=".$filas_imagenes_2['imagenes'].">";
                                }
                            ?></div>
            </div>
                
        </div>
        <div class="menu-secundario">
        <?php
                                while($filas_youtube=mysqli_fetch_array($res_youtube)){
                                    
                                    echo "<iframe src=".$filas_youtube['enlaces'].">";
                                   
                                }
                            ?> </div>
    </div>

    </div>




</body>

</html>