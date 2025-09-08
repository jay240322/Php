<!-- a program to check whether the number is positive / negative or zero entered by user -->
<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter number:
			<input type="number"name="num">
			<input type="submit"name="submit">
		  </form>
		</body>
	</html>
<?php
if($_POST){
	$num = $_POST['num'];

	if($num > 0){
		echo"$num is positive number";
	}
	elseif($num < 0){
		echo"$num is negative number";
	}
	else{
		echo"$num is zero";
	}
}
?>