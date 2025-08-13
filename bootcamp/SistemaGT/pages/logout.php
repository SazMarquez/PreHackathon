<?php
    session_unset( ) ;
?>
<div class='d-flex justify-content-center align-items-center' style='min-height: calc( 100vh - 70px - 40px )'>
    <div class='card shadow p-4' '>
        <div class='alert alert-success' role='alert'>
            <h1>
                <span class='spinner-border text-success' role='status' aria-hidden='true'>
                </span>
                Saliendo del sistema
            </h1>
        </div>
    </div>
</div>
<script>
    setTimeout(
        function() {
            window.location.href = './';
        },
        2000 // 2 segundos = 2000 milisegundos
    );
</script>