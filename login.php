<!doctype html>
<html>
<head>	
<title>Registration form</title>
<style>div {
    padding: 100px;
    border: 5px solid #4CAF50;
}
td{
padding:12px;
padding-left: 20px;
padding-right:20px;
width:150px;
}

</style>

<script src="registration_form.js">
</script>
</head>
<body bgcolor="powderblue">
<h1 style="text-align:center;"><u>registration_form!!</u></h1><br><br>
<div style="background-color:white"><form method="post" action="s.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<table>
		<tr><td></td>
			<td>FIRST NAME </td>
			<td><input id="fname" name="fname" type="text" required></td>
		</tr>
		<tr><td></td>
			<td>LAST NAME </td>
			<td><input id="lname" name="lname" type="text" required></td>
		</tr>
		<tr><td></td>
			<td>DATE OF BIRTH</td>
			<td><input id="dob" name="dob" type="date" style= "width:168px" required></td>
		</tr>
		<tr><td></td>
			<td>MOBILE NUMBER </td>
			<td><input id="mbno" name="mbno" type="tel" maxlength="10" required></td>
		</tr>
		<tr><td></td>
			<td>EMAIL ID </td>
			<td><input id="email" name="email" type="email" required>
</td>
		</tr>
		<tr><td></td>
			<td>GENDER</td>
			<td>
				<input type="radio" id="gender" name="gender" value="male" checked> Male
  				<input type="radio" id="gender" name="gender" value="female"> Female
			</td>
		</tr>
		<tr><td></td>
			<td>PASSWORD <br><br><br></td>
			<td><input id="pass" name="pass" type="password" required><br>
			(Minimum 7 characters required)</td>
			<td style="width:200px;">
			To make your password stronger <br>
			* Add Uppercase characters.	<br>
			* Add Numbers. <br>
			* Add Special Symbols like !,@,$,%,etc.
			</td>
		</tr>
		
		<tr><td></td>
			<td><input id="submit" type="submit" name="submit" value="Submit"></td>
			
		</tr>
		
		
</table><h3></h3>
</form>
</div>

</body>
</html>
