<!DOCTYPE html>
<?php
include ('conexion.php');
$xc=conectar();
$sql="SELECT * FROM navar";
$res=mysqli_query($xc,$sql);
$sql_imagenes_1="SELECT * FROM img_inicio where id_imagenes=1";
$res_imagenes_1=mysqli_query($xc,$sql_imagenes_1);
$sql_imagenes_2="SELECT * FROM img_inicio where id_imagenes=2";
$res_imagenes_2=mysqli_query($xc,$sql_imagenes_2);
$sql_youtube="SELECT * FROM youtube";
$res_youtube=mysqli_query($xc,$sql_youtube);
?>
<html>

<head>
    <title>Sobrevive al mal de amores</title>
    <link href="../styles/estilo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/corazon-roto_0.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


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
                    <h2>Como Perdonarte a ti mismo</h2>
                    <p>Cuando perdemos a alguien que queremos o amamos siempre por nuestra mente 
                        aparece la pregunta ¿Porque lo hizo? casi siempre la respuesta es para nosotros
                        que no fuimos suficientes o quizas descuidamos ese amor pero en realidad es porque
                        los sere humanos cambiamos naturalmente de pensamiento no siempre te gustara la persona
                        que este a tu lado porque recuerden que no se elige estar enamorado pero si eliges a la 
                        persona que amas, es por eso que primero debes perdonarte a ti mismo si piensas que 
                        no eres lo suficiente para una persona.
                    </p>
                </div>
                <div><?php
                                while($filas_imagenes_1=mysqli_fetch_array($res_imagenes_1)){
                                    
                                    echo "<img src=".$filas_imagenes_1['imagenes'].">";
                                }
                            ?>
                            </div>
            </div>
            <div class="secciones">
                <div>
                    <h2>¿Por qué Perdonar?</h2>
                    <p>Como podemos ver siempre existe el dicho donde hay amor hay odio pero deberias alegrarte
                        ya que gracias a esa persona tu pudiste crecer y tienes 2 opciones quedarte estancado o 
                        aprender de tus errores y buscar lo que siempre quisiste para ti mismo y la unica forma que 
                        lo consigas es dejar el pasado en el pasado y poder perdonar los errores o inmadureces de la 
                        persona que estuvieron contigo ya sea en las buenas o en las malas.
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