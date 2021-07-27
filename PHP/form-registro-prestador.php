<head>
		<meta charset="UTF-8">
</head>
<?php
$conexion = pg_connect("host=localhost dbname=workbook_prueba user=postgres password=root") or die ("No se ha podido conectar: " . pg_last_error());

//Recibir los datos del formulario y almacenarlos en variables
$nombre = $_POST["nombre"];
$ap_paterno = $_POST["apellido_paterno"];
$ap_materno = $_POST["apellido_materno"];
$sexo = $_POST["sexo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$servicio_ofrecido = $_POST["servicio_ofrecido"];

$correo_e = $_POST["correo_e"];
$contraseña = $_POST["contraseña"];
$contraseña_validar = $_POST["contraseña_validar"];
$celular = $_POST["celular"];


if ($contraseña != $contraseña_validar){
    echo "<script>
        alert('Las contraseñas ingresadas no coinciden.');
                window.location= 'form-registro-cliente.php'
        </script> ";
}

//Consulta para insertar registros
$insertar = "INSERT INTO PRESTADOR_DE_SERVICIOS(nombre, ap_paterno, ap_materno, sexo, fecha_nacimiento, servicio_ofrecido, correo_e, contrasena, celular) 
VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$sexo', '$fecha_nacimiento', '$servicio_ofrecido', '$correo_e', '$contraseña', $celular);";

//Verificación de la inserción
$registro = pg_query( $conexion, $insertar );

if ( $registro ) {
    echo "<script>
        alert('Registro exitoso');
                window.location= '../index.html'
        </script> ";
} else {
    echo "<script>
        alert('VERIFIQUE LOS DATOS E INTENTELO DE NUEVO');
                window.location= '../registro.html'
        </script> ";
}
pg_close($conexion);