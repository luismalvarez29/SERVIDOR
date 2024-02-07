package paqueteaccesodatos;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class FormAgenda
 */
@WebServlet("/FormAgenda")
public class FormAgenda extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public FormAgenda() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		//response.getWriter().append("Served at: ").append(request.getContextPath());
		String accion = request.getParameter("accion");
		if(accion.equals("insertar")) {
			String nombre = request.getParameter("nombre");
			String edad = request.getParameter("edad");
			String telefono = request.getParameter("telefono");
			Contacto c = new Contacto(nombre, Integer.parseInt(edad), telefono);
			AccesoDatos.insertarContacto(c);
			response.sendRedirect("FormAgenda.jsp");
		}
		else if(accion.equals("ver")) {
			ArrayList<Contacto> verLista = AccesoDatos.getContacts();
			request.setAttribute("verLista", verLista);
			request.getRequestDispatcher("verContactos.jsp").forward(request, response);
		}
		else if(accion.equals("buscar")) {
			String nombre = request.getParameter("nombre");
			ArrayList<Contacto> buscarLista = AccesoDatos.searchContact(nombre);
			request.setAttribute("buscarLista", buscarLista);
			request.getRequestDispatcher("verContactos.jsp").forward(request, response);
		}
		else if(accion.equals("borrar")) {
			String telefono = request.getParameter("telefono");
			AccesoDatos.deleteContact(telefono);
			response.sendRedirect("FormAgenda?accion=ver");
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
