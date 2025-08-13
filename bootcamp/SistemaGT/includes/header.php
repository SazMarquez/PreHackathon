<!--Determina si el usuario es administrador y asigna "login" o "logout" al botón. -->
<?php
    #Entradas  
    $esAdmin = $_SESSION['esAdmin'] ?? false ;
    $botonES = "login" ;
    #Proceso
    if ($esAdmin) {
        $botonES = "logout" ;
    }
?>
<!--Salidas -->
<nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='./'>
            Sistema
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#menuSuperior' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'>
            </span>
        </button>
        <div class='collapse navbar-collapse' id='menuSuperior'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link' href='./'>
                        Inicio
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='./?contenido=contact'>
                        Contactos
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='./?contenido=about'>
                        Acerca de
                    </a>
                </li>
            </ul>
            <!-- Crear el boton de login -->
             <span class='navbar-text'>
                <?php
                    include "../includes/header-$botonES.php";
                ?>
             </span>
            <!-- Fin del boton de login -->
                
            </span>
        </div>
    </div>
 </nav>