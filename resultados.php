<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Datos</title>
<!-- Agregar bulma.min.css -->
<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-primary">
<div class="hero-body">
<p class="title">
Datos guardados
</p>
</div>
</section>

<section class="section">

   <?php //Formulario

$nombre = $_POST['nombre'];
$apellidoPa = $_POST['apellidopaterno'];
$apellidoMa = $_POST['apellidomaterno'];
$cargo = $_POST['cargo'];
$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sexo = $_POST['Sexo'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$escolarizado = $_POST['escolarizado'];
$referencia = $_POST['referencia'];
$observaciones = $_POST['observaciones'];

echo "</strong><br> Nombre: ". $nombre.
      "</strong><br> Apellido Paterno: ".$apellidoPa.
      "</strong><br> Apellido Materno: ".$apellidoMa.
      "</strong><br> Cargo: ".$cargo.
      "</strong><br> RFC: ".$rfc.
      "</strong><br> CURP: ".$curp.
      "</strong><br> Domicilio: ".$domicilio.
      "</strong><br> Telefono: ".$telefono.
      "</strong><br> Correo Institucional: ".$correo.
      "</strong><br> Sexo: ".$sexo.
      "</strong><br> Fecha de Nacimiento: ".$fecha.
      "</strong><br> Estado Civil: ".$estado.
      "</strong><br> Escolarizado: ".$escolarizado.
      "</strong><br> Referencia Familiar: ".$referencia.
      "</strong><br> Observaciones: ".$observaciones;

?>

</section>
</body>
</html>