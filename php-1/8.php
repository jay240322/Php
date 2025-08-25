<html>
     <head>
	     <title>
		     eight
			</title>
		</head>
	  <body>
	     <form method="POST">
		   Enter radius of circle:
           <input type="number"name="radius">
           <input type="submit"value="click">
		  </form>
		</body>
</html>
<?php
if($_POST){
    $radius = $_POST['radius'];

    $area = (3.14 * $radius * $radius);
    echo"the area of circle is $area";
}
?>