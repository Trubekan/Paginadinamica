<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_negociacion where id_img=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_negociacion where id_img=2";
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
                    <h2>Negociar</h2>
                    <p>Tercera etapa en la que intentamos buscar soluciones y forzar acuerdos para que la situación cambie.
                         En este punto es habitual actuar de manera mucho más impulsiva enviando mensajes, haciendo llamadas,
                          forzando encuentros sorpresa… que no suelen lograr el objetivo deseado. 
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_1=mysqli_fetch_array($res_imagenes_1)){
                                    
                                    echo "<img src=".$filas_imagenes_1['imagenes'].">";
                                }
                            ?></div>
            </div>
            <div class="secciones">
                <div><h2>No reprimas tus sentimientos</h2>
                    <p>Es importante que si tienes ganas de llorar, lo hagas. No te de vergüenza. Reprimir emociones nunca es bueno, 
                        déjalas fluir.Si estás triste, debes sentirlo y desahogarte incluso aunque estés en público, 
                        llorar y sentir es de humanos.
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
                            ?>        
                            </div>
    </div>

    </div>



</body>

</html>