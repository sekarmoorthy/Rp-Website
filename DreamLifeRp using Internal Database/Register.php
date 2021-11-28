<?php include("index.html")?>
<body>
<div style="background-color:saddlebrown; width:1000px; margin-left : auto; margin-right : auto;" class="register">
<form style="margin-left: 35%; margin-right: 50%;" action="connect.php" method="post">

<br>
Name:
<input style="border-radius: 30px;" type="text" size="30" placeholder="enter your name" name="Name" required/>
<br><br>
Age:
<input style="border-radius: 30px;" type="number" name="age" required />
<br><br>
Dob:
<input style="border-radius: 30px;" type="date" name="d" required/>
<br><br>
Steam:
<input style="border-radius: 30px;" type="text" name="Steam" size="30" required />
<br><br>
Email:
<input style="border-radius: 30px;" type="email" name="Email" size="30" required/>
<br><br>
Password:
<input style="border-radius: 30px;" type="password" name="Password" min="4" maxlength="8" required/>
<br><br>
Role:
<select name="Role">
<option value=""></option>
<option value="EMS">EMS</option>
<option value="PD">PD</option>
<option value="MAFIA">MAFIA</option>
<option value="TAXI DRIVER">TAXI DRIVER</option>
<option value="MECHANIC">MECHANIC</option>
</select>
<br><br>
<input  type="submit" value="Register" />
<p></P>
</form>
</div>
</body>
<?php include("foot.html")?>

