<?php
$servername="localhost";
$password="";
$username="root";
$dbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<html>
<body>
	<?php
	$sql="select loan_number from loan where amount between 10000 and 20000";
	$result=mysqli_query($conn,$sql);
	echo "Loan Number"; 
	echo "<br>";
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result))
		{
			echo $row["loan_number"];
			echo "<br>";
		}	
	}
	?>
</body>
</html>
