<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Colores</title>
</head>
<body style="background-color:
    <% 
        String color = "";
		int random = (int) (Math.random()* 10);
        if(random < 3){
            color = "green";
        }
        else if(random > 3 && random < 5){
            color = "blue";
        }
        else if(random > 5 && random < 7){
            color = "red";
        }
        else {
        	color = "black";
        }
        out.print(color);
    %>;">
</body>
</html>
