package paqueteaccesodatos;

import java.util.ArrayList;

public class PintarHTML {
	public static String crearTabla(ArrayList<Contacto> list) {
		String tabla = "<table><tr><th>Nombre</th><th>Edad</th><th>Telefono</th></tr>";
		for (int i = 0; i < list.size(); i++) {
			Contacto c = list.get(i);
			tabla += "<tr><td>" + c.getNombre() + "</td><td>" + c.getEdad() + "</td><td>" + c.getTelefono() + "</td></tr>";
		}
		tabla += "</table>";
		return tabla;
	}
	public static String tablaEliminar(ArrayList<Contacto> list) {
	    String tabla = "<table id='tablaContactos'><tr><th>Nombre</th><th>Edad</th><th>Telefono</th><th>Borrar</th></tr>";
	    for (int i = 0; i < list.size(); i++) {
	        Contacto c = list.get(i);
	        tabla += "<tr id='fila" + i + "'>";
	        tabla += "<td>" + c.getNombre() + "</td><td>" + c.getEdad() + "</td><td>" + c.getTelefono() + "</td>"
	            + "<td><a href='FormAgenda?accion=borrar&telefono=" + c.getTelefono() + "'>"
	            + "<img src='https://cdn-icons-png.flaticon.com/512/1017/1017530.png' style='width: 50px; height: 40px;'>" +
	            "</a></td></tr>";
	    }
	    tabla += "</table>";
	    return tabla;
	}
}
