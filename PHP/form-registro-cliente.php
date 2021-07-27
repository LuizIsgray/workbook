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

$codigo_postal = $_POST["codigo_postal"];
$calle = $_POST["calle"];
$numero_ext = $_POST["numero_exterior"];
    $numero_int = $_POST["numero_interior"];
$colonia = $_POST["colonia"];
$ciudad = $_POST["ciudad"];
$estado = $_POST["estado"];
$punto_referencia = $_POST["punto_referencia"];
$fachada = $_POST["fachada"];

$correo_e = $_POST["correo_e"];
$contraseña = $_POST["contraseña"];
$contraseña_validar = $_POST["contraseña_validar"];
$celular = $_POST["celular"];

if ($numero_int == ""){
    $numero_int = 00;
}
if ($contraseña != $contraseña_validar){
    echo "<script>
        alert('Las contraseñas ingresadas no coinciden.');
                window.location= 'form-registro-cliente.php'
        </script> ";
}

//Consulta para insertar registros
$insertar = "INSERT INTO CLIENTE(nombre, ap_paterno, ap_materno, sexo, fecha_nacimiento, codigo_postal, calle, numero_ext, numero_int, colonia, ciudad, estado, punto_referencia, fachada, correo_e, contrasena, celular) 
VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$sexo', '$fecha_nacimiento', $codigo_postal, '$calle', $numero_ext, $numero_int, '$colonia', '$ciudad', '$estado', '$punto_referencia', '$fachada', '$correo_e', '$contraseña', $celular);";

//Verificación de la inserción
$registro = pg_query( $conexion, $insertar );

if ( $registro ) {
    echo "<script>
        alert('Registro exitoso');
                window.location= '../index.html'
        </script> ";
} else {
    echo "<script>
        alert('VERIFIQUE LOS DATOS E INTENTENLO DE NUEVO');
                window.location= '../registro.html'
        </script> ";
}
pg_close($conexion);