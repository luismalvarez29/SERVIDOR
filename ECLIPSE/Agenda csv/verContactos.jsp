<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@page import="java.util.ArrayList"%>  
<%@page import="paqueteaccesodatos.*"%>  
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<style>
table, td, th{
border: 1px solid black;
}
</style>
<body>
	<%
	ArrayList<Contacto> verContactos=(ArrayList<Contacto>)request.getAttribute("verLista");
	String tablaVer = (verContactos != null) ? PintarHTML.tablaEliminar(verContactos) : ""; 
	ArrayList<Contacto> buscarContactos=(ArrayList<Contacto>)request.getAttribute("buscarLista");
	String tablaBuscar = (buscarContactos != null) ? PintarHTML.tablaEliminar(buscarContactos) : "" ;
%>
<%=tablaVer %>
<%=tablaBuscar %>
</body>
</html>
