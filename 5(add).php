<?php
$servername="localhost";
$password="";
$username="root";
$dbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<html>
<body>
	<form  name="form" action="" method="post">
		Customer Name:<input type="text" name="cname"><br>
		Street:<input type="text" name="street"><br>
		City:<input type="text" name="city"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$sql="insert into customer (customer_name,customer_street,customer_city) values('$_POST[cname]','$_POST[street]','$_POST[city]');";
		mysqli_query($conn,$sql);  
    }	
 	?>
</body>
</html>

