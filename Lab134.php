<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Eliminar Cookies</h1><p>
        <?php
            if(isset($_COOKIE["user"])){
                setcookie("user","",time()+60*5);
                echo"<H3>La cookie 'user' ha sido eliminada satisfactoriamente</H3><br/>";
            }
            else{
                echo "<H3>La cookie 'user' no existe</H3><br/>";
            }
            if(isset($_COOKIE["contador"])){
                setcookie("contador","",time()+365*24*60*60);
                echo"<H3>La cookie 'contador' ha sido eliminada satisfactoriamente</H3><br/>";
            }
            else{
                echo "<H3>La cookie 'contador' no existe</H3><br/>";
            }
        ?>
        <a href="Lab131.php">Volver al contador de visitas</a>&nbsp;
        <a href="Lab132.php">Volver al saludo a usuario</a>  
    </body>
</html>