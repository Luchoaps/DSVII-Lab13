<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Recuperar valor de una Cookies</h1><p>
        <?php
            if(isset($_COOKIE["user"]))
                echo"<H2>Bienvenido " . $_COOKIE["user"] . "</H2><br/>";
            else
                echo "<H2>Bienvenido invitado</H2><br/>";
        ?>
        <a href="Lab131.php">...Regresar</a>&nbsp;
        <br/><a href="Lab134.php">Continuar...</a>  
    </body>
</html>