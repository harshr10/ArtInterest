<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="ISO-8859-1"%>
<%@ page import="java.sql.*" %>
    
    <%
    String fname = request.getParameter("fname");
    String lname = request.getParameter("lname");
    String gender = request.getParameter("gender");
    String emailid = request.getParameter("emailid");
    String mobno = request.getParameter("mobno");
    String address = request.getParameter("address");
    String city = request.getParameter("city");
    String state = request.getParameter("state");
    String postalcode = request.getParameter("postalcode");
    String country = request.getParameter("country");
    

    try{

        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/artinterest" , "root" , "");
        Statement statement = conn.createStatement();
        PreparedStatement ps = conn.prepareStatement("insert into profile values(? , ? , ? , ? , ? , ? , ? , ? , ? , ?)");
        ps.setString(1 , fname);
        ps.setString(2 , lname);
        ps.setString(3 , gender);
        ps.setString(4 , emailid);
        ps.setString(5 , mobno);       
        ps.setString(6 , address);
        ps.setString(7 , city);
        ps.setString(8 , state);
        ps.setString(9 , postalcode);
        ps.setString(10 , country);

        int x = ps.executeUpdate();
        if(x!=0){
            out.print("Signup Success");
        }
        else{
            out.print("Error");   
        }
    }catch(Exception e){
        out.print(e);
    }
    %>