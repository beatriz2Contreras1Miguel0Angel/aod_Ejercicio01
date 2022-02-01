<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulario</title>
<!-- Agregar bulma.min.css -->
<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-primary">
<div class="hero-body">
<p class="title">
Datos de Persona
</p>
</div>
</section>

    <section class="section is-medium">
	<form name="formularioDatos" method="post" action="resultados.php">
	<label for="name">Nombre:</label>
	<input type="" name="nombre"><br></br>

	<label for="name">Apellido Paterno:</label>
	<input type="" name="apellidopaterno"><br></br>

	<label for="name">Apellido Materno:</label>
	<input type="" name="apellidomaterno"><br></br>

	<label for="name">Cargo:</label>
	<input type="" name="cargo"><br></br>

	<label for="name">RFC:</label>
	<input type="" name="rfc"><br></br>

	<label for="name">curp:</label>
	<input type="" name="curp"><br></br>

	<label for="name">Domicilio:</label>
	<input type="" name="domicilio"><br></br>

	<label for="name">Telefono:</label>
	<input type="" name="telefono"><br></br>

	<label for="name">Correo Electronico:</label>
	<input type="" name="correo"><br></br>

	<label for="name">Sexo:</label>
    <input type="radio" name="Sexo" value="femenino">Femenino</input>
    <input type="radio" name="Sexo" value="masculino">Masculino</input><br></br>

    <label for="name">Fecha de Nacimiento:</label>
	<input type="" name="fecha"><br></br>

    <label for="name">Estado Civil:</label>
	<select name="estado">
        <option value="soltero">Soltero</option>
        <option value="casado">Casado</option>
        <option value="divorciado">Divorciado</option>
        <option value="concubinato">Concubinato</option>
    </select> <br></br>

   <label for="name">Escolarizado:</label>
    <input type="radio" name="escolarizado" value="si">Si</input>
    <input type="radio" name="escolarizado" value="no">No</input><br></br>

    <label for="name">Referencia Familiar:</label>
	<input type="" name="referencia"><br></br>

	<label for="name">Observaciones:</label>
	<input type="" name="observaciones"><br></br>

	<input value="Guardar Datos" type="submit" />
	</form>
	</section>
</body>
</html>