package paqueteaccesodatos;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

public class AccesoDatos {
	private static String ruta = "C:\\Users\\Luis Malvarez\\Desktop\\LUIS\\2 DAW\\SERVIDOR\\ECLIPSE\\agenda.csv";

	public static void insertarContacto(Contacto c) throws IOException {
		// escribir una linea sin espacios y separado por comas
		FileWriter fw = new FileWriter(ruta, true);
		String line = c.getNombre().trim() + "," + c.getEdad() + "," + c.getTelefono().trim() + "\n";
		fw.write(line);
		fw.close();
	}
	public static ArrayList<Contacto> getContacts() throws IOException {
		ArrayList<Contacto> verLista = new ArrayList();
		FileReader fr = new FileReader(ruta);
		BufferedReader br = new BufferedReader(fr);
		String line = br.readLine();
		while (line != null) {
			// separa los datos por las comas y los guarda en un array
			String[] datos = line.split(",");
			// saca los datos y los añade a la lista
			String nombre = datos[0];
			String edad = datos[1];
			String telefono = datos[2];
			Contacto c = new Contacto(nombre, Integer.parseInt(edad), telefono);
			verLista.add(c);
			line = br.readLine();
		}
		br.close();
		return verLista;
	}

	public static ArrayList<Contacto> searchContact(String name) throws IOException {
		ArrayList<Contacto> buscarLista = new ArrayList();
		FileReader fr = new FileReader(ruta);
		BufferedReader br = new BufferedReader(fr);
		String line = br.readLine();
		while (line != null) {
			// separa los datos por las comas y los guarda en un array
			String[] datos = line.split(",");
			// saca los datos y los añade a la lista
			String nombre = datos[0];
			String edad = datos[1];
			String telefono = datos[2];
			if (nombre.equalsIgnoreCase(name)) {
				Contacto c = new Contacto(datos[0], Integer.parseInt(datos[1]), datos[2]);
				buscarLista.add(c);
			}
			line = br.readLine();
		}
		br.close();
		return buscarLista;
	}

	public static void deleteContact(String phone) throws IOException {
		ArrayList<Contacto> borrarLista = new ArrayList();
		FileReader fr = new FileReader(ruta);
		BufferedReader br = new BufferedReader(fr);
		String line = br.readLine();
		while(line != null) {
			//separa los datos por las comas y los guarda en un array
			String[] datos = line.split(",");
			//saca los datos y los añade a la lista
			String nombre = datos[0];
			String edad = datos[1];
			String telefono = datos[2];
			Contacto c = new Contacto(nombre, Integer.parseInt(edad), telefono);
			borrarLista.add(c);
			line = br.readLine();	
		}
		br.close();
		ArrayList<Contacto> newList = new ArrayList();
		for(Contacto c : borrarLista) {
			if(!c.getTelefono().equalsIgnoreCase(phone)){
				newList.add(c);
			}
		}
		FileWriter fw = new FileWriter(ruta);
		for (Contacto c : newList) {
			String newLine = c.getNombre() + "," + c.getEdad() + "," + c.getTelefono() + "\n";
			fw.write(newLine);
		}
		fw.close();
	}
	public static void borrarProfe(String phone) throws IOException{
		ArrayList<Contacto> lista_contactos = getContacts();
		File fichero = new File(ruta);
		fichero.delete();
		for (int i = 0; i < lista_contactos.size(); i++) {
			Contacto c = lista_contactos.get(i);
			if(c.getTelefono().equals(phone)) {
				
			}
			else {
				//insertarContacto(c);
			}
		}
	}
}
