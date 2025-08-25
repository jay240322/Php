<html>
     <head>
	     <title>
		     first
			</title>
		</head>
	  <body>
	     <form method="POST">
		    enter number:
            <input type="number"name="number"><br>
            <input type="submit"value="sum"name="submit">
		  </form>
		</body>
</html>
<?php
if($_POST){
    $num = $_POST['number'];
    $sum = $num * $num;
    $cube = $num * $num * $num;

    echo"the sum of number is:$sum<br>";
    echo"the cube of number is:$cube";
}
?>