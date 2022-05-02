<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_ira where id_img=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_ira where id_img=2";
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
                    <h2>Ataques de ira</h2>
                    <p>“¿Cómo ha podido hacerme esto a mi? ¡Le odio con todas mis fuerzas!”
                         Una vez asimilada la situación, del dolor pasamos al odio.
                          Ira que nace por pensar que te han tratado de forma injusta y/o que te han traicionado.
                           En esta fase suele haber una tristeza profunda y puede haber agresividad y ansiedad.
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
                    <h2>Bienvenido a el cambio</h2>
                    <p>Lo primero, primerísimo de todo es aceptar la nueva situación. 
                        Negarnos a creer y aceptar lo que ha ocurrido no sirve de nada, solo alargará el proceso, 
                        será aún más complicado si tenías una dependencia emocional muy fuerte con esa persona.

                        Por supuesto que no se trata de negar ni evitar el dolor,
                         no, consiste en aceptarlo y abrazarlo, pero sin quedarnos ahí.
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
                            ?>        </div>
    </div>

    </div>




</body>

</html>