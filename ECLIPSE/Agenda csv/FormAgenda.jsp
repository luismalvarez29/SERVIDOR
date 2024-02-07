<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<h1>Insertar Contactos</h1>
	<form method="POST" action="FormAgenda?accion=insertar">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br><br>
		<label for="edad">Edad:</label>
		<input type="number" name="edad"><br><br>
		<label for="telefono">Telefono:</label>
		<input type="tel" name="telefono"><br><br>
		<input type="submit">
	</form>
	<br><br>
	<a href="Buscar.jsp">Buscar Contactos</a>
	<br><br>
	<a href="FormAgenda?accion=ver">Ver contactos</a>
</body>
</html>
