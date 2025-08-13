<?php
    function mostrarValor( $variable ) {
        echo "
            <pre class='bg-warning'>
            " . print_r( $variable, true ) . "
            </pre>
        ";
    }

    function paginas() {
        # entradas
        $contenido = $_REQUEST['contenido'] ?? "home" ;
        $pagina    = "" ;

        #proceso
        switch ( $contenido ) {
            case "contact":
               
                $pagina = "../pages/contact.php" ;
                break ;
            case "about":
                
                $pagina = "../pages/about.php" ;
                break ;
            case "home":
                
                $pagina = "../pages/home.php" ;
                break ;
            case "login":
                
                $pagina = "../pages/login.php" ;
                break ;
                
                /* Maneja el caso "salir" (logout) en la declaración switch.*/
            break ;
                 case "salir":
                
                $pagina = "../pages/logout.php" ;
                break ;


            default:
                
                $pagina = "../pages/404.php" ;
                break ;
        }

        #salidas
        return $pagina ;
    }

     // Función para comprobar si el usuario ha iniciado sesión y comprueba cuando ingresa
    function comprobarIngreso() {
        include "../config/config.php";

        #Entradas
        $cuenta = $_REQUEST['cuenta'] ?? "" ;
        $clave  = $_REQUEST['clave'] ?? "" ;
        $resultado = false ;

        #Proceso
        if ($cuenta && $clave) {
            if ($cuenta == $USUARIO_APP && $clave == $CLAVE_APP) {
                 $resultado= true;
                 $_SESSION['esAdmin'] = true; 
            }
           
        }
        #Salidas
        return $resultado ;     
    }
?>