<?php
//include ( "validar-datos.php" );
//VALIDACION CON FUNCIONES DE JS

//Evaluar que botón del formulario fue presionado
if ( isset( $_POST["ingresar"] ) ) {
    session_start();
    //Fue oprimido el botón Registrar
    //Recibir los datos del formulario y almacenarlos en variables
    $correo_e = $_POST["correo_e"];
    $contraseña = $_POST["contraseña"];

    if ( $correo_e == 'luiz.ig2205@gmail.com' && $contraseña == '12345' ) {
        header( "Location: ../administrador.html" );
        exit();
    } else if ( $correo_e == 'osjack01@gmail.com' && $contraseña == '12345' ) {
        header( "Location: ../cliente.html" );
        exit();
    } else if ( $correo_e == 'samt13pema@gmail.com' && $contraseña == '12345' ) {
        header( "Location: ../prestador-de-servicios.html" );
        exit();
    } else {
        echo "<script>
        alert('Correo Electrónico y/o Contraseña Incorrecto');
                window.location= '../index.html'
        </script> ";
    }
}
