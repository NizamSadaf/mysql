<?php
$servername="localhost";
$password="";
$username="root";
$dbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<html>
<style>
	table,th,td
        {
            border-collapse: collapse;
            border: 1px solid;
        }
        th,td
        {
        	text-align: center;
        }
    </style>
<body>
	<?php
	$sql="select loan_number from loan where amount between 10000 and 20000";
	$result=mysqli_query($conn,$sql);
	echo "<table>";
	echo "<tr>";
	echo "<th>" ;echo "Loan Number"; echo "</th>";
	/*echo "<th>" ;echo "Street"; echo "</th>";
	echo "<th>" ;echo "City"; echo "</th>";*/
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
            echo "<td>";echo $row["loan_number"];echo "</td>"; 
            /*echo "<td>";echo $row["street"];echo "</td>"; 
            echo "<td>";echo $row["city"];echo "</td>"; */
            echo "</tr>";
		}	
	}
	echo "</table>";
	?>
</body>
</html>