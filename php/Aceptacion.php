<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_aceptacion where id_img=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_aceptacion where id_img=2";
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
                    <h2>Aprende a ser quien tu eres</h2>
                    <p>Última etapa. En esta fase aceptas que terminaste con tu pareja, vas recuperando tus fuerzas 
                        y no tienes tantos pensamientos negativos. Los recuerdos de tu pareja (fotografías, regalos…) 
                        ya no te causan tanto sufrimiento como lo hacían antes y empiezas a volver a hablar con normalidad
                         de tu ex y de tu relación pasada.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_1=mysqli_fetch_array($res_imagenes_1)){
                                    
                                    echo "<img src=".$filas_imagenes_1['imagenes'].">";
                                }
                            ?></div>
            </div>
            <div class="secciones">
                <div><h2>No pares,sigue hasta que sea el final de todo</h2>
                    <p>Hay que evitar la inactividad y no hacer “nada”. La inactividad te bloquea 
                        y te atrapa en los pensamientos negativos y nada óptimos en una situación de ruptura.

                        No te puedes permitir el lujo de parar, y es que tras una ruptura, 
                        llega un momento de cambio que es idóneo para darte la oportunidad de iniciar nuevos proyectos 
                        y de establecer nuevas metas y objetivos. Ponte a ello.
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
                            ?></div>
            
        </div>
    </div>

    </div>




</body>

</html>