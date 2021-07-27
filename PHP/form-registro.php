<?php

//Evaluar que botón del formulario fue presionado
if ( isset( $_POST["registro_cliente"] ) ) {
    header( "Location: ../registro-cliente.html" );
        exit();
} else if (isset ($_POST["registro_prestador"])){
    header( "Location: ../registro-prestador-de-servicios.html" );
        exit();
}
