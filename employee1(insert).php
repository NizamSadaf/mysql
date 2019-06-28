<?php
$servername="localhost";
$password="";
$username="root";
$dbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<html>
<style>
     form
    {
        padding-left: 40%; 
        padding-top: 20%;
        height: 150px;
        width: 30px;
    }
    input
    {
        height:30px;
        width:200px;
        margin:5px;
    }
</style>
<body>
	<form  name="form" action="" method="post">
		Employee Name:<input type="text" name="ename"><br>
		Street:<input type="text" name="street"><br>
		City:<input type="text" name="city"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$sql="insert into employee (employee_name,street,city) values('$_POST[ename]','$_POST[street]','$_POST[city]');";
		mysqli_query($conn,$sql);  	
 	?>
 	<script type="text/javascript">
 		alert("Succesfully Entered");
 	</script>
 	<?php
 }
 ?>
</body>
</html>
