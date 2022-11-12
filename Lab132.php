<?php
    if(array_key_exists('enviar',$_POST)){
        $expire=time()+60*5;
        setcookie("user",$_REQUEST['visitante'], $expire);
        header("Refresh:0");
    }
?>
<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Creador de Cookies</h1><p>
        <h2>La cookie "User" tendra solo 5 minutos de duración</h2>
        <?php
            if(isset($_COOKIE["user"])){
                print("<BR/>Hola<B>" . $_COOKIE["user"] . "</B> gracias por visitar nuestro sitio web<BR/>");
            }else{
        ?>
        <form name="formcookie" method="post" action="Lab142.php">
            <br>Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
            <input type="text" name="visitante">
            <input name="enviar" value="Gracias por intentificarte" type="submit" /><br/>
        </form>
        <?php
            }
        ?>
        <br/><a href="Lab133.php">Continuar...</a>  
    </body>
</html>