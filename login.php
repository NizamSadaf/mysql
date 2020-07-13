<?php
$link=mysqli_connect("localhost","root","","login");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="unm"><br>
	<input type="password" name="pwd">
    <input type="submit" name="submit">
</form>
<?php
$count=0;
if(isset($_POST["submit"]))
{
	
            $query=mysqli_query($link,"select * from sign_in where unm='$_POST[unm]' && password='$_POST[pwd]'");
            $count=mysqli_num_rows($query);
    if($count==0 || $count>1)
    {
    	echo "INVALID";
    }
    else
    {
    	echo "VALID";
    }
     
}
?>
</body>
</html>
