<?php
     $Name=$_POST["Name"];
	 $age=$_POST["age"];
	 $d=$_POST["d"];
	 $Steam=$_POST["Steam"];
	 $Email=$_POST["Email"];
	 $Password=$_POST["Password"];
	 $Role=$_POST["Role"];
	 $con=mysql_connect("localhost","root","");
	 mysql_select_db("dreamliferp");
	 mysql_query("insert into dreamlife(Name,age,d,Steam,Email,Password,Role) values('$Name','$age','$d','$Steam','$Email','$Password','$Role')");
	 echo("Registered");
	 include("register.php");
	 mysql_close($con);
?>