<?php
    session_start(); 
    include "../includes/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' lang='es' >
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>
            SistemaGT
        </title>

        <link rel='icon' type='image/png' href='./imgs/logo.png'>

        <link href='./css/bootstrap.min.css' rel='stylesheet'>

        <script src='./js/bootstrap.bundle.min.js'>
        </script>
    </head>
    <body>

        <!-- Encabezado del SistemaGT-->
         <?php  
            include "../includes/header.php";
         ?>
        

        <!-- Contenido principal del SistemaGT-->
         <?php
            include paginas();
         ?>
        

        <!-- Footer del SistemaGT (Pie de Página)-->
         <?php
            include "../includes/footer.php";
         ?>
        
    </body>
</html>
