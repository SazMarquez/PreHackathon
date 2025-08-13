<?php
    # entradas
    $accion  = $_REQUEST['accion'] ?? "" ;
    $mensaje = "" ;

    # proceso
    if ( $accion == "ingresar" ) {
        $ingreso = comprobarIngreso() ;
        if ( $ingreso ) {
            $mensaje = "Ingreso exitoso" ;
        } else {
            $mensaje = "Ingreso fallido" ;
        }
    }

    # salidas
?>
<div class='d-flex justify-content-center align-items-center' style='min-height: 75vh'>
    <div class='card shadow p-4' style='width: 100%; max-width: 400px;'>
        <h4 class='text-center mb-4'>
            Iniciar Sesión
        </h4>
        <?php
            if ( $mensaje == "Ingreso exitoso" ) {
                include "../pages/login-mensaje-exito.php" ;
            }
            if ( $mensaje == "Ingreso fallido" ) {
                include "../pages/login-mensaje-error.php" ;
            }
        ?>
        <form method='POST' action=''>
            <input type='hidden' name='contenido' value='login'    >
            <input type='hidden' name='accion'    value='ingresar' >
            <div class='form-floating mb-3'>
                <input class='form-control' type='text' name='cuenta' id='cuenta' placeholder='Cuenta' required>
                <label for='cuenta'>
                    Cuenta
                </label>
            </div>
            <div class='form-floating mb-3'>
                <input class='form-control' type='password' name='clave' id='clave' placeholder='ContrasenÌƒa' required>
                <label for='clave'>
                    Contraseña
                </label>
            </div>
            <button type='submit' class='btn btn-primary w-100'>
                Ingresar
            </button>
        </form>
    </div>
</div>