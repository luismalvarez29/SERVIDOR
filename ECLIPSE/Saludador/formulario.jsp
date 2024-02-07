<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulario</title>
</head>
<body>
	<h1>Formulario</h1>
	<form method="get" action="formulario">
		<label for="nombre">Nombre:</label>
		<input name="nombre" type="text" id="nombre"><br><br>
		<label for="edad">Edad:</label>
		<input type="number" name="edad" id="edad"><br><br>
		<input type="submit">
	</form>
</body>
</html>
